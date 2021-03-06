<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProfileProjectSkillsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProfileProjectSkillsController Test Case
 *
 * @uses \App\Controller\ProfileProjectSkillsController
 */
class ProfileProjectSkillsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProfileProjectSkills',
        'app.ProficiencyProfileSkills',
        'app.Projects',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ProfileProjectSkillsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ProfileProjectSkillsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ProfileProjectSkillsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ProfileProjectSkillsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ProfileProjectSkillsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
