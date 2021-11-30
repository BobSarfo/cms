<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SexesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SexesTable Test Case
 */
class SexesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SexesTable
     */
    protected $Sexes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Sexes',
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
        $config = $this->getTableLocator()->exists('Sexes') ? [] : ['className' => SexesTable::class];
        $this->Sexes = $this->getTableLocator()->get('Sexes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Sexes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SexesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
