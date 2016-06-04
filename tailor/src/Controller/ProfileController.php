<?php
namespace App\Controller;

use App\Controller\AppController;
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
        $profile = $this->paginate($this->Profile);

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
                'conditions' => ["profile.user_id" => "$id"],
                'contain' => ['users']
            ])->first();
        }else {
            $profile = $this->Profile->get($id, [
                'contain' => []
            ]);

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
    public function edit($id = null)
    {
        if($id == null){
            $id = $this->Auth->user("id");
        }
        $profile = $this->Profile->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
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
        if (in_array($this->request->action, ['delete', 'add', 'index'])) {
            return $this->redirect(['action' => 'view']);
        }

        return true;
    }
}
