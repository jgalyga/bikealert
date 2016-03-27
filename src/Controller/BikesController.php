<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bikes Controller
 *
 * @property \App\Model\Table\BikesTable $Bikes
 */
class BikesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $bikes = $this->Bikes->find('all', [
                'contain' => ['Users'],
                'conditions' => [
                    'Bikes.user_id' => $this->Auth->user('id'),
                ]
            ]);



        $this->set(compact('bikes'));
        $this->set('_serialize', ['bikes']);
    }

    /**
     * View method
     *
     * @param string|null $id Bike id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bike = $this->Bikes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('bike', $bike);
        $this->set('_serialize', ['bike']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bike = $this->Bikes->newEntity();
        if ($this->request->is('post')) {
            $bike = $this->Bikes->patchEntity($bike, $this->request->data);
            $bike->user_id = $this->Auth->user('id');
            if ($this->Bikes->save($bike)) {
                $this->Flash->success(__('The bike has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bike could not be saved. Please, try again.'));
            }
        }
        $users = $this->Bikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('bike', 'users'));
        $this->set('_serialize', ['bike']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bike id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bike = $this->Bikes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bike = $this->Bikes->patchEntity($bike, $this->request->data);
            if ($this->Bikes->save($bike)) {
                $this->Flash->success(__('The bike has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bike could not be saved. Please, try again.'));
            }
        }
        $users = $this->Bikes->Users->find('list', ['limit' => 200]);
        $this->set(compact('bike', 'users'));
        $this->set('_serialize', ['bike']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bike id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bike = $this->Bikes->get($id);
        if ($this->Bikes->delete($bike)) {
            $this->Flash->success(__('The bike has been deleted.'));
        } else {
            $this->Flash->error(__('The bike could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
