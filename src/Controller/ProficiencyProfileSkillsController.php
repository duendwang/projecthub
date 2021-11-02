<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProficiencyProfileSkills Controller
 *
 * @property \App\Model\Table\ProficiencyProfileSkillsTable $ProficiencyProfileSkills
 * @method \App\Model\Entity\ProficiencyProfileSkill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProficiencyProfileSkillsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profiles', 'Skills', 'Proficiencies'],
        ];
        $proficiencyProfileSkills = $this->paginate($this->ProficiencyProfileSkills);

        $this->set(compact('proficiencyProfileSkills'));
    }

    /**
     * View method
     *
     * @param string|null $id Proficiency Profile Skill id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proficiencyProfileSkill = $this->ProficiencyProfileSkills->get($id, [
            'contain' => ['Profiles', 'Skills', 'Proficiencies', 'ProfileProjectSkills'],
        ]);

        $this->set(compact('proficiencyProfileSkill'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proficiencyProfileSkill = $this->ProficiencyProfileSkills->newEmptyEntity();
        if ($this->request->is('post')) {
            $proficiencyProfileSkill = $this->ProficiencyProfileSkills->patchEntity($proficiencyProfileSkill, $this->request->getData());
            if ($this->ProficiencyProfileSkills->save($proficiencyProfileSkill)) {
                $this->Flash->success(__('The proficiency profile skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proficiency profile skill could not be saved. Please, try again.'));
        }
        $profiles = $this->ProficiencyProfileSkills->Profiles->find('list', ['limit' => 200])->all();
        $skills = $this->ProficiencyProfileSkills->Skills->find('list', ['limit' => 200])->all();
        $proficiencies = $this->ProficiencyProfileSkills->Proficiencies->find('list', ['limit' => 200])->all();
        $this->set(compact('proficiencyProfileSkill', 'profiles', 'skills', 'proficiencies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proficiency Profile Skill id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proficiencyProfileSkill = $this->ProficiencyProfileSkills->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proficiencyProfileSkill = $this->ProficiencyProfileSkills->patchEntity($proficiencyProfileSkill, $this->request->getData());
            if ($this->ProficiencyProfileSkills->save($proficiencyProfileSkill)) {
                $this->Flash->success(__('The proficiency profile skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proficiency profile skill could not be saved. Please, try again.'));
        }
        $profiles = $this->ProficiencyProfileSkills->Profiles->find('list', ['limit' => 200])->all();
        $skills = $this->ProficiencyProfileSkills->Skills->find('list', ['limit' => 200])->all();
        $proficiencies = $this->ProficiencyProfileSkills->Proficiencies->find('list', ['limit' => 200])->all();
        $this->set(compact('proficiencyProfileSkill', 'profiles', 'skills', 'proficiencies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proficiency Profile Skill id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proficiencyProfileSkill = $this->ProficiencyProfileSkills->get($id);
        if ($this->ProficiencyProfileSkills->delete($proficiencyProfileSkill)) {
            $this->Flash->success(__('The proficiency profile skill has been deleted.'));
        } else {
            $this->Flash->error(__('The proficiency profile skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
