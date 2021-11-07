<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProficiencyProfileSkills Model
 *
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 * @property \App\Model\Table\SkillsTable&\Cake\ORM\Association\BelongsTo $Skills
 * @property \App\Model\Table\ProficienciesTable&\Cake\ORM\Association\BelongsTo $Proficiencies
 * @property \App\Model\Table\ProfileProjectSkillsTable&\Cake\ORM\Association\HasMany $ProfileProjectSkills
 *
 * @method \App\Model\Entity\ProficiencyProfileSkill newEmptyEntity()
 * @method \App\Model\Entity\ProficiencyProfileSkill newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProficiencyProfileSkill[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProficiencyProfileSkillsTable extends Table
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

        $this->setTable('proficiency_profile_skills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Skills', [
            'foreignKey' => 'skill_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Proficiencies', [
            'foreignKey' => 'proficiency_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ProfileProjectSkills', [
            'foreignKey' => 'proficiency_profile_skill_id',
        ]);
        $this->belongsTo('ProficiencyProfileSkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'Profiles'
        ]);
        $this->belongsTo('ProficiencyProfileSkillModifiers', [
            'foreignKey' => 'modifier',
            'className' => 'Profiles'
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('notes')
            ->allowEmptyString('notes');

        $validator
            ->allowEmptyString('creator');

        $validator
            ->allowEmptyString('modifier');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);
        $rules->add($rules->existsIn('skill_id', 'Skills'), ['errorField' => 'skill_id']);
        $rules->add($rules->existsIn('proficiency_id', 'Proficiencies'), ['errorField' => 'proficiency_id']);

        return $rules;
    }
}
