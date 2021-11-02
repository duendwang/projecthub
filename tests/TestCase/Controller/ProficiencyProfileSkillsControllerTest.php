<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProficiencyProfileSkillsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProficiencyProfileSkillsController Test Case
 *
 * @uses \App\Controller\ProficiencyProfileSkillsController
 */
class ProficiencyProfileSkillsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProficiencyProfileSkills',
        'app.Profiles',
        'app.Skills',
        'app.Proficiencies',
        'app.ProfileProjectSkills',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ProficiencyProfileSkillsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ProficiencyProfileSkillsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ProficiencyProfileSkillsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ProficiencyProfileSkillsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ProficiencyProfileSkillsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
