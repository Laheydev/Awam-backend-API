<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class CollaborateursController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $collaborateurs = $this->Collaborateurs->find()->select(['id','lastname','firstname','quota']);
    $this->set([
      'collaborateurs' => $collaborateurs,
      '_serialize' => ['collaborateurs']
    ]);
  }

  public function indexWithPictures(){
    $collaborateurs = $this->Collaborateurs->find('all');
    $this->set([
      'collaborateurs' => $collaborateurs,
      '_serialize' => ['collaborateurs']
    ]);

  }


  public function view($id){
    $collaborateur = $this->Collaborateurs->get($id);
    $this->set([
      'collaborateur' => $collaborateur,
      '_serialize' => ['collaborateur']
    ]);
  }

  public function add(){
    $newCollaborateur = $this->Collaborateurs->newEntity($this->request->getData());
    if ($this->Collaborateurs->save($newCollaborateur)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'collaborateur' => $collaborateur,
      '_serialize' => ['message', 'collaborateur']
    ]);
  }

  public function edit($id){
    $collaborateur = $this->Collaborateurs->get($id);
    if ($this->request->is(['post','put'])){
      $collaborateur = $this->Collaborateurs->patchEntity($collaborateur, $this->request->getData());
      if($this->Collaborateurs->save($collaborateur)){
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
    $collaborateur = $this->Collaborateurs->get($id);
    $message = 'Deleted';
    if (!$this->Collaborateurs->delete($collaborateur)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }
}
