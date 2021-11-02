<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Proficiencies Controller
 *
 * @property \App\Model\Table\ProficienciesTable $Proficiencies
 * @method \App\Model\Entity\Proficiency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProficienciesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $proficiencies = $this->paginate($this->Proficiencies);

        $this->set(compact('proficiencies'));
    }

    /**
     * View method
     *
     * @param string|null $id Proficiency id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proficiency = $this->Proficiencies->get($id, [
            'contain' => ['ProficiencyProfileSkills', 'ProficiencyProjectSkills'],
        ]);

        $this->set(compact('proficiency'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proficiency = $this->Proficiencies->newEmptyEntity();
        if ($this->request->is('post')) {
            $proficiency = $this->Proficiencies->patchEntity($proficiency, $this->request->getData());
            if ($this->Proficiencies->save($proficiency)) {
                $this->Flash->success(__('The proficiency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proficiency could not be saved. Please, try again.'));
        }
        $this->set(compact('proficiency'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proficiency id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proficiency = $this->Proficiencies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proficiency = $this->Proficiencies->patchEntity($proficiency, $this->request->getData());
            if ($this->Proficiencies->save($proficiency)) {
                $this->Flash->success(__('The proficiency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proficiency could not be saved. Please, try again.'));
        }
        $this->set(compact('proficiency'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proficiency id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proficiency = $this->Proficiencies->get($id);
        if ($this->Proficiencies->delete($proficiency)) {
            $this->Flash->success(__('The proficiency has been deleted.'));
        } else {
            $this->Flash->error(__('The proficiency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
