<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnterpriseTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnterpriseTypesTable Test Case
 */
class EnterpriseTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnterpriseTypesTable
     */
    protected $EnterpriseTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EnterpriseTypes',
        'app.Enterprises',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EnterpriseTypes') ? [] : ['className' => EnterpriseTypesTable::class];
        $this->EnterpriseTypes = $this->getTableLocator()->get('EnterpriseTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EnterpriseTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnterpriseTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
