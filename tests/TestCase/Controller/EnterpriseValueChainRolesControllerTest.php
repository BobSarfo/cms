<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EnterpriseValueChainRolesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EnterpriseValueChainRolesController Test Case
 *
 * @uses \App\Controller\EnterpriseValueChainRolesController
 */
class EnterpriseValueChainRolesControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\EnterpriseValueChainRolesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\EnterpriseValueChainRolesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\EnterpriseValueChainRolesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\EnterpriseValueChainRolesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\EnterpriseValueChainRolesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
