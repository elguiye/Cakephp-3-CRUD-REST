<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Beneficioslist Controller
 *
 * @property \App\Model\Table\BeneficioslistTable $Beneficioslist
 *
 * @method \App\Model\Entity\Beneficioslist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BeneficioslistController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $beneficioslist = $this->paginate($this->Beneficioslist);

        $this->set(compact('beneficioslist'));
    }

    /**
     * View method
     *
     * @param string|null $id Beneficioslist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $beneficioslist = $this->Beneficioslist->get($id, [
            'contain' => []
        ]);

        $this->set('beneficioslist', $beneficioslist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //Modelo categorias
        $this->loadModel('Catbeneficios');

        $beneficioslist = $this->Beneficioslist->newEntity();
        if ($this->request->is('post')) {
            $beneficioslist = $this->Beneficioslist->patchEntity($beneficioslist, $this->request->getData());
            if ($this->Beneficioslist->save($beneficioslist)) {
                $this->Flash->success(__('The beneficioslist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The beneficioslist could not be saved. Please, try again.'));
        }
        $this->set(compact('beneficioslist'));

        $categories = $this->Catbeneficios->find('list', [
            'keyField' => 'id',
            'valueField' => 'descripcion'
        ]);
        $this->set(compact('categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Beneficioslist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //Modelo categorias
        $this->loadModel('Catbeneficios');

        $beneficioslist = $this->Beneficioslist->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $beneficioslist = $this->Beneficioslist->patchEntity($beneficioslist, $this->request->getData());
            if ($this->Beneficioslist->save($beneficioslist)) {
                $this->Flash->success(__('The beneficioslist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The beneficioslist could not be saved. Please, try again.'));
        }
        $this->set(compact('beneficioslist'));

        $categories = $this->Catbeneficios->find('list', [
            'keyField' => 'id',
            'valueField' => 'descripcion'
        ]);
        $this->set(compact('categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Beneficioslist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $beneficioslist = $this->Beneficioslist->get($id);
        if ($this->Beneficioslist->delete($beneficioslist)) {
            $this->Flash->success(__('The beneficioslist has been deleted.'));
        } else {
            $this->Flash->error(__('The beneficioslist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
