<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfileProjectsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfileProjectsTable Test Case
 */
class ProfileProjectsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfileProjectsTable
     */
    protected $ProfileProjects;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProfileProjects',
        'app.Profiles',
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
        $config = $this->getTableLocator()->exists('ProfileProjects') ? [] : ['className' => ProfileProjectsTable::class];
        $this->ProfileProjects = $this->getTableLocator()->get('ProfileProjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProfileProjects);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfileProjectsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProfileProjectsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
