<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Designtype Controller
 *
 * @property \App\Model\Table\DesigntypeTable $Designtype
 */
class DesigntypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $designtype = $this->paginate($this->Designtype);

        $this->set(compact('designtype'));
        $this->set('_serialize', ['designtype']);
    }

    /**
     * View method
     *
     * @param string|null $id Designtype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $designtype = $this->Designtype->get($id, [
            'contain' => []
        ]);

        $this->set('designtype', $designtype);
        $this->set('_serialize', ['designtype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $designtype = $this->Designtype->newEntity();
        if ($this->request->is('post')) {
            $designtype = $this->Designtype->patchEntity($designtype, $this->request->data);
            if ($this->Designtype->save($designtype)) {
                $this->Flash->success(__('The designtype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The designtype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('designtype'));
        $this->set('_serialize', ['designtype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Designtype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $designtype = $this->Designtype->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $designtype = $this->Designtype->patchEntity($designtype, $this->request->data);
            if ($this->Designtype->save($designtype)) {
                $this->Flash->success(__('The designtype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The designtype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('designtype'));
        $this->set('_serialize', ['designtype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Designtype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $designtype = $this->Designtype->get($id);
        if ($this->Designtype->delete($designtype)) {
            $this->Flash->success(__('The designtype has been deleted.'));
        } else {
            $this->Flash->error(__('The designtype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
