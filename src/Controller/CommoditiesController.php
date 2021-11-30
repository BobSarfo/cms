<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commodities Controller
 *
 * @property \App\Model\Table\CommoditiesTable $Commodities
 * @method \App\Model\Entity\Commodity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommoditiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $commodities = $this->paginate($this->Commodities);

        $this->set(compact('commodities'));
    }

    /**
     * View method
     *
     * @param string|null $id Commodity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commodity = $this->Commodities->get($id, [
            'contain' => ['Actors', 'Organisations', 'EnterpriseCommodities'],
        ]);

        $this->set(compact('commodity'));
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
        $commodity = $this->Commodities->newEmptyEntity();
        if ($this->request->is('post')) {
            $commodity = $this->Commodities->patchEntity($commodity, $this->request->getData());
            if ($this->Commodities->save($commodity)) {
                $this->Flash->success(__('New commodity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commodity could not be saved. Please, try again.'));
        }
        $actors = $this->Commodities->Actors->find('list', ['limit' => 200])->all();
        $organisations = $this->Commodities->Organisations->find('list', ['limit' => 200])->all();
        $this->set(compact('commodity', 'actors', 'organisations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commodity id.
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
        $commodity = $this->Commodities->get($id, [
            'contain' => ['Actors', 'Organisations'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commodity = $this->Commodities->patchEntity($commodity, $this->request->getData());
            if ($this->Commodities->save($commodity)) {
                $this->Flash->success(__('The commodity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commodity could not be saved. Please, try again.'));
        }
        $actors = $this->Commodities->Actors->find('list', ['limit' => 200])->all();
        $organisations = $this->Commodities->Organisations->find('list', ['limit' => 200])->all();
        $this->set(compact('commodity', 'actors', 'organisations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commodity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if ( $loggedin_user_role!=='super'){            
            $this->Flash->error(__('Super Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $this->request->allowMethod(['post', 'delete']);
        $commodity = $this->Commodities->get($id);
        if ($this->Commodities->delete($commodity)) {
            $this->Flash->success(__('The commodity has been deleted.'));
        } else {
            $this->Flash->error(__('The commodity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
