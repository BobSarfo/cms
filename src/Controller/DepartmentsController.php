<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Departments Controller
 *
 * @property \App\Model\Table\DepartmentsTable $Departments
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsController extends AppController
{

   

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $departments = $this->paginate($this->Departments);

        $this->set(compact('departments'));
    }

    /**
     * View method
     *
     * @param string|null $id Department id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $department = $this->Departments->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('department'));
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
        $department = $this->Departments->newEmptyEntity();
        if ($this->request->is('post')) {
            $department = $this->Departments->patchEntity($department, $this->request->getData());
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('New department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The department could not be saved. Please, try again.'));
        }
        $this->set(compact('department'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Department id.
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
        $department = $this->Departments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $department = $this->Departments->patchEntity($department, $this->request->getData());
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('The department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The department could not be saved. Please, try again.'));
        }
        $this->set(compact('department'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Department id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session=$this ->request->getSession();        
        $loggedin_user_role=$session->read('auth-role');
        if ($loggedin_user_role!=='super'){            
            $this->Flash->info(__('Super Admin privileges required'));
            return $this->redirect(['action' => 'index']);
        }
        $this->request->allowMethod(['post', 'delete']);
        $department = $this->Departments->get($id);
        if ($this->Departments->delete($department)) {
            $this->Flash->success(__('The department has been deleted.'));
        } else {
            $this->Flash->error(__('The department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
