<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Designimage Controller
 *
 * @property \App\Model\Table\DesignimageTable $Designimage
 */
class DesignimageController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $designimage = $this->paginate($this->Designimage);

        $this->set(compact('designimage'));
        $this->set('_serialize', ['designimage']);
    }

    /**
     * View method
     *
     * @param string|null $id Designimage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $designimage = $this->Designimage->get($id, [
            'contain' => []
        ]);

        $this->set('designimage', $designimage);
        $this->set('_serialize', ['designimage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $designimage = $this->Designimage->newEntity();
        if ($this->request->is('post')) {
            $designimage = $this->Designimage->patchEntity($designimage, $this->request->data);
            if ($this->Designimage->save($designimage)) {
                $this->Flash->success(__('The designimage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The designimage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('designimage'));
        $this->set('_serialize', ['designimage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Designimage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $designimage = $this->Designimage->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $designimage = $this->Designimage->patchEntity($designimage, $this->request->data);
            if ($this->Designimage->save($designimage)) {
                $this->Flash->success(__('The designimage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The designimage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('designimage'));
        $this->set('_serialize', ['designimage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Designimage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $designimage = $this->Designimage->get($id);
        if ($this->Designimage->delete($designimage)) {
            $this->Flash->success(__('The designimage has been deleted.'));
        } else {
            $this->Flash->error(__('The designimage could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
