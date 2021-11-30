<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActorsValueChainRolesFixture
 */
class ActorsValueChainRolesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'actor_id' => 1,
                'value_chain_role_id' => 1,
            ],
        ];
        parent::init();
    }
}
