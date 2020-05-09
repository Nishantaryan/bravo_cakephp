<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trailers Controller
 *
 * @property \App\Model\Table\TrailersTable $Trailers
 *
 * @method \App\Model\Entity\Trailer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrailersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Drivers'],
        ];
        $trailers = $this->paginate($this->Trailers);

        $this->set(compact('trailers'));
    }

    /**
     * View method
     *
     * @param string|null $id Trailer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trailer = $this->Trailers->get($id, [
            'contain' => ['Drivers'],
        ]);

        $this->set('trailer', $trailer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trailer = $this->Trailers->newEntity();
        if ($this->request->is('post')) {
            $trailer = $this->Trailers->patchEntity($trailer, $this->request->getData());
            if ($this->Trailers->save($trailer)) {
                $this->Flash->success(__('The trailer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trailer could not be saved. Please, try again.'));
        }
        $drivers = $this->Trailers->Drivers->find('list', ['limit' => 200]);
        $this->set(compact('trailer', 'drivers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trailer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trailer = $this->Trailers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trailer = $this->Trailers->patchEntity($trailer, $this->request->getData());
            if ($this->Trailers->save($trailer)) {
                $this->Flash->success(__('The trailer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trailer could not be saved. Please, try again.'));
        }
        $drivers = $this->Trailers->Drivers->find('list', ['limit' => 200]);
        $this->set(compact('trailer', 'drivers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trailer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trailer = $this->Trailers->get($id);
        if ($this->Trailers->delete($trailer)) {
            $this->Flash->success(__('The trailer has been deleted.'));
        } else {
            $this->Flash->error(__('The trailer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
