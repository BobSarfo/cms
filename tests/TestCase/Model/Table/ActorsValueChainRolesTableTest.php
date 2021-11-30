<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorsValueChainRolesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorsValueChainRolesTable Test Case
 */
class ActorsValueChainRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorsValueChainRolesTable
     */
    protected $ActorsValueChainRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ActorsValueChainRoles',
        'app.Actors',
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
        $config = $this->getTableLocator()->exists('ActorsValueChainRoles') ? [] : ['className' => ActorsValueChainRolesTable::class];
        $this->ActorsValueChainRoles = $this->getTableLocator()->get('ActorsValueChainRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ActorsValueChainRoles);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ActorsValueChainRolesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
