<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EnterpriseValueChainRoles Controller
 *
 * @property \App\Model\Table\EnterpriseValueChainRolesTable $EnterpriseValueChainRoles
 * @method \App\Model\Entity\EnterpriseValueChainRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnterpriseValueChainRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Enterprises', 'ValueChainRoles'],
        ];
        $enterpriseValueChainRoles = $this->paginate($this->EnterpriseValueChainRoles);

        $this->set(compact('enterpriseValueChainRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Enterprise Value Chain Role id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enterpriseValueChainRole = $this->EnterpriseValueChainRoles->get($id, [
            'contain' => ['Enterprises', 'ValueChainRoles'],
        ]);

        $this->set(compact('enterpriseValueChainRole'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enterpriseValueChainRole = $this->EnterpriseValueChainRoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $enterpriseValueChainRole = $this->EnterpriseValueChainRoles->patchEntity($enterpriseValueChainRole, $this->request->getData());
            if ($this->EnterpriseValueChainRoles->save($enterpriseValueChainRole)) {
                $this->Flash->success(__('New enterprise value chain role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise value chain role could not be saved. Please, try again.'));
        }
        $enterprises = $this->EnterpriseValueChainRoles->Enterprises->find('list', ['limit' => 200])->all();
        $valueChainRoles = $this->EnterpriseValueChainRoles->ValueChainRoles->find('list', ['limit' => 200])->all();
        $this->set(compact('enterpriseValueChainRole', 'enterprises', 'valueChainRoles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enterprise Value Chain Role id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enterpriseValueChainRole = $this->EnterpriseValueChainRoles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enterpriseValueChainRole = $this->EnterpriseValueChainRoles->patchEntity($enterpriseValueChainRole, $this->request->getData());
            if ($this->EnterpriseValueChainRoles->save($enterpriseValueChainRole)) {
                $this->Flash->success(__('The enterprise value chain role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise value chain role could not be saved. Please, try again.'));
        }
        $enterprises = $this->EnterpriseValueChainRoles->Enterprises->find('list', ['limit' => 200])->all();
        $valueChainRoles = $this->EnterpriseValueChainRoles->ValueChainRoles->find('list', ['limit' => 200])->all();
        $this->set(compact('enterpriseValueChainRole', 'enterprises', 'valueChainRoles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enterprise Value Chain Role id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enterpriseValueChainRole = $this->EnterpriseValueChainRoles->get($id);
        if ($this->EnterpriseValueChainRoles->delete($enterpriseValueChainRole)) {
            $this->Flash->success(__('The enterprise value chain role has been deleted.'));
        } else {
            $this->Flash->error(__('The enterprise value chain role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
