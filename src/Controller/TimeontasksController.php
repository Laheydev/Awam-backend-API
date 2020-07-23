<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class TimeontasksController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $timeontasks = $this->Timeontasks->find('all')
    ->contain(["Tasks" => ["Categories","Types","Status"]])
    ->contain(["Tasks" => ["Collaborateurs" => [
      'fields' => [
        'firstname','lastname','quota'
      ]
    ]
    ]]);

    $this->set([
      'timeontasks' => $timeontasks,
      '_serialize' => ['timeontasks']
    ]);

  }

  public function view($id){
    $timeontask = $this->Timeontasks->get($id);
    $this->set([
      'timeontask' => $timeontask,
      '_serialize' => ['timeontask']
    ]);
  }

  public function viewByCollaborateurId($id){
    $collabList = $this->Timeontasks->getCollabTimeOntasks($id);

    $this->set([
      'tasksbycollab' => $collabList,
      '_serialize' => ['tasksbycollab']
    ]);
  }

  public function add(){
    $timeontask = $this->Timeontasks->newEntity($this->request->getData());
    if ($this->Timeontasks->save($timeontask)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'timeontask' => $timeontask,
      '_serialize' => ['message', 'timeontask']
    ]);
  }

  public function edit($id){
    $timeontask = $this->Timeontasks->get($id);
    if ($this->request->is(['post','put'])){
      $timeontask = $this->Timeontasks->patchEntity($timeontask, $this->request->getData());
      if($this->Timeontasks->save($timeontask)){
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
    $timeontask = $this->Timeontasks->get($id);
    $message = 'Deleted';
    if (!$this->Timeontasks->delete($timeontask)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }
}
