<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proficiencies Model
 *
 * @property \App\Model\Table\ProficiencyProfileSkillsTable&\Cake\ORM\Association\HasMany $ProficiencyProfileSkills
 * @property \App\Model\Table\ProficiencyProjectSkillsTable&\Cake\ORM\Association\HasMany $ProficiencyProjectSkills
 *
 * @method \App\Model\Entity\Proficiency newEmptyEntity()
 * @method \App\Model\Entity\Proficiency newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Proficiency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proficiency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proficiency findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Proficiency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proficiency[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proficiency|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proficiency saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proficiency[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proficiency[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proficiency[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proficiency[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProficienciesTable extends Table
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

        $this->setTable('proficiencies');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ProficiencyProfileSkills', [
            'foreignKey' => 'proficiency_id',
        ]);
        $this->hasMany('ProficiencyProjectSkills', [
            'foreignKey' => 'proficiency_id',
        ]);
        $this->belongsTo('ProficiencyCreators', [
            'foreignKey' => 'creator',
            'className' => 'Profiles'
        ]);
        $this->belongsTo('ProficiencyModifiers', [
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->nonNegativeInteger('order_num')
            ->requirePresence('order_num', 'create')
            ->notEmptyString('order_num')
            ->add('order_num', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

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
        $rules->add($rules->isUnique(['name']), ['errorField' => 'name']);
        $rules->add($rules->isUnique(['order_num']), ['errorField' => 'order_num']);

        return $rules;
    }
}
