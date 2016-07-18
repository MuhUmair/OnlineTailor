<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Socialmedia Controller
 *
 * @property \App\Model\Table\SocialmediaTable $Socialmedia
 */
class SocialmediaController extends AppController
{

    public function beforeFilter(Event $event)
    {
        if(!$this->isAuthorized($this->Auth->user())){
            $this->redirect(array(
                'controller' => 'home',
                'action' => 'index', 
                $this->request->data['ItQuery']['id'])
            );
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $socialmedia = $this->paginate($this->Socialmedia);
        $this->viewBuilder()->layout('admin_layout');
        $this->set(compact('socialmedia'));
        $this->set('_serialize', ['socialmedia']);
    }

    /**
     * View method
     *
     * @param string|null $id Socialmedia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin_layout');
        $socialmedia = $this->Socialmedia->get($id, [
            'contain' => []
        ]);

        $this->set('socialmedia', $socialmedia);
        $this->set('_serialize', ['socialmedia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('admin_layout');
        $socialmedia = $this->Socialmedia->newEntity();
        if ($this->request->is('post')) {
            $socialmedia = $this->Socialmedia->patchEntity($socialmedia, $this->request->data);
            if ($this->Socialmedia->save($socialmedia)) {
                $this->Flash->success(__('The socialmedia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The socialmedia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('socialmedia'));
        $this->set('_serialize', ['socialmedia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Socialmedia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('admin_layout');
        $socialmedia = $this->Socialmedia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialmedia = $this->Socialmedia->patchEntity($socialmedia, $this->request->data);
            if ($this->Socialmedia->save($socialmedia)) {
                $this->Flash->success(__('The socialmedia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The socialmedia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('socialmedia'));
        $this->set('_serialize', ['socialmedia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Socialmedia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('admin_layout');
        $this->request->allowMethod(['post', 'delete']);
        $socialmedia = $this->Socialmedia->get($id);
        if ($this->Socialmedia->delete($socialmedia)) {
            $this->Flash->success(__('The socialmedia has been deleted.'));
        } else {
            $this->Flash->error(__('The socialmedia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // The owner of an article can edit and delete it
        if (in_array($this->request->action, ['add', 'delete'])) {
            return false;
        }
        // Admin can access every action
        if (isset($user['userType']) && $user['userType'] === 3) {
            return true;
        }
        return false;
    }
}
