<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActorsOrganisations Controller
 *
 * @property \App\Model\Table\ActorsOrganisationsTable $ActorsOrganisations
 * @method \App\Model\Entity\ActorsOrganisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActorsOrganisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Organisations', 'Actors'],
        ];
        $actorsOrganisations = $this->paginate($this->ActorsOrganisations);

        $this->set(compact('actorsOrganisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Actors Organisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsOrganisation = $this->ActorsOrganisations->get($id, [
            'contain' => ['Organisations', 'Actors'],
        ]);

        $this->set(compact('actorsOrganisation'));
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
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsOrganisation = $this->ActorsOrganisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $actorsOrganisation = $this->ActorsOrganisations->patchEntity($actorsOrganisation, $this->request->getData());
            if ($this->ActorsOrganisations->save($actorsOrganisation)) {
                $this->Flash->success(__('New actors organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actors organisation could not be saved. Please, try again.'));
        }
        $organisations = $this->ActorsOrganisations->Organisations->find('list', ['limit' => 200])->all();
        $actors = $this->ActorsOrganisations->Actors->find('list', ['limit' => 200])->all();
        $this->set(compact('actorsOrganisation', 'organisations', 'actors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actors Organisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $actorsOrganisation = $this->ActorsOrganisations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actorsOrganisation = $this->ActorsOrganisations->patchEntity($actorsOrganisation, $this->request->getData());
            if ($this->ActorsOrganisations->save($actorsOrganisation)) {
                $this->Flash->success(__('The actors organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actors organisation could not be saved. Please, try again.'));
        }
        $organisations = $this->ActorsOrganisations->Organisations->find('list', ['limit' => 200])->all();
        $actors = $this->ActorsOrganisations->Actors->find('list', ['limit' => 200])->all();
        $this->set(compact('actorsOrganisation', 'organisations', 'actors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actors Organisation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Flash->info(__('Not Available'));
        return $this->redirect(['action' => 'index']);
        $this->request->allowMethod(['post', 'delete']);
        $actorsOrganisation = $this->ActorsOrganisations->get($id);
        if ($this->ActorsOrganisations->delete($actorsOrganisation)) {
            $this->Flash->success(__('The actors organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The actors organisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
