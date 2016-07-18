<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Theming Controller
 *
 * @property \App\Model\Table\ThemingTable $Theming
 */
class ThemingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $theming = $this->paginate($this->Theming);

        $this->set(compact('theming'));
        $this->set('_serialize', ['theming']);
    }

    /**
     * View method
     *
     * @param string|null $id Theming id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $theming = $this->Theming->get($id, [
            'contain' => []
        ]);

        $this->set('theming', $theming);
        $this->set('_serialize', ['theming']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $theming = $this->Theming->newEntity();
        if ($this->request->is('post')) {
            $theming = $this->Theming->patchEntity($theming, $this->request->data);
            if ($this->Theming->save($theming)) {
                $this->Flash->success(__('The theming has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The theming could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('theming'));
        $this->set('_serialize', ['theming']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Theming id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $theming = $this->Theming->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $theming = $this->Theming->patchEntity($theming, $this->request->data);
            if ($this->Theming->save($theming)) {
                $this->Flash->success(__('The theming has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The theming could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('theming'));
        $this->set('_serialize', ['theming']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Theming id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $theming = $this->Theming->get($id);
        if ($this->Theming->delete($theming)) {
            $this->Flash->success(__('The theming has been deleted.'));
        } else {
            $this->Flash->error(__('The theming could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
