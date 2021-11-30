<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductionScalesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductionScalesTable Test Case
 */
class ProductionScalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductionScalesTable
     */
    protected $ProductionScales;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductionScales',
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
        $config = $this->getTableLocator()->exists('ProductionScales') ? [] : ['className' => ProductionScalesTable::class];
        $this->ProductionScales = $this->getTableLocator()->get('ProductionScales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductionScales);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductionScalesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
