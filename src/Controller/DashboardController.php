<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{
    public function index(){
        $enterpriseCount = $this->fetchTable('Enterprises')->find()->all()->count();
        $actorCount = $this->fetchTable('Actors')->find()->all()->count();
        $organisationCount = $this->fetchTable('Organisations')->find()->all()->count();
        $femaleActors = $this->fetchTable('Actors')->find('all', [
            'contain' => ['Sexes'],
        ])->count();
        debug($organisationCount);
        exit;
        
        
        $this->set(compact('enterpriseCount','actorCount','organisationCount'));
        
    }

}