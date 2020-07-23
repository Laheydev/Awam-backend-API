<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Types Controller
 *
 * @property \App\Model\Table\TypesTable $Types
 *
 * @method \App\Model\Entity\Type[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $types = $this->Types
    ->find('all');
    $this->set([
      'types' => $types,
      '_serialize' => ['types']
    ]);

  }

  public function view($id){
    $type = $this->Types->get($id);
    $this->set([
      'type' => $type,
      '_serialize' => ['type']
    ]);
  }

  public function add(){
    $newType = $this->Types->newEntity($this->request->getData());
    if ($this->Types->save($newType)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'type' => $newType,
      '_serialize' => ['message', 'type']
    ]);
  }

  public function edit($id){
    $type = $this->Types->get($id);
    if ($this->request->is(['post','put'])){
      $type = $this->Types->patchEntity($type, $this->request->getData());
      if($this->Types->save($type)){
        $message = 'OK';
      }else{
        $message = 'Error';
      }
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }

  public function delete($id){
    $type = $this->Types->get($id);
    $message = 'Deleted';
    if (!$this->Types->delete($type)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }

}
