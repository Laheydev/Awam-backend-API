<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class UsersController extends AppController
{

  public function initialize()
  {
    parent::initialize();
  }

  public function index(){

    $users = $this->Users->find()->select(['id','username','created','modified']);
    $this->set([
      'users' => $users,
      '_serialize' => ['users']
    ]);

  }

  public function view($id){
    $user = $this->Users->get($id);
    $this->set([
      'user' => $user,
      '_serialize' => ['user']
    ]);
  }

  public function viewByUsername($username){
    $currentUser = $this->Users->getUserByUsername($username);

    $this->set([
      'currentUser' => $currentUser,
      '_serialize' => ['currentUser']
    ]);
  }

  public function add(){
    $newUser = $this->Users->newEntity($this->request->getData());
    if ($this->Users->save($newUser)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'user' => $newUser,
      '_serialize' => ['message', 'user']
    ]);
  }

  public function edit($id){
    $user = $this->Users->get($id);
    if ($this->request->is(['post','put'])){
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if($this->Users->save($user)){
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
    $user = $this->Users->get($id);
    $message = 'Deleted';
    if (!$this->Users->delete($user)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }


}
