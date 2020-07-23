<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class statusController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $status = $this->Status->find('all')->contain(['Projects']);
    $this->set([
      'status' => $status,
      '_serialize' => ['status']
    ]);

  }

  public function view($id){
    $status = $this->Status->get($id);
    $this->set([
      'status' => $status,
      '_serialize' => ['status']
    ]);
  }

  public function add(){
    $newStatut = $this->Status->newEntity($this->request->getData());
    if ($this->Status->save($newStatut)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'status' => $newStatut,
      '_serialize' => ['message', 'status']
    ]);
  }

  public function edit($id){
    $status = $this->Status->get($id);
    if ($this->request->is(['post','put'])){
      $status = $this->Status->patchEntity($status, $this->request->getData());
      if($this->status->save($status)){
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
    $status = $this->Status->get($id);
    $message = 'Deleted';
    if (!$this->Status->delete($status)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }
}
