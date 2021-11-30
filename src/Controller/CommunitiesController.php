<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Communities Controller
 *
 * @property \App\Model\Table\CommunitiesTable $Communities
 * @method \App\Model\Entity\Community[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommunitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $communities = $this->paginate($this->Communities);

        $this->set(compact('communities'));
    }

    /**
     * View method
     *
     * @param string|null $id Community id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $community = $this->Communities->get($id, [
            'contain' => ['Actors', 'Enterprises', 'Organisations'],
        ]);

        $this->set(compact('community'));
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
        $community = $this->Communities->newEmptyEntity();
        if ($this->request->is('post')) {
            $community = $this->Communities->patchEntity($community, $this->request->getData());
            if ($this->Communities->save($community)) {
                $this->Flash->success(__('New community has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The community could not be saved. Please, try again.'));
        }
        $this->set(compact('community'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Community id.
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
        $community = $this->Communities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $community = $this->Communities->patchEntity($community, $this->request->getData());
            if ($this->Communities->save($community)) {
                $this->Flash->success(__('The community has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The community could not be saved. Please, try again.'));
        }
        $this->set(compact('community'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Community id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if ( $loggedin_user_role!=='super'){            
            $this->Flash->info(__('Super Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $this->request->allowMethod(['post', 'delete']);
        $community = $this->Communities->get($id);
        if ($this->Communities->delete($community)) {
            $this->Flash->success(__('The community has been deleted.'));
        } else {
            $this->Flash->error(__('The community could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
