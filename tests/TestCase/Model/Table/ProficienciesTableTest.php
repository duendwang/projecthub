<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProficienciesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProficienciesTable Test Case
 */
class ProficienciesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProficienciesTable
     */
    protected $Proficiencies;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Proficiencies',
        'app.ProficiencyProfileSkills',
        'app.ProficiencyProjectSkills',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Proficiencies') ? [] : ['className' => ProficienciesTable::class];
        $this->Proficiencies = $this->getTableLocator()->get('Proficiencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Proficiencies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProficienciesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProficienciesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
