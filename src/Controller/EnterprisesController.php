<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Enterprises Controller
 *
 * @property \App\Model\Table\EnterprisesTable $Enterprises
 * @method \App\Model\Entity\Enterprise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnterprisesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EnterpriseTypes', 'Communities'],
        ];
        $enterprises = $this->paginate($this->Enterprises);

        $this->set(compact('enterprises'));
    }

    /**
     * View method
     *
     * @param string|null $id Enterprise id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enterprise = $this->Enterprises->get($id, [
            'contain' => ['EnterpriseTypes', 'Communities', 'Actors', 'EnterpriseCommodities', 'EnterpriseValueChainRoles'],
        ]);

        $this->set(compact('enterprise'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enterprise = $this->Enterprises->newEmptyEntity();
        if ($this->request->is('post')) {
            $enterprise = $this->Enterprises->patchEntity($enterprise, $this->request->getData());
            if ($this->Enterprises->save($enterprise)) {
                $this->Flash->success(__('New enterprise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise could not be saved. Please, try again.'));
        }
        $enterpriseTypes = $this->Enterprises->EnterpriseTypes->find('list', ['limit' => 200])->all();
        $communities = $this->Enterprises->Communities->find('list', ['limit' => 200])->all();
        $actors = $this->Enterprises->Actors->find('list', ['limit' => 200])->all();
        $this->set(compact('enterprise', 'enterpriseTypes', 'communities', 'actors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enterprise id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enterprise = $this->Enterprises->get($id, [
            'contain' => ['Actors'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enterprise = $this->Enterprises->patchEntity($enterprise, $this->request->getData());
            if ($this->Enterprises->save($enterprise)) {
                $this->Flash->success(__('The enterprise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise could not be saved. Please, try again.'));
        }
        $enterpriseTypes = $this->Enterprises->EnterpriseTypes->find('list', ['limit' => 200])->all();
        $communities = $this->Enterprises->Communities->find('list', ['limit' => 200])->all();
        $actors = $this->Enterprises->Actors->find('list', ['limit' => 200])->all();
        $this->set(compact('enterprise', 'enterpriseTypes', 'communities', 'actors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enterprise id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enterprise = $this->Enterprises->get($id);
        if ($this->Enterprises->delete($enterprise)) {
            $this->Flash->success(__('The enterprise has been deleted.'));
        } else {
            $this->Flash->error(__('The enterprise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
