<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->config('authenticate', [
            'Form' => [
                'fields' => [
                  'email' => 'email',
                  'password' => 'password'
                ]
              ]
        ]);
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','login','signup','activate']);
    }

    public function login(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            
            $user = $this->Auth->identify();
            //print_r($user);exit;
            if ($user) {
                if($user["isActive"] == 1)
                {
                    $this->Auth->setUser($user);
                    if($user["userType"] == 1){
                        return $this->redirect(["controller" => "profile", 'action' => 'view']);
                    }else{
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                }else{
                    $user = $this->Users->newEntity();
                    $this->Flash->error(__('Profile not acticvated. Please contact admin'), [
                        
                    ]);
                }
            } else {
                $this->Flash->error(__('Username or password is incorrect'), [
                    'key' => 'auth'
                ]);
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id = null)
    {
        $user = "";
        //print_r($user);exit;
        if($this->request->is('post')){
            $dc = $this->request->data["MType"];
            $dn = explode(" ",$this->request->data["tailor_name"]) ;
            if(isset($dc) && $dc != ""){
                if($dc == "free")
                    $dc = ["Users.mType" => 1];
                else if($dc == "silver")
                    $dc = ["Users.mType" => 2];
                else if($dc == "gold")
                    $dc = ["Users.mType" => 3];
            }
            
            if(isset($dn) && is_array($dn)){
                //print_r($dn[0]);exit;
                $dn = ["Users.fName LIKE" => "%". $dn[0]."%"];
            }
            //print_r($dc);exit;
            $user = $this->paginate($this->Users->find("all")->where(["userType" => $this->request->data["uType"],$dn ,$dc]));
            $user->uType = $this->request->data["uType"];
        }else{
            if($id == null){
                $user = $this->paginate($this->Users->find("all")->where(["userType" => "1"]));
                $user->uType = 1;
            }else{
                $user = $this->paginate($this->Users->find("all")->where(["userType" => "2"]));
                $user->uType = 2;
            }
        }
        
        $this->viewBuilder()->layout('admin_layout');
                //print_r($user);exit;
//        $result = $this->User->find("getUsers");
//        foreach ($result as $show){
//           print_r($show);
//        }
//        
//        
//        $wq = ["user_id" => 1, "fName" => "asd"];
//        $result = $this->User->find("getUserByID",$wq);
//         foreach ($result as $show){
//            print_r($show);
//         }
//        $result = $this->User->find("getUserByID",["user_id" => 2]);
//        foreach ($result as $show){
//            print_r($show);
//        }
        //$result = $this->Users->find("getByTypeID",["userType" => 1]);
            //print_r($result->first());
            //foreach ($result as $show){
            //    print_r($show);
            //}
        
        
         
//         }
        //exit;
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->username = $user->email;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    public function signup()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            if(isset($this->request->data["isNews"]) && $this->request->data["isNews"] == 'on'){
                $this->request->data["isNews"] = 1;
            }
            //print_r($this->request->data);exit;
            if($this->request->data["g-recaptcha-response"] != '')
            {
                $user = $this->Users->patchEntity($user, $this->request->data);
                $user->username = $user->email;
                
                if ($this->Users->save($user)) {
                    $pTable  = \Cake\ORM\TableRegistry::get("profile");
                    $profileObj = $pTable->newEntity();
                    $profileObj->user_id = $user->id;
                    $profileObj->detail = "Detail";
                    $profileObj->ratingAvg = 0;
                    $profileObj->city = $user->city;
                    $profileObj->country = $user->country;
                    $profileObj->address = "Address";
                    $profileObj->memberType = 1;
                    $profileObj->telephone = "(000) 123-1234";
                    $profileObj->mobile = "(000) 123-1234";
                    $profileObj->happyCustomerCount = 0;
                    $profileObj->lat = "0";
                    $profileObj->glong = '0';
                    if($user->userType == 2){
                        //$user->isActive = 1;
                        $msg = "Dear Customer welcome to Online Tailor <a href='http://planesolutions.net/PandoraDesign/Tailor/users/activate/". $user->id ."' >Activate</a>";
                    }else{
                        $msg = "Dear Tailor welcome to Online Tailor. Your account will be activated with in 24 hours.";
                    }
                    $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
                    $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
                    $headers .= "CC: susan@example.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    if($pTable->save($profileObj)){
                        mail($user->email,"Welcome to Online Tailor.",$msg,$headers);
                        $this->Flash->success(__('Please check your inbox'));
                        return $this->redirect([ 'action' => 'login']);
                    }
                }
            } 
            else 
            {
                $this->Flash->error(__('Are you robot?'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->viewBuilder()->layout('admin_layout');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function activate($id){
        $user = $this->Users->get($id);
        
        if($user->isActive == 0)
            $user->isActive = 1;
        
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Successfully activate your account.'));
        } else {
            $this->Flash->error(__('Something went wrong.'));
        }
        return $this->redirect(['action' => 'login']);
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['userType']) && $user['userType'] === 3) {
            return true;
        }
        // The owner of an article can edit and delete it
        if (in_array($this->request->action, ['edit', 'delete'])) {
            $articleId = (int)$this->request->params['pass'][0];
            if ($this->Users->isOwnedBy($articleId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}
