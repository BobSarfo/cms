<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Actors Controller
 *
 * @property \App\Model\Table\ActorsTable $Actors
 * @method \App\Model\Entity\Actor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sexes', 'Disabilities', 'Sectors', 'Communities', 'ProductionScales'],
        ];
        $actors = $this->paginate($this->Actors);

        $this->set(compact('actors'));
    }

    /**
     * View method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actor = $this->Actors->get($id, [
            'contain' => ['Sexes', 'Disabilities', 'Sectors', 'Communities', 'ProductionScales', 'Commodities', 'Enterprises', 'Organisations', 'ValueChainRoles'],
        ]);

        $this->set(compact('actor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actor = $this->Actors->newEmptyEntity();
        if ($this->request->is('post')) {
            $actor = $this->Actors->patchEntity($actor, $this->request->getData());
            if ($this->Actors->save($actor)) {
                $this->Flash->success(__('New actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor could not be saved. Please, try again.'));
        }
        $sexes = $this->Actors->Sexes->find('list', ['limit' => 200])->all();
        $disabilities = $this->Actors->Disabilities->find('list', ['limit' => 200])->all();
        $sectors = $this->Actors->Sectors->find('list', ['limit' => 200])->all();
        $communities = $this->Actors->Communities->find('list', ['limit' => 200])->all();
        $productionScales = $this->Actors->ProductionScales->find('list', ['limit' => 200])->all();
        $commodities = $this->Actors->Commodities->find('list', ['limit' => 200])->all();
        $enterprises = $this->Actors->Enterprises->find('list', ['limit' => 200])->all();
        $organisations = $this->Actors->Organisations->find('list', ['limit' => 200])->all();
        $valueChainRoles = $this->Actors->ValueChainRoles->find('list', ['limit' => 200])->all();
        $this->set(compact('actor', 'sexes', 'disabilities', 'sectors', 'communities', 'productionScales', 'commodities', 'enterprises', 'organisations', 'valueChainRoles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actor = $this->Actors->get($id, [
            'contain' => ['Commodities', 'Enterprises', 'Organisations', 'ValueChainRoles'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actor = $this->Actors->patchEntity($actor, $this->request->getData());
            if ($this->Actors->save($actor)) {
                $this->Flash->success(__('The actor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actor could not be saved. Please, try again.'));
        }
        $sexes = $this->Actors->Sexes->find('list', ['limit' => 200])->all();
        $disabilities = $this->Actors->Disabilities->find('list', ['limit' => 200])->all();
        $sectors = $this->Actors->Sectors->find('list', ['limit' => 200])->all();
        $communities = $this->Actors->Communities->find('list', ['limit' => 200])->all();
        $productionScales = $this->Actors->ProductionScales->find('list', ['limit' => 200])->all();
        $commodities = $this->Actors->Commodities->find('list', ['limit' => 200])->all();
        $enterprises = $this->Actors->Enterprises->find('list', ['limit' => 200])->all();
        $organisations = $this->Actors->Organisations->find('list', ['limit' => 200])->all();
        $valueChainRoles = $this->Actors->ValueChainRoles->find('list', ['limit' => 200])->all();
        $this->set(compact('actor', 'sexes', 'disabilities', 'sectors', 'communities', 'productionScales', 'commodities', 'enterprises', 'organisations', 'valueChainRoles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actor = $this->Actors->get($id);
        if ($this->Actors->delete($actor)) {
            $this->Flash->success(__('The actor has been deleted.'));
        } else {
            $this->Flash->error(__('The actor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
