<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class TasksController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $tasks = $this->Tasks
    ->find('all')
    ->contain(["Collaborateurs" => [
      'fields' => [
        'firstname','lastname','quota'
      ]
    ]
  ])
  ->contain('Categories')
  ->contain('Types')
  ->contain('Status');
  $this->set([
    'tasks' => $tasks,
    '_serialize' => ['tasks']
  ]);

}

public function view($id){
  $task = $this->Tasks->get($id);
  $this->set([
    'task' => $task,
    '_serialize' => ['task']
  ]);
}

public function add(){
  $newTask = $this->Tasks->newEntity($this->request->getData());
  if ($this->Tasks->save($newTask)){
    $message = 'OK';
  }else{
    $message = 'Error';
  }
  $this->set([
    'message' => $message,
    'task' => $newTask,
    '_serialize' => ['message', 'task']
  ]);
}

public function edit($id){
  $task = $this->Tasks->get($id);
  if ($this->request->is(['post','put'])){
    $task = $this->Tasks->patchEntity($task, $this->request->getData());
    if($this->Tasks->save($task)){
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
  $task = $this->Tasks->get($id);
  $message = 'Deleted';
  if (!$this->Tasks->delete($task)){
    $message = 'Error';
  }
  $this->set([
    'message' => $message,
    '_serialize' => ['message']
  ]);
}

public function viewByCollabId($projectid){
  $tasklist = $this->Tasks->viewByCollabId($projectid);
  $this->set([
    'tasks' => $tasklist,
    '_serialize' => ['tasks']
  ]);
}


}
