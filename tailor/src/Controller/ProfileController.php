<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Profile Controller
 *
 * @property \App\Model\Table\ProfileTable $Profile
 */
class ProfileController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->isAuthorized($this->Auth->user());
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $profile = $this->paginate($this->Profile->find("all",
                [
                    'contain' => ['users'],
                    'conditions' => ['Profile.user_id <> '. $this->Auth->user("id") ." AND users.userType = 1"]
                ]));

        $this->set(compact('profile'));
        $this->set('_serialize', ['profile']);
    }

    /**
     * View method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profile = "";
        //print_r($this->Auth->user("id"));exit;
        if($id == null){
            $id = $this->Auth->user("id");
            $profile = $this->Profile->find("all", [
                'conditions' => ["Profile.user_id" => "$id"],
                'contain' => ['users']
            ])->first();
        }else {
            $profile = $this->Profile->get($id, [
                'contain' => ['users']
            ]);

        }
        
        if($profile["avatar"] != null && $profile["avatar"] != "null" && $profile["avatar"] != ""){
            $profile["avatar"] = $this->request->webroot . $profile["avatar"]; 
        }else{
            $profile["avatar"] = $this->request->webroot . "img/tailor.png"; 
            
        }
        //print_r($profile);exit;
        $this->set('profile', $profile);
        $this->set('_serialize', ['profile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profile = $this->Profile->newEntity();
        if ($this->request->is('post')) {
            $avatarObj = $this->request->data['avatar'];
            
            if(isset($avatarObj["name"])){
                $imgPath = 'media\\profiles\\' . date("Y_m_d_H_i_s") .".". $avatarObj['name'];
                //print_r($imgPath );exit;
                move_uploaded_file($avatarObj["tmp_name"], WWW_ROOT . $imgPath);
                $this->request->data['avatar'] = $imgPath;
            }
            //print_r($avatarObj);exit;
            $profile = $this->Profile->patchEntity($profile, $this->request->data);
            //print_r($profile);exit;
            if ($this->Profile->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The profile could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('profile'));
        $this->set('_serialize', ['profile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function ratedp(){
        if ($this->request->is('post')) {
            $udrating = TableRegistry::get('Udrating');
            $user = TableRegistry::get('Users');
            $udratingEnt = $udrating->find('all')->where(['ProfileID' => $this->request->data['userID']]);
            $usersR = "<ul>";
            foreach ($udratingEnt as $s){
                $u = $user->find("all")->where(["id" => $s->userID])->first();
                $usersR .= "<li>" .$u['fName'] ." ". $u['lName'] . "</li>"; 
            }
            $usersR .= "</ul>";
            print_r( $usersR);exit;
        }
    }
    public function rated(){
        if ($this->request->is('post')) {
            $udrating = TableRegistry::get('Udrating');
            $udratingEnt = $udrating->newEntity();
            $udratingEnt = $udrating->patchEntity($udratingEnt, $this->request->data);
            //print_r($udratingEnt);exit;
            $udratingEnt->designID = 0;
            $udratingEnt1 = $udrating->find("all")->where("Udrating.profileID = ". $udratingEnt->profileID . " AND Udrating.userID = ". $udratingEnt->userID)->first();
            $profile = $this->Profile->get($udratingEnt->profileID);
            //print_r($design);exit;
            if(isset($udratingEnt1->id)){
                //print_r($udratingEnt1->id);exit;
                $udratingEnt->id = $udratingEnt1->id;
                $profile->totalRating = (int)$profile->totalRating - (int)$udratingEnt1->rating;
                $profile->totalRating = (int)$profile->totalRating + (int)$udratingEnt->rating;
            }else{
                $profile->totalRating = (int)$profile->totalRating + (int)$udratingEnt->rating;
                $profile->ratingCount = (int)$profile->ratingCount + 1;
            }
            $profile->avrRating = (int)$profile->totalRating / ((int)$profile->ratingCount * 5) * 5;
            if ($udrating->save($udratingEnt)) {
                $this->Profile->save($profile);
                print_r("done");exit;
                
            } else {
                print_r("fail");exit;
                
            }
            
        }
    }
    
    public function edit($id = null)
    {
        if($id == null){
            $id = $this->Auth->user("id");
        }
        $profile = $this->Profile->get($id, [
            'contain' => ["users"]
        ]);
        //print_r($profile );exit;
        if ($this->request->is(['patch', 'post', 'put'])) {
            //print_r(date("d_M_y_h_m_s"));exit;
            if(isset($this->request->data["avatar"]) && isset($this->request->data["avatar"]["tmp_name"])){
                $picPath = 'media/profile/' . date("d_M_y_h_m_s") . $this->request->data["avatar"]["name"];
                move_uploaded_file($this->request->data["avatar"]["tmp_name"], WWW_ROOT . $picPath );
                $this->request->data["avatar"] = $picPath ;
            }
            $profile = $this->Profile->patchEntity($profile, $this->request->data);
            if ($this->Profile->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));
                //if($profile->user->userType == 1){
                    return $this->redirect(['action' => 'view']);
                //}else{
                //    return $this->redirect(['action' => 'index']);
                //}

            } else {
                $this->Flash->error(__('The profile could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('profile'));
        $this->set('_serialize', ['profile']);
    }

    public function changepassword($id = null)
    {
        if($id == null){
            $id = $this->Auth->user("id");
        }
        $profile = $this->Profile->get($id, [
            'contain' => ["users"]
        ]);
        //print_r($profile );exit;
        if ($this->request->is(['patch', 'post', 'put'])) {
            //print_r(date("d_M_y_h_m_s"));exit;
            if(isset($this->request->data["avatar"]) && isset($this->request->data["avatar"]["tmp_name"])){
                $picPath = 'media/profile/' . date("d_M_y_h_m_s") . $this->request->data["avatar"]["name"];
                move_uploaded_file($this->request->data["avatar"]["tmp_name"], WWW_ROOT . $picPath );
                $this->request->data["avatar"] = $picPath ;
            }
            $profile = $this->Profile->patchEntity($profile, $this->request->data);
            if ($this->Profile->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));
                return $this->redirect(['action' => 'index']);

            } else {
                $this->Flash->error(__('The profile could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('profile'));
        $this->set('_serialize', ['profile']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profile = $this->Profile->get($id);
        if ($this->Profile->delete($profile)) {
            $this->Flash->success(__('The profile has been deleted.'));
        } else {
            $this->Flash->error(__('The profile could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // The owner of an article can edit and delete it
        if (in_array($this->request->action, ['delete', 'add'])) {
            return $this->redirect(['action' => 'view']);
        }

        return true;
    }
}
