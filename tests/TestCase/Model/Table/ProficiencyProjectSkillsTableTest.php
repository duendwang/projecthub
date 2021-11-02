<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProficiencyProjectSkillsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProficiencyProjectSkillsTable Test Case
 */
class ProficiencyProjectSkillsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProficiencyProjectSkillsTable
     */
    protected $ProficiencyProjectSkills;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProficiencyProjectSkills',
        'app.Projects',
        'app.Skills',
        'app.Proficiencies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProficiencyProjectSkills') ? [] : ['className' => ProficiencyProjectSkillsTable::class];
        $this->ProficiencyProjectSkills = $this->getTableLocator()->get('ProficiencyProjectSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProficiencyProjectSkills);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProficiencyProjectSkillsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProficiencyProjectSkillsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
