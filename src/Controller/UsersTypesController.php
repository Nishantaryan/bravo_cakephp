<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersTypes Controller
 *
 * @property \App\Model\Table\UsersTypesTable $UsersTypes
 *
 * @method \App\Model\Entity\UsersType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Types'],
        ];
        $usersTypes = $this->paginate($this->UsersTypes);

        $this->set(compact('usersTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersType = $this->UsersTypes->get($id, [
            'contain' => ['Users', 'Types'],
        ]);

        $this->set('usersType', $usersType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersType = $this->UsersTypes->newEntity();
        if ($this->request->is('post')) {
            $usersType = $this->UsersTypes->patchEntity($usersType, $this->request->getData());
            if ($this->UsersTypes->save($usersType)) {
                $this->Flash->success(__('The users type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users type could not be saved. Please, try again.'));
        }
        $users = $this->UsersTypes->Users->find('list', ['limit' => 200]);
        $types = $this->UsersTypes->Types->find('list', ['limit' => 200]);
        $this->set(compact('usersType', 'users', 'types'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersType = $this->UsersTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersType = $this->UsersTypes->patchEntity($usersType, $this->request->getData());
            if ($this->UsersTypes->save($usersType)) {
                $this->Flash->success(__('The users type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users type could not be saved. Please, try again.'));
        }
        $users = $this->UsersTypes->Users->find('list', ['limit' => 200]);
        $types = $this->UsersTypes->Types->find('list', ['limit' => 200]);
        $this->set(compact('usersType', 'users', 'types'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersType = $this->UsersTypes->get($id);
        if ($this->UsersTypes->delete($usersType)) {
            $this->Flash->success(__('The users type has been deleted.'));
        } else {
            $this->Flash->error(__('The users type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
