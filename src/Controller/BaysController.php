<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bays Controller
 *
 * @property \App\Model\Table\BaysTable $Bays
 *
 * @method \App\Model\Entity\Bay[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BaysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Trailers', 'Locations'],
        ];
        $bays = $this->paginate($this->Bays);

        $this->set(compact('bays'));
    }

    /**
     * View method
     *
     * @param string|null $id Bay id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bay = $this->Bays->get($id, [
            'contain' => ['Trailers', 'Locations'],
        ]);

        $this->set('bay', $bay);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bay = $this->Bays->newEntity();
        if ($this->request->is('post')) {
            $bay = $this->Bays->patchEntity($bay, $this->request->getData());
            if ($this->Bays->save($bay)) {
                $this->Flash->success(__('The bay has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bay could not be saved. Please, try again.'));
        }
        $trailers = $this->Bays->Trailers->find('list', ['limit' => 200]);
        $locations = $this->Bays->Locations->find('list', ['limit' => 200]);
        $this->set(compact('bay', 'trailers', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bay id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bay = $this->Bays->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bay = $this->Bays->patchEntity($bay, $this->request->getData());
            if ($this->Bays->save($bay)) {
                $this->Flash->success(__('The bay has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bay could not be saved. Please, try again.'));
        }
        $trailers = $this->Bays->Trailers->find('list', ['limit' => 200]);
        $locations = $this->Bays->Locations->find('list', ['limit' => 200]);
        $this->set(compact('bay', 'trailers', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bay id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bay = $this->Bays->get($id);
        if ($this->Bays->delete($bay)) {
            $this->Flash->success(__('The bay has been deleted.'));
        } else {
            $this->Flash->error(__('The bay could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
