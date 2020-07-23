<?php

namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\I18n\Time;



class SummaryMailer extends Mailer
{

  public function summary()
  {
    $timenow = Time::now();
    $timeoneweekago = new Time('7 days ago');

    $this
    ->setFrom(['gestion@awam.fr' => "Reporting hebdomadaire du $timeoneweekago->day/$timeoneweekago->month/$timeoneweekago->year au $timenow->day/$timenow->month/$timenow->year"])
    ->setSubject('Reporting hebdo des données')
    ->setEmailFormat('html')
    ->setTemplate('send')
    ->attachments('C:\Users\Arnaud Sirech\Documents\awam\Moteur-CakePHP\moteur-api\src\Template\Layout\pdf\send.pdf')
    ->setTo('arnaud.sirech@gmail.com');
  }
}
