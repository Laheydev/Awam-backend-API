<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class ClientsController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $clients = $this->Clients->find('all')->contain(['Projects']);
    $this->set([
      'clients' => $clients,
      '_serialize' => ['clients']
    ]);

  }

  public function view($id){
    $client = $this->Clients->get($id);
    $this->set([
      'client' => $client,
      '_serialize' => ['client']
    ]);
  }

  public function add(){
    $newClient = $this->Clients->newEntity($this->request->getData());
    if ($this->Clients->save($newClient)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'client' => $newClient,
      '_serialize' => ['message', 'client']
    ]);
  }

  public function edit($id){
    $client = $this->Clients->get($id);
    if ($this->request->is(['post','put'])){
      $client = $this->Clients->patchEntity($client, $this->request->getData());
      if($this->Clients->save($client)){
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
    $client = $this->Clients->get($id);
    $message = 'Deleted';
    if (!$this->Clients->delete($client)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }
}
