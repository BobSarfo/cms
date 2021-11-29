<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor sit amet',
                'isreset' => 1,
                'department_id' => 1,
                'role_id' => 1,
                'created' => '2021-11-29 06:37:22',
                'modified' => '2021-11-29 06:37:22',
            ],
        ];
        parent::init();
    }
}
