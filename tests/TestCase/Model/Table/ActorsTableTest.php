<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorsTable Test Case
 */
class ActorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorsTable
     */
    protected $Actors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Actors',
        'app.Sexes',
        'app.Disabilities',
        'app.Sectors',
        'app.Communities',
        'app.ProductionScales',
        'app.Commodities',
        'app.Enterprises',
        'app.Organisations',
        'app.ValueChainRoles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Actors') ? [] : ['className' => ActorsTable::class];
        $this->Actors = $this->getTableLocator()->get('Actors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Actors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ActorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ActorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
