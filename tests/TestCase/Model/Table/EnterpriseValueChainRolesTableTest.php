<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnterpriseValueChainRolesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnterpriseValueChainRolesTable Test Case
 */
class EnterpriseValueChainRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnterpriseValueChainRolesTable
     */
    protected $EnterpriseValueChainRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EnterpriseValueChainRoles',
        'app.Enterprises',
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
        $config = $this->getTableLocator()->exists('EnterpriseValueChainRoles') ? [] : ['className' => EnterpriseValueChainRolesTable::class];
        $this->EnterpriseValueChainRoles = $this->getTableLocator()->get('EnterpriseValueChainRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EnterpriseValueChainRoles);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EnterpriseValueChainRolesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
