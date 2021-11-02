<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProficiencyProfileSkillsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProficiencyProfileSkillsTable Test Case
 */
class ProficiencyProfileSkillsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProficiencyProfileSkillsTable
     */
    protected $ProficiencyProfileSkills;

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
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProficiencyProfileSkills') ? [] : ['className' => ProficiencyProfileSkillsTable::class];
        $this->ProficiencyProfileSkills = $this->getTableLocator()->get('ProficiencyProfileSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProficiencyProfileSkills);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProficiencyProfileSkillsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProficiencyProfileSkillsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
