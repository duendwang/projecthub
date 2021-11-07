<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profiles Model
 *
 * @property \App\Model\Table\CompanyProfilesTable&\Cake\ORM\Association\HasMany $CompanyProfiles
 * @property \App\Model\Table\ProficiencyProfileSkillsTable&\Cake\ORM\Association\HasMany $ProficiencyProfileSkills
 * @property \App\Model\Table\ProfileProjectsTable&\Cake\ORM\Association\HasMany $ProfileProjects
 *
 * @method \App\Model\Entity\Profile newEmptyEntity()
 * @method \App\Model\Entity\Profile newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profile findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profile|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('profiles');
        $this->setDisplayField('full_name');
        $this->setPrimaryKey('discord_id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CompanyProfiles', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('ProficiencyProfileSkills', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('ProfileProjects', [
            'foreignKey' => 'profile_id',
        ]);
        $this->belongsTo('ProfileModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Profiles'
        ]);
        $this->hasMany('CompanyCreators', [
            'foreignKey' => 'creator',
            'className' => 'Companies'
        ]);
        $this->belongsTo('CompanyModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Companies'
        ]);
        $this->hasMany('CompanyProfileCreators', [
            'foreignKey' => 'creator',
            'className' => 'CompanyProfiles'
        ]);
        $this->belongsTo('CompanyProfileModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'CompanyProfiles'
        ]);
        $this->hasMany('ProficiencyCreators', [
            'foreignKey' => 'creator',
            'className' => 'Proficiencies'
        ]);
        $this->belongsTo('ProficiencyModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Proficiencies'
        ]);
        $this->hasMany('ProficiencyProfileSkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'ProficiencyProfileSkills'
        ]);
        $this->belongsTo('ProficiencyProfileSkillModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'ProficiencyProfileSkills'
        ]);
        $this->hasMany('ProficiencyProjectSkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'ProficiencyProjectSkills'
        ]);
        $this->belongsTo('ProficiencyProjectSkillModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'ProficiencyProjectSkills'
        ]);
        $this->hasMany('ProfileProjectSkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'ProfileProjectSkills'
        ]);
        $this->belongsTo('ProfileProjectSkillModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'ProfileProjectSkills'
        ]);
        $this->hasMany('ProfileProjectCreators', [
            'foreignKey' => 'creator',
            'className' => 'ProfileProjects'
        ]);
        $this->belongsTo('ProfileProjectModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'ProfileProjects'
        ]);
        $this->belongsTo('ProfileModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Profiles'
        ]);
        $this->hasMany('ProjectCreators', [
            'foreignKey' => 'creator',
            'className' => 'Projects'
        ]);
        $this->belongsTo('ProjectModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Projects'
        ]);
        $this->hasMany('SkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'Skills'
        ]);
        $this->belongsTo('SkillModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Skills'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('discord_id', null, 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->allowEmptyString('last_name');

        $validator
            ->allowEmptyString('timezone');

        $validator
            ->allowEmptyString('modifier');

        return $validator;
    }

    protected function _getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
