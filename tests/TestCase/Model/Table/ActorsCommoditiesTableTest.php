<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorsCommoditiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorsCommoditiesTable Test Case
 */
class ActorsCommoditiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorsCommoditiesTable
     */
    protected $ActorsCommodities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ActorsCommodities',
        'app.Actors',
        'app.Commodities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ActorsCommodities') ? [] : ['className' => ActorsCommoditiesTable::class];
        $this->ActorsCommodities = $this->getTableLocator()->get('ActorsCommodities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ActorsCommodities);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ActorsCommoditiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
