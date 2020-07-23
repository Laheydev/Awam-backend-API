<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Categories Controller
*
* @property \App\Model\Table\CategoriesTable $Categories
*
* @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
*/
class CategoriesController extends AppController
{


  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $categories = $this->Categories
    ->find('all');
    $this->set([
      'categorie' => $categories,
      '_serialize' => ['categorie']
    ]);

  }

  public function view($id){
    $categorie = $this->Categories->get($id);
    $this->set([
      'categorie' => $categorie,
      '_serialize' => ['categorie']
    ]);
  }

  public function add(){
    $newCategorie = $this->Categories->newEntity($this->request->getData());
    if ($this->Categories->save($newCategorie)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'categorie' => $newCategorie,
      '_serialize' => ['message', 'categorie']
    ]);
  }

  public function edit($id){
    $categorie = $this->Categories->get($id);
    if ($this->request->is(['post','put'])){
      $categorie = $this->Categories->patchEntity($categorie, $this->request->getData());
      if($this->Categories->save($categorie)){
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
    $categorie = $this->Categories->get($id);
    $message = 'Deleted';
    if (!$this->Categories->delete($categorie)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }

}
