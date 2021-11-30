<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductionScales Controller
 *
 * @property \App\Model\Table\ProductionScalesTable $ProductionScales
 * @method \App\Model\Entity\ProductionScale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductionScalesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productionScales = $this->paginate($this->ProductionScales);

        $this->set(compact('productionScales'));
    }

    /**
     * View method
     *
     * @param string|null $id Production Scale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productionScale = $this->ProductionScales->get($id, [
            'contain' => ['Actors'],
        ]);

        $this->set(compact('productionScale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productionScale = $this->ProductionScales->newEmptyEntity();
        if ($this->request->is('post')) {
            $productionScale = $this->ProductionScales->patchEntity($productionScale, $this->request->getData());
            if ($this->ProductionScales->save($productionScale)) {
                $this->Flash->success(__('New production scale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The production scale could not be saved. Please, try again.'));
        }
        $this->set(compact('productionScale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Production Scale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productionScale = $this->ProductionScales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productionScale = $this->ProductionScales->patchEntity($productionScale, $this->request->getData());
            if ($this->ProductionScales->save($productionScale)) {
                $this->Flash->success(__('The production scale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The production scale could not be saved. Please, try again.'));
        }
        $this->set(compact('productionScale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Production Scale id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productionScale = $this->ProductionScales->get($id);
        if ($this->ProductionScales->delete($productionScale)) {
            $this->Flash->success(__('The production scale has been deleted.'));
        } else {
            $this->Flash->error(__('The production scale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
