<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catbeneficios Controller
 *
 * @property \App\Model\Table\CatbeneficiosTable $Catbeneficios
 *
 * @method \App\Model\Entity\Catbeneficio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatbeneficiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $catbeneficios = $this->paginate($this->Catbeneficios);

        $this->set(compact('catbeneficios'));
    }

    /**
     * View method
     *
     * @param string|null $id Catbeneficio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catbeneficio = $this->Catbeneficios->get($id, [
            'contain' => []
        ]);

        $this->set('catbeneficio', $catbeneficio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catbeneficio = $this->Catbeneficios->newEntity();
        if ($this->request->is('post')) {
            $catbeneficio = $this->Catbeneficios->patchEntity($catbeneficio, $this->request->getData());
            if ($this->Catbeneficios->save($catbeneficio)) {
                $this->Flash->success(__('The catbeneficio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catbeneficio could not be saved. Please, try again.'));
        }
        $this->set(compact('catbeneficio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Catbeneficio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catbeneficio = $this->Catbeneficios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catbeneficio = $this->Catbeneficios->patchEntity($catbeneficio, $this->request->getData());
            if ($this->Catbeneficios->save($catbeneficio)) {
                $this->Flash->success(__('The catbeneficio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catbeneficio could not be saved. Please, try again.'));
        }
        $this->set(compact('catbeneficio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Catbeneficio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catbeneficio = $this->Catbeneficios->get($id);
        if ($this->Catbeneficios->delete($catbeneficio)) {
            $this->Flash->success(__('The catbeneficio has been deleted.'));
        } else {
            $this->Flash->error(__('The catbeneficio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
