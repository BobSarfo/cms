<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EnterpriseCommodities Controller
 *
 * @property \App\Model\Table\EnterpriseCommoditiesTable $EnterpriseCommodities
 * @method \App\Model\Entity\EnterpriseCommodity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnterpriseCommoditiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Enterprises', 'Commodities'],
        ];
        $enterpriseCommodities = $this->paginate($this->EnterpriseCommodities);

        $this->set(compact('enterpriseCommodities'));
    }

    /**
     * View method
     *
     * @param string|null $id Enterprise Commodity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enterpriseCommodity = $this->EnterpriseCommodities->get($id, [
            'contain' => ['Enterprises', 'Commodities'],
        ]);
        debug($enterpriseCommodity);
        $this->set(compact('enterpriseCommodity'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
  
}
