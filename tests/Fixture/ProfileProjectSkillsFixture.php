<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfileProjectSkillsFixture
 */
class ProfileProjectSkillsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'proficiency_profile_skill_id' => 1,
                'project_id' => 1,
                'creator' => 1,
                'created' => '2021-11-02 22:21:19',
                'modifier' => 1,
                'modified' => '2021-11-02 22:21:19',
            ],
        ];
        parent::init();
    }
}
