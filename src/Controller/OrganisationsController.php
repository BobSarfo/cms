<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Organisations Controller
 *
 * @property \App\Model\Table\OrganisationsTable $Organisations
 * @method \App\Model\Entity\Organisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Communities'],
        ];
        $organisations = $this->paginate($this->Organisations);

        $this->set(compact('organisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organisation = $this->Organisations->get($id, [
            'contain' => ['Communities', 'Actors', 'Commodities'],
        ]);

        $this->set(compact('organisation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if ($loggedin_user_role !== 'admin' &&  $loggedin_user_role!=='super'){            
            $this->Flash->info(__('Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $organisation = $this->Organisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('New organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $communities = $this->Organisations->Communities->find('list', ['limit' => 200])->all();
        $actors = $this->Organisations->Actors->find('list', ['limit' => 200])->all();
        $commodities = $this->Organisations->Commodities->find('list', ['limit' => 200])->all();
        $this->set(compact('organisation', 'communities', 'actors', 'commodities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if ($loggedin_user_role !== 'admin' &&  $loggedin_user_role!=='super'){            
            $this->Flash->info(__('Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $organisation = $this->Organisations->get($id, [
            'contain' => ['Actors', 'Commodities'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $communities = $this->Organisations->Communities->find('list', ['limit' => 200])->all();
        $actors = $this->Organisations->Actors->find('list', ['limit' => 200])->all();
        $commodities = $this->Organisations->Commodities->find('list', ['limit' => 200])->all();
        $this->set(compact('organisation', 'communities', 'actors', 'commodities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organisation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if ($loggedin_user_role!=='super'){            
            $this->Flash->error(__('Failed!. Super Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $this->request->allowMethod(['post', 'delete']);
        $organisation = $this->Organisations->get($id);
        if ($this->Organisations->delete($organisation)) {
            $this->Flash->success(__('The organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The organisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
