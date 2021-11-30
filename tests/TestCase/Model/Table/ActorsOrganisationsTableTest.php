<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorsOrganisationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorsOrganisationsTable Test Case
 */
class ActorsOrganisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorsOrganisationsTable
     */
    protected $ActorsOrganisations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ActorsOrganisations',
        'app.Organisations',
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
        $config = $this->getTableLocator()->exists('ActorsOrganisations') ? [] : ['className' => ActorsOrganisationsTable::class];
        $this->ActorsOrganisations = $this->getTableLocator()->get('ActorsOrganisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ActorsOrganisations);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ActorsOrganisationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
