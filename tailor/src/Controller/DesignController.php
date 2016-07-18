<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Design Controller
 *
 * @property \App\Model\Table\DesignTable $Design
 */
class DesignController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($dID = null)
    {
        $designs = "";
        //print_r($dID);exit;
        if($this->request->is('post')){
            $dc = $this->request->data["design_city"];
            $dn = $this->request->data["design_name"];
            if(isset($dc) && $dc != ""){
                $dc = ["Users.city LIKE" => "%".$dc."%"];
            }
            if(isset($dn) && $dn != ""){
                $dn = ["Design.designName LIKE" => "%". $dn."%"];
            }
            $designs = $this->paginate($this->Design->find("all")->contain(["Designimage", "Users"])->distinct(["Design.id"])
                ->where([$dn, $dc]));
            
        }else{
            
            if(isset($dID) && $dID != null){
                $designs = $this->paginate($this->Design->find("all")->contain("Designimage")->distinct(["Design.id"])
                    ->where(["designType_ID" => $dID]));

            }else{
                $designs = $this->paginate($this->Design->find("all")->contain("Designimage")->distinct(["Design.id"]));
            }
        }
        
        $this->set(compact('designs'));
        $this->set('_serialize', ['designs']);
        $this->set('mDesigns', $designs);
    }

    /**
     * View method
     *
     * @param string|null $id Design id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function tailorview($id = null){
        $designs = "";
        if($id != null){
            $designs = $this->paginate($this->Design->find("all")->contain("Designimage")->distinct(["Design.id"])
                        ->where(["User_id" => $id]));
            
        }else{
            return $this->redirect([ 'action' => 'index']);
        }
        $this->set(compact('designs'));
            $this->set('_serialize', ['designs']);
            $this->set('mDesigns', $designs);
    }
    public function view($id = null)
    {
        $designimage = TableRegistry::get('Designimage');
        
        $design = $this->Design->get($id, [
            'contain' => ["Designtype", "Users", "Profile"]
            
        ]);
        
        $design->imgs = $designimage->find("all")->where(["design_ID" => $id]);
        $this->set('design', $design);
        $this->set('_serialize', ['design']);
    }
    public function rated(){
        if ($this->request->is('post')) {
            $udrating = TableRegistry::get('Udrating');
            $udratingEnt = $udrating->newEntity();
            $this->autoRender = false;
            $udratingEnt = $udrating->patchEntity($udratingEnt, $this->request->data);
            $udratingEnt->profileID = 0;
            //print_r($udrating->find("all")->where("Udrating.designID = ". $udratingEnt->designID . " AND Udrating.userID = ". $udratingEnt->userID)->first());exit;
            $udratingEnt1 = $udrating->find("all")->where("Udrating.designID = ". $udratingEnt->designID . " AND Udrating.userID = ". $udratingEnt->userID)->first();
            $design = $this->Design->get($udratingEnt->designID);
            //print_r($design);exit;
            if(isset($udratingEnt1->id)){
                //print_r($udratingEnt1->id);exit;
                $udratingEnt->id = $udratingEnt1->id;
                $design->totalRating = (int)$design->totalRating - (int)$udratingEnt1->rating;
                $design->totalRating = (int)$design->totalRating + (int)$udratingEnt->rating;
            }else{
                $design->totalRating = (int)$design->totalRating + (int)$udratingEnt->rating;
                $design->ratingCount = (int)$design->ratingCount + 1;
            }
            $design->avrRating = (int)$design->totalRating / ((int)$design->ratingCount * 5) * 5;
            if ($udrating->save($udratingEnt)) {
                $this->Design->save($design);
                print_r("done");exit;
                
            } else {
                print_r("fail");exit;
                
            }
            
        }
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $designimage = TableRegistry::get('Designimage');
        
        $design = $this->Design->newEntity();
        if ($this->request->is('post')) {
            $design = $this->Design->patchEntity($design, $this->request->data);
            $design->user_id = $design->tailorID;
            $design->designType_ID = $design->designTypeID;
            if ($this->Design->save($design)) {
                //print_r($design);exit;
                if(isset($this->request->data["imgs"]) && isset($this->request->data["imgs"][0]["tmp_name"]) && $this->request->data["imgs"][0]["tmp_name"] != ''){
                    foreach($this->request->data["imgs"] as $img){
                        $picPath = 'media/design/' . date("d_M_y_h_m_s") . $img["name"];
                        move_uploaded_file($img["tmp_name"], WWW_ROOT . $picPath );
                        //$this->request->data["avatar"] = $picPath ;

                        $designimageEnt = $designimage->newEntity();
                        $designimageEnt->design_ID = $design->id;
                        $designimageEnt->img = $picPath ;
                        $designimage->save($designimageEnt);
                    }
                }


                $this->Flash->success(__('The design has been saved.'));
                return $this->redirect(['action' => 'tailorview',$design->user_id]);
            } else {
                $this->Flash->error(__('The design could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('design'));
        $this->set('_serialize', ['design']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Design id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $designimage = TableRegistry::get('Designimage');
        
        $design = $this->Design->get($id, [
            'contain' => []
        ]);
        $design->tailorID = $design->user_id ;
        $design->designTypeID = $design->designType_ID ;
            
        $design->imgs = $designimage->find("all")->where(["design_ID" => $id]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            //print_r($this->request->data);exit;
            $design = $this->Design->patchEntity($design, $this->request->data);
            $design->user_id = $this->request->data["tailorID"];
            $design->designType_ID = $this->request->data["designTypeID"];
            if(isset($this->request->data["imgs"]) && isset($this->request->data["imgs"][0]["tmp_name"]) && $this->request->data["imgs"][0]["tmp_name"] != ''){
                print_r($this->request->data["imgs"][0]["tmp_name"]);exit;
                foreach($this->request->data["imgs"] as $img){
                    $picPath = 'media/design/' . date("d_M_y_h_m_s") . $img["name"];
                    move_uploaded_file($img["tmp_name"], WWW_ROOT . $picPath );
                    //$this->request->data["avatar"] = $picPath ;
                    
                    $designimageEnt = $designimage->newEntity();
                    $designimageEnt->design_ID = $design->id;
                    $designimageEnt->img = $picPath ;
                    $designimage->save($designimageEnt);
                }
            }
            
            if ($this->Design->save($design)) {
                $this->Flash->success(__('The design has been saved.'));
                return $this->redirect(['action' => 'tailorview',$design->user_id]);
            } else {
                $this->Flash->error(__('The design could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('design'));
        $this->set('_serialize', ['design']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Design id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $design = $this->Design->get($id);
        $uid= $design->user_id;
        if ($this->Design->delete($design)) {
            $this->Flash->success(__('The design has been deleted.'));
        } else {
            $this->Flash->error(__('The design could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'tailorview',$uid]);
    }
}
