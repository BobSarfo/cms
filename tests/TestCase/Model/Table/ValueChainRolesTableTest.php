<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValueChainRolesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValueChainRolesTable Test Case
 */
class ValueChainRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ValueChainRolesTable
     */
    protected $ValueChainRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ValueChainRoles',
        'app.EnterpriseValueChainRoles',
        'app.Actors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ValueChainRoles') ? [] : ['className' => ValueChainRolesTable::class];
        $this->ValueChainRoles = $this->getTableLocator()->get('ValueChainRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ValueChainRoles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ValueChainRolesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
