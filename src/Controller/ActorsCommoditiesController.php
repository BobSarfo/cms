<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActorsCommodities Controller
 *
 * @property \App\Model\Table\ActorsCommoditiesTable $ActorsCommodities
 * @method \App\Model\Entity\ActorsCommodity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorsCommoditiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actors', 'Commodities'],
        ];
        $actorsCommodities = $this->paginate($this->ActorsCommodities);

        $this->set(compact('actorsCommodities'));
    }

    /**
     * View method
     *
     * @param string|null $id Actors Commodity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsCommodity = $this->ActorsCommodities->get($id, [
            'contain' => ['Actors', 'Commodities'],
        ]);

        $this->set(compact('actorsCommodity'));
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
        $actorsCommodity = $this->ActorsCommodities->newEmptyEntity();
        if ($this->request->is('post')) {
            $actorsCommodity = $this->ActorsCommodities->patchEntity($actorsCommodity, $this->request->getData());
            if ($this->ActorsCommodities->save($actorsCommodity)) {
                $this->Flash->success(__('New actors commodity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actors commodity could not be saved. Please, try again.'));
        }
        $actors = $this->ActorsCommodities->Actors->find('list', ['limit' => 200])->all();
        $commodities = $this->ActorsCommodities->Commodities->find('list', ['limit' => 200])->all();
        $this->set(compact('actorsCommodity', 'actors', 'commodities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actors Commodity id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsCommodity = $this->ActorsCommodities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actorsCommodity = $this->ActorsCommodities->patchEntity($actorsCommodity, $this->request->getData());
            if ($this->ActorsCommodities->save($actorsCommodity)) {
                $this->Flash->success(__('The actors commodity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actors commodity could not be saved. Please, try again.'));
        }
        $actors = $this->ActorsCommodities->Actors->find('list', ['limit' => 200])->all();
        $commodities = $this->ActorsCommodities->Commodities->find('list', ['limit' => 200])->all();
        $this->set(compact('actorsCommodity', 'actors', 'commodities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actors Commodity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $this->request->allowMethod(['post', 'delete']);
        $actorsCommodity = $this->ActorsCommodities->get($id);
        if ($this->ActorsCommodities->delete($actorsCommodity)) {
            $this->Flash->success(__('The actors commodity has been deleted.'));
        } else {
            $this->Flash->error(__('The actors commodity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
