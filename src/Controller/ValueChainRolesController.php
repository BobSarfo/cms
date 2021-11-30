<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ValueChainRoles Controller
 *
 * @property \App\Model\Table\ValueChainRolesTable $ValueChainRoles
 * @method \App\Model\Entity\ValueChainRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ValueChainRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $valueChainRoles = $this->paginate($this->ValueChainRoles);

        $this->set(compact('valueChainRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Value Chain Role id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $valueChainRole = $this->ValueChainRoles->get($id, [
            'contain' => ['Actors', 'EnterpriseValueChainRoles'],
        ]);

        $this->set(compact('valueChainRole'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $valueChainRole = $this->ValueChainRoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $valueChainRole = $this->ValueChainRoles->patchEntity($valueChainRole, $this->request->getData());
            if ($this->ValueChainRoles->save($valueChainRole)) {
                $this->Flash->success(__('New value chain role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The value chain role could not be saved. Please, try again.'));
        }
        $actors = $this->ValueChainRoles->Actors->find('list', ['limit' => 200])->all();
        $this->set(compact('valueChainRole', 'actors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Value Chain Role id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $valueChainRole = $this->ValueChainRoles->get($id, [
            'contain' => ['Actors'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $valueChainRole = $this->ValueChainRoles->patchEntity($valueChainRole, $this->request->getData());
            if ($this->ValueChainRoles->save($valueChainRole)) {
                $this->Flash->success(__('The value chain role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The value chain role could not be saved. Please, try again.'));
        }
        $actors = $this->ValueChainRoles->Actors->find('list', ['limit' => 200])->all();
        $this->set(compact('valueChainRole', 'actors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Value Chain Role id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $valueChainRole = $this->ValueChainRoles->get($id);
        if ($this->ValueChainRoles->delete($valueChainRole)) {
            $this->Flash->success(__('The value chain role has been deleted.'));
        } else {
            $this->Flash->error(__('The value chain role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
