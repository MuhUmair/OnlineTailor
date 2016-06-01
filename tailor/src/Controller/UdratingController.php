<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Udrating Controller
 *
 * @property \App\Model\Table\UdratingTable $Udrating
 */
class UdratingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $udrating = $this->paginate($this->Udrating);

        $this->set(compact('udrating'));
        $this->set('_serialize', ['udrating']);
    }

    /**
     * View method
     *
     * @param string|null $id Udrating id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $udrating = $this->Udrating->get($id, [
            'contain' => []
        ]);

        $this->set('udrating', $udrating);
        $this->set('_serialize', ['udrating']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $udrating = $this->Udrating->newEntity();
        if ($this->request->is('post')) {
            $udrating = $this->Udrating->patchEntity($udrating, $this->request->data);
            if ($this->Udrating->save($udrating)) {
                $this->Flash->success(__('The udrating has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The udrating could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('udrating'));
        $this->set('_serialize', ['udrating']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Udrating id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $udrating = $this->Udrating->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $udrating = $this->Udrating->patchEntity($udrating, $this->request->data);
            if ($this->Udrating->save($udrating)) {
                $this->Flash->success(__('The udrating has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The udrating could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('udrating'));
        $this->set('_serialize', ['udrating']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Udrating id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $udrating = $this->Udrating->get($id);
        if ($this->Udrating->delete($udrating)) {
            $this->Flash->success(__('The udrating has been deleted.'));
        } else {
            $this->Flash->error(__('The udrating could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
