<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisabilitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisabilitiesTable Test Case
 */
class DisabilitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisabilitiesTable
     */
    protected $Disabilities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Disabilities',
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
        $config = $this->getTableLocator()->exists('Disabilities') ? [] : ['className' => DisabilitiesTable::class];
        $this->Disabilities = $this->getTableLocator()->get('Disabilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Disabilities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DisabilitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
