<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActorsValueChainRoles Controller
 *
 * @property \App\Model\Table\ActorsValueChainRolesTable $ActorsValueChainRoles
 * @method \App\Model\Entity\ActorsValueChainRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorsValueChainRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actors', 'ValueChainRoles'],
        ];
        $actorsValueChainRoles = $this->paginate($this->ActorsValueChainRoles);

        $this->set(compact('actorsValueChainRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Actors Value Chain Role id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsValueChainRole = $this->ActorsValueChainRoles->get($id, [
            'contain' => ['Actors', 'ValueChainRoles'],
        ]);

        $this->set(compact('actorsValueChainRole'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsValueChainRole = $this->ActorsValueChainRoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $actorsValueChainRole = $this->ActorsValueChainRoles->patchEntity($actorsValueChainRole, $this->request->getData());
            if ($this->ActorsValueChainRoles->save($actorsValueChainRole)) {
                $this->Flash->success(__('New actors value chain role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actors value chain role could not be saved. Please, try again.'));
        }
        $actors = $this->ActorsValueChainRoles->Actors->find('list', ['limit' => 200])->all();
        $valueChainRoles = $this->ActorsValueChainRoles->ValueChainRoles->find('list', ['limit' => 200])->all();
        $this->set(compact('actorsValueChainRole', 'actors', 'valueChainRoles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actors Value Chain Role id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsValueChainRole = $this->ActorsValueChainRoles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actorsValueChainRole = $this->ActorsValueChainRoles->patchEntity($actorsValueChainRole, $this->request->getData());
            if ($this->ActorsValueChainRoles->save($actorsValueChainRole)) {
                $this->Flash->success(__('The actors value chain role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actors value chain role could not be saved. Please, try again.'));
        }
        $actors = $this->ActorsValueChainRoles->Actors->find('list', ['limit' => 200])->all();
        $valueChainRoles = $this->ActorsValueChainRoles->ValueChainRoles->find('list', ['limit' => 200])->all();
        $this->set(compact('actorsValueChainRole', 'actors', 'valueChainRoles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actors Value Chain Role id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $this->request->allowMethod(['post', 'delete']);
        $actorsValueChainRole = $this->ActorsValueChainRoles->get($id);
        if ($this->ActorsValueChainRoles->delete($actorsValueChainRole)) {
            $this->Flash->success(__('The actors value chain role has been deleted.'));
        } else {
            $this->Flash->error(__('The actors value chain role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
