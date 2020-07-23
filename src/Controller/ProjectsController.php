<?php



namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class ProjectsController extends AppController
{



  public function initialize()
  {
    parent::initialize();
  }

  public function index(){
    $projects = $this->Projects
    ->find('all')
    ->contain(["Tasks" => ["Categories","Types","Status"]])
    ->contain(["Tasks" => ["Collaborateurs" => [
      'fields' => [
        'firstname','lastname','quota'
      ]
    ]
    ]])
    ->contain(['Clients'])
    ->contain(['Users'  => [
      'fields' => [
        'username','role','created','modified'
      ]
    ]])
    ->contain(['Status']);
    $this->set([
      'projects' => $projects,
      '_serialize' => ['projects']
    ]);
  }

  public function view($id){
    $project = $this->Projects->get($id);
    $this->set([
      'project' => $project,
      '_serialize' => ['project']
    ]);
  }

  public function viewArchived(){
    $archivedProjects = $this->Projects->getArchivedProjects();
    $this->set([
      'archivedProjects' => $archivedProjects,
      '_serialize' => ['archivedProjects']
    ]);
  }

  public function viewCurrent(){
    $currentProjects = $this->Projects->getCurrentProjects();
    $this->set([
      'currentProjects' => $currentProjects,
      '_serialize' => ['currentProjects']
    ]);
  }
  

  public function add(){
    $newProject = $this->Projects->newEntity($this->request->getData());
    if ($this->Projects->save($newProject)){
      $message = 'OK';
    }else{
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      'project' => $newProject,
      '_serialize' => ['message', 'project']
    ]);
  }

  public function edit($id){
    $project = $this->Projects->get($id);
    if ($this->request->is(['post','put'])){
      $project = $this->Projects->patchEntity($project, $this->request->getData());
      if($this->Projects->save($project)){
        $message = 'OK';
      }else{
        $message = 'Error';
      }
    }
    $this->set([
      'message' => $message,
      'project' => $project,
      '_serialize' => ['message', 'project']
    ]);
  }

  public function delete($id){
    $project = $this->Projects->get($id);
    $message = 'Deleted';
    if (!$this->Projects->delete($project)){
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
  }


}
