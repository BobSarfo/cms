<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login','reset']);
    }
 
    public function index()
    {
        $loggedin_user_role= $this->currentLoggedinUserRole();
        // if ($loggedin_user_role!='admin'){            
        //     $this->Flash->info(__('Admin priviledges required to access all users'));
        //     return $this->redirect(['action' => 'profile']);
        // }
        $this->paginate = [
            'contain' => ['Departments', 'Roles'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departments', 'Roles'],
        ]);

        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            
            $userdata = $this->request->getData();
            $userdata['password'] = "shama123";
            $userdata['isreset'] = '1';
            $user = $this->Users->patchEntity($user, $userdata);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('New user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'departments', 'roles'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Changes to user have been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The changes could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'departments', 'roles'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('plain');
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Dashboard',
                'action' => 'index',
            ]);
            
            $loggedin_user_role= $this->currentLoggedinUserRole();
            $session = $this->request->getSession();
            $loggedin_user=$this->Authentication->getIdentity()->getOriginalData();
          
            $session->write("auth-user",$loggedin_user);
            $session->write("auth-role",$loggedin_user_role);


            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function reset(){
        $this->viewBuilder()->setLayout('plain');
    }

    public function passreset($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        $user->password = "shama123";
        $user = $this->Users->patchEntity($user, $this->request->getData());

        if ($this->Users->save($user)) {
            $this->Flash->success(__('User password has been reset successfully.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('User password could not be reset. Please, try again.'));
            return $this->redirect(['action' => 'index']);
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }

    public function changepassword($id = null){
        $session=$this ->request->getSession();
        $login_user_details= $session->read('auth-user');
        $id = $login_user_details['id'];

        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Password changed successfully.'));

                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'departments', 'roles'));
    }
    
    public function changeuserdetails($id = null){
        $session=$this ->request->getSession();
        $login_user_details= $session->read('auth-user');
        $id = $login_user_details['id'];

        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('New user details has been saved.'));

                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'departments', 'roles'));
    }

    public function profile(){
        $session=$this ->request->getSession();
        $login_user_details= $session->read('auth-user');
        $id = $login_user_details['id'];
        $did = $login_user_details['department_id'];      
        $query = $this->getTableLocator()->get('Departments')
                                        ->find()
                                        ->select(['name'])
                                        ->where(['id =' => $did])->toList();
                                        
        $department=trim($query[0]->name);
        $user = $this->Users->get($id, [
            'contain' => ['Departments', 'Roles'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Changes have been saved.'));

                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user','department'));
    }

    
}
