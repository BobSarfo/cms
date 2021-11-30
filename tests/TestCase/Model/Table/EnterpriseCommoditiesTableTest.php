<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnterpriseCommoditiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnterpriseCommoditiesTable Test Case
 */
class EnterpriseCommoditiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnterpriseCommoditiesTable
     */
    protected $EnterpriseCommodities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EnterpriseCommodities',
        'app.Enterprises',
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
        $config = $this->getTableLocator()->exists('EnterpriseCommodities') ? [] : ['className' => EnterpriseCommoditiesTable::class];
        $this->EnterpriseCommodities = $this->getTableLocator()->get('EnterpriseCommodities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EnterpriseCommodities);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EnterpriseCommoditiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
