<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EnterpriseCommodities Controller
 *
 * @property \App\Model\Table\EnterpriseCommoditiesTable $EnterpriseCommodities
 * @method \App\Model\Entity\EnterpriseCommodity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnterpriseCommoditiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Enterprises', 'Commodities'],
        ];
        $enterpriseCommodities = $this->paginate($this->EnterpriseCommodities);

        $this->set(compact('enterpriseCommodities'));
    }

    /**
     * View method
     *
     * @param string|null $id Enterprise Commodity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enterpriseCommodity = $this->EnterpriseCommodities->get($id, [
            'contain' => ['Enterprises', 'Commodities'],
        ]);

        $this->set(compact('enterpriseCommodity'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enterpriseCommodity = $this->EnterpriseCommodities->newEmptyEntity();
        if ($this->request->is('post')) {
            $enterpriseCommodity = $this->EnterpriseCommodities->patchEntity($enterpriseCommodity, $this->request->getData());
            if ($this->EnterpriseCommodities->save($enterpriseCommodity)) {
                $this->Flash->success(__('New enterprise commodity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise commodity could not be saved. Please, try again.'));
        }
        $enterprises = $this->EnterpriseCommodities->Enterprises->find('list', ['limit' => 200])->all();
        $commodities = $this->EnterpriseCommodities->Commodities->find('list', ['limit' => 200])->all();
        $this->set(compact('enterpriseCommodity', 'enterprises', 'commodities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enterprise Commodity id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enterpriseCommodity = $this->EnterpriseCommodities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enterpriseCommodity = $this->EnterpriseCommodities->patchEntity($enterpriseCommodity, $this->request->getData());
            if ($this->EnterpriseCommodities->save($enterpriseCommodity)) {
                $this->Flash->success(__('The enterprise commodity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise commodity could not be saved. Please, try again.'));
        }
        $enterprises = $this->EnterpriseCommodities->Enterprises->find('list', ['limit' => 200])->all();
        $commodities = $this->EnterpriseCommodities->Commodities->find('list', ['limit' => 200])->all();
        $this->set(compact('enterpriseCommodity', 'enterprises', 'commodities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enterprise Commodity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enterpriseCommodity = $this->EnterpriseCommodities->get($id);
        if ($this->EnterpriseCommodities->delete($enterpriseCommodity)) {
            $this->Flash->success(__('The enterprise commodity has been deleted.'));
        } else {
            $this->Flash->error(__('The enterprise commodity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
