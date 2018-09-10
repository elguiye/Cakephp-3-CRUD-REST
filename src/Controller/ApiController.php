<?php
namespace App\Controller;

use App\Controller\AppController;

use Rest\Controller\RestController;

/**
 * Api Controller
 *
 *
 * @method \App\Model\Entity\Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends RestController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function data()
    {
        $this->loadModel('Beneficioslist');
        $api = $this->Beneficioslist->find('all');
        $this->set(compact('api'));
    }


}
