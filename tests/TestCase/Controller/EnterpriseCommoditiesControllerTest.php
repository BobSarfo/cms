<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EnterpriseCommoditiesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EnterpriseCommoditiesController Test Case
 *
 * @uses \App\Controller\EnterpriseCommoditiesController
 */
class EnterpriseCommoditiesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EnterpriseCommodities',
        'app.Enterprises',
        'app.Commodities',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\EnterpriseCommoditiesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\EnterpriseCommoditiesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\EnterpriseCommoditiesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\EnterpriseCommoditiesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\EnterpriseCommoditiesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
