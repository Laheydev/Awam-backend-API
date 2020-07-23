<?php
namespace App\Routing\Filter;

use Cake\Event\Event;
use Cake\Routing\DispatcherFilter;

class RESTFilter extends DispatcherFilter {


  // gestion du CORS pour la communication entre Cake et Vue
  public function beforeDispatch(Event $event) {
    $request = $event->data['request'];
    $response = $event->data['response'];

    $origin = $request->header('Origin');

    $response->header("Access-Control-Allow-Origin: $origin");


    if ($request->method() == 'OPTIONS') {
      $method  = $request->header('Access-Control-Request-Method');
      $headers = $request->header('Access-Control-Request-Headers');
      $response->header('Access-Control-Allow-Headers', "*");
      $response->header('Access-Control-Allow-Methods', "GET,HEAD,OPTIONS,POST,PUT");
      $response->header('Access-Control-Allow-Credentials', 'true');
      $response->header('Access-Control-Max-Age', '120');
      $response->header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");
      
      $response->send();
      die;
    }
  }
}
