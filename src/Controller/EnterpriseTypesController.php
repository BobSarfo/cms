<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EnterpriseTypes Controller
 *
 * @property \App\Model\Table\EnterpriseTypesTable $EnterpriseTypes
 * @method \App\Model\Entity\EnterpriseType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnterpriseTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $enterpriseTypes = $this->paginate($this->EnterpriseTypes);

        $this->set(compact('enterpriseTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Enterprise Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enterpriseType = $this->EnterpriseTypes->get($id, [
            'contain' => ['Enterprises'],
        ]);

        $this->set(compact('enterpriseType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enterpriseType = $this->EnterpriseTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $enterpriseType = $this->EnterpriseTypes->patchEntity($enterpriseType, $this->request->getData());
            if ($this->EnterpriseTypes->save($enterpriseType)) {
                $this->Flash->success(__('New enterprise type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise type could not be saved. Please, try again.'));
        }
        $this->set(compact('enterpriseType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enterprise Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enterpriseType = $this->EnterpriseTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enterpriseType = $this->EnterpriseTypes->patchEntity($enterpriseType, $this->request->getData());
            if ($this->EnterpriseTypes->save($enterpriseType)) {
                $this->Flash->success(__('The enterprise type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enterprise type could not be saved. Please, try again.'));
        }
        $this->set(compact('enterpriseType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enterprise Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enterpriseType = $this->EnterpriseTypes->get($id);
        if ($this->EnterpriseTypes->delete($enterpriseType)) {
            $this->Flash->success(__('The enterprise type has been deleted.'));
        } else {
            $this->Flash->error(__('The enterprise type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
