<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnterprisesFixture
 */
class EnterprisesFixture extends TestFixture
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
                'enterprise_type_id' => 1,
                'community_id' => 1,
                'suburb' => 'Lorem ipsum dolor sit amet',
                'date_of_establishment' => '2021-11-29 14:42:42',
                'phone' => 'Lorem ipsum dolor ',
                'number_of_employees' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'registrationNo' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-11-29 14:42:42',
                'modified' => '2021-11-29 14:42:42',
                'other_phone' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
