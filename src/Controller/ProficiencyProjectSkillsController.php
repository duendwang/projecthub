<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProficiencyProjectSkills Controller
 *
 * @property \App\Model\Table\ProficiencyProjectSkillsTable $ProficiencyProjectSkills
 * @method \App\Model\Entity\ProficiencyProjectSkill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProficiencyProjectSkillsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Skills', 'Proficiencies'],
        ];
        $proficiencyProjectSkills = $this->paginate($this->ProficiencyProjectSkills);

        $this->set(compact('proficiencyProjectSkills'));
    }

    /**
     * View method
     *
     * @param string|null $id Proficiency Project Skill id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proficiencyProjectSkill = $this->ProficiencyProjectSkills->get($id, [
            'contain' => ['Projects', 'Skills', 'Proficiencies'],
        ]);

        $this->set(compact('proficiencyProjectSkill'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proficiencyProjectSkill = $this->ProficiencyProjectSkills->newEmptyEntity();
        if ($this->request->is('post')) {
            $proficiencyProjectSkill = $this->ProficiencyProjectSkills->patchEntity($proficiencyProjectSkill, $this->request->getData());
            if ($this->ProficiencyProjectSkills->save($proficiencyProjectSkill)) {
                $this->Flash->success(__('The proficiency project skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proficiency project skill could not be saved. Please, try again.'));
        }
        $projects = $this->ProficiencyProjectSkills->Projects->find('list', ['limit' => 200])->all();
        $skills = $this->ProficiencyProjectSkills->Skills->find('list', ['limit' => 200])->all();
        $proficiencies = $this->ProficiencyProjectSkills->Proficiencies->find('list', ['limit' => 200])->all();
        $this->set(compact('proficiencyProjectSkill', 'projects', 'skills', 'proficiencies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proficiency Project Skill id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proficiencyProjectSkill = $this->ProficiencyProjectSkills->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proficiencyProjectSkill = $this->ProficiencyProjectSkills->patchEntity($proficiencyProjectSkill, $this->request->getData());
            if ($this->ProficiencyProjectSkills->save($proficiencyProjectSkill)) {
                $this->Flash->success(__('The proficiency project skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proficiency project skill could not be saved. Please, try again.'));
        }
        $projects = $this->ProficiencyProjectSkills->Projects->find('list', ['limit' => 200])->all();
        $skills = $this->ProficiencyProjectSkills->Skills->find('list', ['limit' => 200])->all();
        $proficiencies = $this->ProficiencyProjectSkills->Proficiencies->find('list', ['limit' => 200])->all();
        $this->set(compact('proficiencyProjectSkill', 'projects', 'skills', 'proficiencies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proficiency Project Skill id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proficiencyProjectSkill = $this->ProficiencyProjectSkills->get($id);
        if ($this->ProficiencyProjectSkills->delete($proficiencyProjectSkill)) {
            $this->Flash->success(__('The proficiency project skill has been deleted.'));
        } else {
            $this->Flash->error(__('The proficiency project skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
