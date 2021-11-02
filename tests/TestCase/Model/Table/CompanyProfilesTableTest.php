<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyProfilesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyProfilesTable Test Case
 */
class CompanyProfilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyProfilesTable
     */
    protected $CompanyProfiles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CompanyProfiles',
        'app.Companies',
        'app.Profiles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CompanyProfiles') ? [] : ['className' => CompanyProfilesTable::class];
        $this->CompanyProfiles = $this->getTableLocator()->get('CompanyProfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CompanyProfiles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CompanyProfilesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CompanyProfilesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
