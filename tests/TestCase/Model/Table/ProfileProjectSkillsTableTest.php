<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfileProjectSkillsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfileProjectSkillsTable Test Case
 */
class ProfileProjectSkillsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfileProjectSkillsTable
     */
    protected $ProfileProjectSkills;

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
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProfileProjectSkills') ? [] : ['className' => ProfileProjectSkillsTable::class];
        $this->ProfileProjectSkills = $this->getTableLocator()->get('ProfileProjectSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProfileProjectSkills);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfileProjectSkillsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProfileProjectSkillsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
