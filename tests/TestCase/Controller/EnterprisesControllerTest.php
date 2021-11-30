<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EnterprisesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EnterprisesController Test Case
 *
 * @uses \App\Controller\EnterprisesController
 */
class EnterprisesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Enterprises',
        'app.EnterpriseTypes',
        'app.Communities',
        'app.EnterpriseCommodities',
        'app.EnterpriseValueChainRoles',
        'app.Actors',
        'app.ActorsEnterprises',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\EnterprisesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\EnterprisesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\EnterprisesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\EnterprisesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\EnterprisesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
