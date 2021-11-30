<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\Query;

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
        $enterprises = $this->fetchTable('Enterprises')->find();
        $womenActors = $this->fetchTable('Actors')->find()->where(['sex_id' => 2])->count();
        
        $womenEnterprises = $enterprises->matching(
            'Actors.Sexes', function (Query $q) {
                return $q
                    ->select(['name'])
                    ->where(['Sexes.name' => 'Female' ]);
            })->count();

        
        
        $this->set(compact('enterpriseCount','actorCount','organisationCount','womenActors','womenEnterprises'));
        
    }

}