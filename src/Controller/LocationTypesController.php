<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LocationTypes Controller
 *
 * @property \App\Model\Table\LocationTypesTable $LocationTypes
 *
 * @method \App\Model\Entity\LocationType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocationTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $locationTypes = $this->paginate($this->LocationTypes);

        $this->set(compact('locationTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Location Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locationType = $this->LocationTypes->get($id, [
            'contain' => [],
        ]);

        $this->set('locationType', $locationType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locationType = $this->LocationTypes->newEntity();
        if ($this->request->is('post')) {
            $locationType = $this->LocationTypes->patchEntity($locationType, $this->request->getData());
            if ($this->LocationTypes->save($locationType)) {
                $this->Flash->success(__('The location type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The location type could not be saved. Please, try again.'));
        }
        $this->set(compact('locationType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Location Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locationType = $this->LocationTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locationType = $this->LocationTypes->patchEntity($locationType, $this->request->getData());
            if ($this->LocationTypes->save($locationType)) {
                $this->Flash->success(__('The location type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The location type could not be saved. Please, try again.'));
        }
        $this->set(compact('locationType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Location Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locationType = $this->LocationTypes->get($id);
        if ($this->LocationTypes->delete($locationType)) {
            $this->Flash->success(__('The location type has been deleted.'));
        } else {
            $this->Flash->error(__('The location type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
