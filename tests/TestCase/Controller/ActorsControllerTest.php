<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ActorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ActorsController Test Case
 *
 * @uses \App\Controller\ActorsController
 */
class ActorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
        'app.ActorsCommodities',
        'app.ActorsEnterprises',
        'app.ActorsOrganisations',
        'app.ActorsValueChainRoles',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ActorsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ActorsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ActorsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ActorsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ActorsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
