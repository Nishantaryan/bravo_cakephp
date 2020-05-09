<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersCocktails Controller
 *
 * @property \App\Model\Table\UsersCocktailsTable $UsersCocktails
 *
 * @method \App\Model\Entity\UsersCocktail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersCocktailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Cocktails'],
        ];
        $usersCocktails = $this->paginate($this->UsersCocktails);

        $this->set(compact('usersCocktails'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Cocktail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersCocktail = $this->UsersCocktails->get($id, [
            'contain' => ['Users', 'Cocktails'],
        ]);

        $this->set('usersCocktail', $usersCocktail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersCocktail = $this->UsersCocktails->newEntity();
        if ($this->request->is('post')) {
            $usersCocktail = $this->UsersCocktails->patchEntity($usersCocktail, $this->request->getData());
            if ($this->UsersCocktails->save($usersCocktail)) {
                $this->Flash->success(__('The users cocktail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users cocktail could not be saved. Please, try again.'));
        }
        $users = $this->UsersCocktails->Users->find('list', ['limit' => 200]);
        $cocktails = $this->UsersCocktails->Cocktails->find('list', ['limit' => 200]);
        $this->set(compact('usersCocktail', 'users', 'cocktails'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Cocktail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersCocktail = $this->UsersCocktails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersCocktail = $this->UsersCocktails->patchEntity($usersCocktail, $this->request->getData());
            if ($this->UsersCocktails->save($usersCocktail)) {
                $this->Flash->success(__('The users cocktail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users cocktail could not be saved. Please, try again.'));
        }
        $users = $this->UsersCocktails->Users->find('list', ['limit' => 200]);
        $cocktails = $this->UsersCocktails->Cocktails->find('list', ['limit' => 200]);
        $this->set(compact('usersCocktail', 'users', 'cocktails'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Cocktail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersCocktail = $this->UsersCocktails->get($id);
        if ($this->UsersCocktails->delete($usersCocktail)) {
            $this->Flash->success(__('The users cocktail has been deleted.'));
        } else {
            $this->Flash->error(__('The users cocktail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
