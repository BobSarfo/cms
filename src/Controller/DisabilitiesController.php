<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Disabilities Controller
 *
 * @property \App\Model\Table\DisabilitiesTable $Disabilities
 * @method \App\Model\Entity\Disability[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DisabilitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $disabilities = $this->paginate($this->Disabilities);

        $this->set(compact('disabilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Disability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disability = $this->Disabilities->get($id, [
            'contain' => ['Actors'],
        ]);

        $this->set(compact('disability'));
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
        $disability = $this->Disabilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $disability = $this->Disabilities->patchEntity($disability, $this->request->getData());
            if ($this->Disabilities->save($disability)) {
                $this->Flash->success(__('New disability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disability could not be saved. Please, try again.'));
        }
        $this->set(compact('disability'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disability id.
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
        $disability = $this->Disabilities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disability = $this->Disabilities->patchEntity($disability, $this->request->getData());
            if ($this->Disabilities->save($disability)) {
                $this->Flash->success(__('The disability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disability could not be saved. Please, try again.'));
        }
        $this->set(compact('disability'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disability id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if (  $loggedin_user_role!=='super'){            
            $this->Flash->info(__('Super Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $this->request->allowMethod(['post', 'delete']);
        $disability = $this->Disabilities->get($id);
        if ($this->Disabilities->delete($disability)) {
            $this->Flash->success(__('The disability has been deleted.'));
        } else {
            $this->Flash->error(__('The disability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
