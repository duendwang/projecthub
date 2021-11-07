<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProficiencyProjectSkills Model
 *
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 * @property \App\Model\Table\SkillsTable&\Cake\ORM\Association\BelongsTo $Skills
 * @property \App\Model\Table\ProficienciesTable&\Cake\ORM\Association\BelongsTo $Proficiencies
 *
 * @method \App\Model\Entity\ProficiencyProjectSkill newEmptyEntity()
 * @method \App\Model\Entity\ProficiencyProjectSkill newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProficiencyProjectSkill[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProficiencyProjectSkillsTable extends Table
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

        $this->setTable('proficiency_project_skills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
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
        $this->belongsTo('ProficicneyProjectSkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'Profiles'
        ]);
        $this->belongsTo('ProficicneyProjectSkillModifiers', [
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
        $rules->add($rules->existsIn('project_id', 'Projects'), ['errorField' => 'project_id']);
        $rules->add($rules->existsIn('skill_id', 'Skills'), ['errorField' => 'skill_id']);
        $rules->add($rules->existsIn('proficiency_id', 'Proficiencies'), ['errorField' => 'proficiency_id']);

        return $rules;
    }
}
