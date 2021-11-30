<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrganisationsFixture
 */
class OrganisationsFixture extends TestFixture
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
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'community_id' => 1,
                'created' => '2021-11-29 14:42:52',
                'modified' => '2021-11-29 14:42:52',
            ],
        ];
        parent::init();
    }
}
