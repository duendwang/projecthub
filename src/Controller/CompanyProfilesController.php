<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CompanyProfiles Controller
 *
 * @property \App\Model\Table\CompanyProfilesTable $CompanyProfiles
 * @method \App\Model\Entity\CompanyProfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanyProfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Profiles'],
        ];
        $companyProfiles = $this->paginate($this->CompanyProfiles);

        $this->set(compact('companyProfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Company Profile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyProfile = $this->CompanyProfiles->get($id, [
            'contain' => ['Companies', 'Profiles'],
        ]);

        $this->set(compact('companyProfile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyProfile = $this->CompanyProfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $companyProfile = $this->CompanyProfiles->patchEntity($companyProfile, $this->request->getData());
            if ($this->CompanyProfiles->save($companyProfile)) {
                $this->Flash->success(__('The company profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company profile could not be saved. Please, try again.'));
        }
        $companies = $this->CompanyProfiles->Companies->find('list', ['limit' => 200])->all();
        $profiles = $this->CompanyProfiles->Profiles->find('list', ['limit' => 200])->all();
        $this->set(compact('companyProfile', 'companies', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Profile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyProfile = $this->CompanyProfiles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyProfile = $this->CompanyProfiles->patchEntity($companyProfile, $this->request->getData());
            if ($this->CompanyProfiles->save($companyProfile)) {
                $this->Flash->success(__('The company profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company profile could not be saved. Please, try again.'));
        }
        $companies = $this->CompanyProfiles->Companies->find('list', ['limit' => 200])->all();
        $profiles = $this->CompanyProfiles->Profiles->find('list', ['limit' => 200])->all();
        $this->set(compact('companyProfile', 'companies', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Profile id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyProfile = $this->CompanyProfiles->get($id);
        if ($this->CompanyProfiles->delete($companyProfile)) {
            $this->Flash->success(__('The company profile has been deleted.'));
        } else {
            $this->Flash->error(__('The company profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
