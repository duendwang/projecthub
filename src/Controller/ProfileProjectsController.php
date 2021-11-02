<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProfileProjects Controller
 *
 * @property \App\Model\Table\ProfileProjectsTable $ProfileProjects
 * @method \App\Model\Entity\ProfileProject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfileProjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profiles', 'Projects'],
        ];
        $profileProjects = $this->paginate($this->ProfileProjects);

        $this->set(compact('profileProjects'));
    }

    /**
     * View method
     *
     * @param string|null $id Profile Project id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profileProject = $this->ProfileProjects->get($id, [
            'contain' => ['Profiles', 'Projects'],
        ]);

        $this->set(compact('profileProject'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profileProject = $this->ProfileProjects->newEmptyEntity();
        if ($this->request->is('post')) {
            $profileProject = $this->ProfileProjects->patchEntity($profileProject, $this->request->getData());
            if ($this->ProfileProjects->save($profileProject)) {
                $this->Flash->success(__('The profile project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile project could not be saved. Please, try again.'));
        }
        $profiles = $this->ProfileProjects->Profiles->find('list', ['limit' => 200])->all();
        $projects = $this->ProfileProjects->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('profileProject', 'profiles', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profile Project id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profileProject = $this->ProfileProjects->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profileProject = $this->ProfileProjects->patchEntity($profileProject, $this->request->getData());
            if ($this->ProfileProjects->save($profileProject)) {
                $this->Flash->success(__('The profile project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile project could not be saved. Please, try again.'));
        }
        $profiles = $this->ProfileProjects->Profiles->find('list', ['limit' => 200])->all();
        $projects = $this->ProfileProjects->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('profileProject', 'profiles', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profile Project id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profileProject = $this->ProfileProjects->get($id);
        if ($this->ProfileProjects->delete($profileProject)) {
            $this->Flash->success(__('The profile project has been deleted.'));
        } else {
            $this->Flash->error(__('The profile project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
