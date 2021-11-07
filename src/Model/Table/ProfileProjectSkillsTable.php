<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProfileProjectSkills Model
 *
 * @property \App\Model\Table\ProficiencyProfileSkillsTable&\Cake\ORM\Association\BelongsTo $ProficiencyProfileSkills
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ProfileProjectSkill newEmptyEntity()
 * @method \App\Model\Entity\ProfileProjectSkill newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProfileProjectSkill[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfileProjectSkillsTable extends Table
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

        $this->setTable('profile_project_skills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ProficiencyProfileSkills', [
            'foreignKey' => 'proficiency_profile_skill_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ProfileProjectSkillCreators', [
            'foreignKey' => 'creator',
            'className' => 'Profiles'
        ]);
        $this->belongsTo('ProfileProjectSkillModifiers', [
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
        $rules->add($rules->existsIn('proficiency_profile_skill_id', 'ProficiencyProfileSkills'), ['errorField' => 'proficiency_profile_skill_id']);
        $rules->add($rules->existsIn('project_id', 'Projects'), ['errorField' => 'project_id']);

        return $rules;
    }
}
