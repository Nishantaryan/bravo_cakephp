<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cocktails Controller
 *
 * @property \App\Model\Table\CocktailsTable $Cocktails
 *
 * @method \App\Model\Entity\Cocktail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CocktailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cocktails = $this->paginate($this->Cocktails);

        $this->set(compact('cocktails'));
    }

    /**
     * View method
     *
     * @param string|null $id Cocktail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cocktail = $this->Cocktails->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('cocktail', $cocktail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cocktail = $this->Cocktails->newEntity();
        if ($this->request->is('post')) {
            $cocktail = $this->Cocktails->patchEntity($cocktail, $this->request->getData());
            if ($this->Cocktails->save($cocktail)) {
                $this->Flash->success(__('The cocktail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cocktail could not be saved. Please, try again.'));
        }
        $users = $this->Cocktails->Users->find('list', ['limit' => 200]);
        $this->set(compact('cocktail', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cocktail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cocktail = $this->Cocktails->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cocktail = $this->Cocktails->patchEntity($cocktail, $this->request->getData());
            if ($this->Cocktails->save($cocktail)) {
                $this->Flash->success(__('The cocktail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cocktail could not be saved. Please, try again.'));
        }
        $users = $this->Cocktails->Users->find('list', ['limit' => 200]);
        $this->set(compact('cocktail', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cocktail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cocktail = $this->Cocktails->get($id);
        if ($this->Cocktails->delete($cocktail)) {
            $this->Flash->success(__('The cocktail has been deleted.'));
        } else {
            $this->Flash->error(__('The cocktail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
