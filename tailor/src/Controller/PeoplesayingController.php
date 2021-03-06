<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Peoplesaying Controller
 *
 * @property \App\Model\Table\PeoplesayingTable $Peoplesaying
 */
class PeoplesayingController extends AppController
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
        $peoplesaying = $this->paginate($this->Peoplesaying);
        $this->viewBuilder()->layout('admin_layout');
        $this->set(compact('peoplesaying'));
        $this->set('_serialize', ['peoplesaying']);
    }

    /**
     * View method
     *
     * @param string|null $id Peoplesaying id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin_layout');
        $peoplesaying = $this->Peoplesaying->get($id, [
            'contain' => []
        ]);

        $this->set('peoplesaying', $peoplesaying);
        $this->set('_serialize', ['peoplesaying']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('admin_layout');
        
        $peoplesaying = $this->Peoplesaying->newEntity();
        if ($this->request->is('post')) {
            $peoplesaying = $this->Peoplesaying->patchEntity($peoplesaying, $this->request->data);
            if ($this->Peoplesaying->save($peoplesaying)) {
                $this->Flash->success(__('The peoplesaying has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peoplesaying could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('peoplesaying'));
        $this->set('_serialize', ['peoplesaying']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Peoplesaying id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('admin_layout');
        $peoplesaying = $this->Peoplesaying->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peoplesaying = $this->Peoplesaying->patchEntity($peoplesaying, $this->request->data);
            if ($this->Peoplesaying->save($peoplesaying)) {
                $this->Flash->success(__('The peoplesaying has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peoplesaying could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('peoplesaying'));
        $this->set('_serialize', ['peoplesaying']);

    }

    /**
     * Delete method
     *
     * @param string|null $id Peoplesaying id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $this->request->allowMethod(['post', 'delete']);
        $peoplesaying = $this->Peoplesaying->get($id);
        if ($this->Peoplesaying->delete($peoplesaying)) {
            $this->Flash->success(__('The peoplesaying has been deleted.'));
        } else {
            $this->Flash->error(__('The peoplesaying could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['userType']) && $user['userType'] === 3) {
            return true;
        }
        return false;
    }
}
