<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommunitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommunitiesTable Test Case
 */
class CommunitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommunitiesTable
     */
    protected $Communities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Communities',
        'app.Actors',
        'app.Enterprises',
        'app.Organisations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Communities') ? [] : ['className' => CommunitiesTable::class];
        $this->Communities = $this->getTableLocator()->get('Communities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Communities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CommunitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
