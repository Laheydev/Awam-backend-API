<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?= '<h1 style="text-align: left;font-size: 40px;color: black;">Les projets en cours</h1>' ?>
  <?php foreach($currentProjects as $project){
    echo '<table cellpadding="5" style="padding-bottom: 15px;margin-bottom: 50px;text-align:center;">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td class="projectHead" style="width: 69.4px;">Nom</td>';
    echo '<td class="projectHead" style="width: 88.6px;">Description</td>';
    echo '<td class="projectHead" style="width: 80px;">Devis</td>';
    echo '<td class="projectHead" style="width: 80px;">Facture</td>';
    echo '<td class="projectHead" style="width: 80px;">Cr&eacute;e</td>';
    echo '<td class="projectHead" style="width: 80px;">Modifi&eacute;</td>';
    echo '<td class="projectHead" style="width: 81px;">Fin pr&eacute;vue</td>';
    echo '<td class="projectHead" style="width: 81px;">Client</td>';
    echo '<td class="projectHead" style="width: 81px;">User</td>';
    echo '<td class="projectHead" style="width: 81px;">Status</td>';
    echo '</tr>';
    echo '<tr style="text-align: center;">';
    echo '<td class="projectName isTitle" style="width: 69.4px;text-align: center;font-weight: bolder">'.$project->name.'</td>';
    echo '<td class="projectName" style="width: 88.6px; text-align: center">'.$project->body.'</td>';
    echo '<td class="projectName" style="width: 80px; text-align: center">'.$project->quote.'</td>';
    echo '<td class="projectName" style="width: 80px; text-align: center">'.$project->bill.'</td>';
    echo '<td class="projectName" style="width: 80px; text-align: center">'.$project->created.'</td>';
    echo '<td class="projectName" style="width: 80px; text-align: center">'.$project->modified.'</td>';
    echo '<td class="projectName" style="width: 81px; text-align: center">'.$project->projectedend.'</td>';
    echo '<td class="projectName" style="width: 81px; text-align: center">'.$project->client->name.'</td>';
    echo '<td class="projectName" style="width: 81px; text-align: center">'.$project->user->username.'</td>';
    echo '<td class="projectName" style="width: 81px; text-align: center">'.$project->status->name.'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    echo '<div style:"padding: 150px;"></div>';
    foreach($project->tasks as $task){
      echo '<table cellpadding="5" style="padding-bottom: 15px;margin-bottom: 50px;text-align:center;">';
      echo '<tbody>';
      echo '<tr>';
      echo '<td class="bg-white" style="width: 80px;"></td>';
      echo '<td class="taskHead" style="width: 69.4px;">Tâche</td>';
      echo '<td class="taskHead" style="width: 88.6px;">Catégorie</td>';
      echo '<td class="taskHead" style="width: 80px;">Crée</td>';
      echo '<td class="taskHead" style="width: 80px;">Modifié</td>';
      echo '<td class="taskHead" style="width: 80px;">Temps estimé(H)</td>';
      echo '<td class="taskHead" style="width: 80px;">Temps effectif(H)</td>';
      echo '<td class="taskHead" style="width: 81px;">Collaborateur</td>';
      echo '<td class="taskHead" style="width: 81px;">Temps restant(H)</td>';
      echo '<td class="taskHead" style="width: 81px;">Status</td>';
      echo '</tr>';
      echo '<tr style="text-align: center;">';
      echo '<td class="bg-white" style="width: 80px;"></td>';
      echo '<td  class="projectName isTitle" style="width: 69.4px;text-align: center;cellpadding=50">'.$task->type->name.'</td>';
      echo '<td class="projectName" style="width: 88.6px; text-align: center">'.$task->category->name.'</td>';
      echo '<td class="projectName" style="width: 80px; text-align: center">'.$task->created.'</td>';
      echo '<td class="projectName" style="width: 80px; text-align: center">'.$task->modified.'</td>';
      echo '<td class="projectName" style="width: 80px; text-align: center">'.$task->time.'</td>';
      echo '<td class="projectName" style="width: 80px; text-align: center">'.$task->elapsedtime.'</td>';
      echo '<td class="projectName" style="width: 81px; text-align: center">'.$task->collaborateur->firstname.'</td>';
      if(($task->time - $task->elapsedtime)>0) echo '<td class="projectName" style="width: 81px; text-align: center">'.($task->time - $task->elapsedtime).'</td>';
      if(($task->time - $task->elapsedtime)<=0) echo '<td class="projectName" style="width: 81px; text-align: center;background-color: #E2445B;color: white">'.($task->time - $task->elapsedtime).'</td>';
      echo '<td class="projectName" style="width: 81px; text-align: center">'.$task->status->name.'</td>';
      echo '</tr>';
      echo '</tbody>';
      echo '</table>';
    }
    echo '<div style:"padding: 150px;"></div>';
    echo '<hr />';
    echo '<div style:"padding: 150px;"></div>';

  }

  echo "<style>



  .projectHead{
    background-color: #343A40;
    color: white;
    font-weight: bolder;
  }

  .projectName{
    color: black;
    border: 1px solid white;
    text-align: left;
    width: 200px;
    background-color: #F2F2F2;
  }

  .bg-red{
    background-color: red;
  }

  .taskHead{
    background-color: #A5A4A5;
    color: white;
    font-weight: bolder;
    height: 20px;
    line-height:10px;
  }

  .vertical-center{
    display: table-cell;
    vertical-align: middle;
  }

  .taskCell{

  }

  td{
    border: 1px solid white;
    height: 20px;
    line-height:10px;
  }

  .bg-white{
    background-color: white;
  }

  </style>";
  ?>
</body>
</html>
