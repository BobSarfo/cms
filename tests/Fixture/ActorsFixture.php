<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActorsFixture
 */
class ActorsFixture extends TestFixture
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
                'date_of_birth' => '2021-11-29',
                'sex_id' => 1,
                'disability_id' => 1,
                'sector_id' => 1,
                'phone' => 'Lorem ipsum dolor ',
                'other_phone' => 'Lorem ipsum dolor ',
                'community_id' => 1,
                'suburb' => 'Lorem ipsum dolor sit amet',
                'registed_with_RGD' => 1,
                'registed_with_Assembly' => 1,
                'production_scale_id' => 1,
                'other_related_activity' => 'Lorem ipsum dolor sit amet',
                'additional_comments' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-11-29 13:40:24',
                'modified' => '2021-11-29 13:40:24',
            ],
        ];
        parent::init();
    }
}
