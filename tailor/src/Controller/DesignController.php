<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Design Controller
 *
 * @property \App\Model\Table\DesignTable $Design
 */
class DesignController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        //$design = $this->paginate($this->Design);
        $result = $this->Design->find("getDesigns");
            //print_r($result->first());
            foreach ($result as $show){
                print_r($show);
            }
        
         
//         }
        exit;
        
        $this->set(compact('design'));
        $this->set('_serialize', ['design']);
    }

    /**
     * View method
     *
     * @param string|null $id Design id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $design = $this->Design->get($id, [
            'contain' => []
        ]);

        $this->set('design', $design);
        $this->set('_serialize', ['design']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $design = $this->Design->newEntity();
        if ($this->request->is('post')) {
            $design = $this->Design->patchEntity($design, $this->request->data);
            if ($this->Design->save($design)) {
                $this->Flash->success(__('The design has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The design could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('design'));
        $this->set('_serialize', ['design']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Design id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $design = $this->Design->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $design = $this->Design->patchEntity($design, $this->request->data);
            if ($this->Design->save($design)) {
                $this->Flash->success(__('The design has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The design could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('design'));
        $this->set('_serialize', ['design']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Design id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $design = $this->Design->get($id);
        if ($this->Design->delete($design)) {
            $this->Flash->success(__('The design has been deleted.'));
        } else {
            $this->Flash->error(__('The design could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
