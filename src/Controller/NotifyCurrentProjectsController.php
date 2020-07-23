<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Mailer\SummaryMailer;
use Cake\Mailer\MailerAwareTrait;

class NotifyCurrentProjectsController extends AppController
{
    use MailerAwareTrait;

  public function initialize()
  {
    parent::initialize();
  }

  public function send(){
    $this->loadModel('Projects');
    $currentProjects = $this->Projects->getCurrentProjects();
    $this->set(['currentProjects' => $currentProjects]);
    $this->getMailer('Summary')->send('summary');
  }
}
