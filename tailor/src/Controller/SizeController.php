<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Size Controller
 *
 * @property \App\Model\Table\SizeTable $Size
 */
class SizeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $size = $this->paginate($this->Size);

        $this->set(compact('size'));
        $this->set('_serialize', ['size']);
    }

    /**
     * View method
     *
     * @param string|null $id Size id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $size = $this->Size->get($id, [
            'contain' => []
        ]);

        $this->set('size', $size);
        $this->set('_serialize', ['size']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $size = $this->Size->newEntity();
        if ($this->request->is('post')) {
            $size = $this->Size->patchEntity($size, $this->request->data);
            if ($this->Size->save($size)) {
                $this->Flash->success(__('The size has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The size could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('size'));
        $this->set('_serialize', ['size']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Size id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $size = $this->Size->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $size = $this->Size->patchEntity($size, $this->request->data);
            if ($this->Size->save($size)) {
                $this->Flash->success(__('The size has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The size could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('size'));
        $this->set('_serialize', ['size']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Size id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $size = $this->Size->get($id);
        if ($this->Size->delete($size)) {
            $this->Flash->success(__('The size has been deleted.'));
        } else {
            $this->Flash->error(__('The size could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
