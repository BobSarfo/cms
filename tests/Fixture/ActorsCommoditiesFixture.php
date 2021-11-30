<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActorsCommoditiesFixture
 */
class ActorsCommoditiesFixture extends TestFixture
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
                'commodity_id' => 1,
            ],
        ];
        parent::init();
    }
}
