<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProfileProjectSkills Controller
 *
 * @property \App\Model\Table\ProfileProjectSkillsTable $ProfileProjectSkills
 * @method \App\Model\Entity\ProfileProjectSkill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfileProjectSkillsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProficiencyProfileSkills', 'Projects'],
        ];
        $profileProjectSkills = $this->paginate($this->ProfileProjectSkills);

        $this->set(compact('profileProjectSkills'));
    }

    /**
     * View method
     *
     * @param string|null $id Profile Project Skill id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profileProjectSkill = $this->ProfileProjectSkills->get($id, [
            'contain' => ['ProficiencyProfileSkills', 'Projects'],
        ]);

        $this->set(compact('profileProjectSkill'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profileProjectSkill = $this->ProfileProjectSkills->newEmptyEntity();
        if ($this->request->is('post')) {
            $profileProjectSkill = $this->ProfileProjectSkills->patchEntity($profileProjectSkill, $this->request->getData());
            if ($this->ProfileProjectSkills->save($profileProjectSkill)) {
                $this->Flash->success(__('The profile project skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile project skill could not be saved. Please, try again.'));
        }
        $proficiencyProfileSkills = $this->ProfileProjectSkills->ProficiencyProfileSkills->find('list', ['limit' => 200])->all();
        $projects = $this->ProfileProjectSkills->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('profileProjectSkill', 'proficiencyProfileSkills', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profile Project Skill id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profileProjectSkill = $this->ProfileProjectSkills->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profileProjectSkill = $this->ProfileProjectSkills->patchEntity($profileProjectSkill, $this->request->getData());
            if ($this->ProfileProjectSkills->save($profileProjectSkill)) {
                $this->Flash->success(__('The profile project skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile project skill could not be saved. Please, try again.'));
        }
        $proficiencyProfileSkills = $this->ProfileProjectSkills->ProficiencyProfileSkills->find('list', ['limit' => 200])->all();
        $projects = $this->ProfileProjectSkills->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('profileProjectSkill', 'proficiencyProfileSkills', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profile Project Skill id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profileProjectSkill = $this->ProfileProjectSkills->get($id);
        if ($this->ProfileProjectSkills->delete($profileProjectSkill)) {
            $this->Flash->success(__('The profile project skill has been deleted.'));
        } else {
            $this->Flash->error(__('The profile project skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
