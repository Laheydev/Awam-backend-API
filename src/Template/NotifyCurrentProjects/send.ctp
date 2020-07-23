<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?= "<h1>Les projets en cours</h1>" ?>
  <?php foreach($currentProjects as $project){
    echo "<table class='borderBlack'>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td style='width: 69.4px;'>Nom</td>";
    echo "<td style='width: 88.6px;'>Description</td>";
    echo "<td style='width: 80px;'>Devis</td>";
    echo "<td style='width: 80px;'>Facture</td>";
    echo "<td style='width: 80px;'>Cr&eacute;e</td>";
    echo "<td style='width: 80px;'>Modifi&eacute;</td>";
    echo "<td style='width: 81px;'>Fin pr&eacute;vue</td>";
    echo "<td style='width: 81px;'>Client</td>";
    echo "<td style='width: 81px;'>User</td>";
    echo "<td style='width: 81px;'>Status</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='width: 69.4px;'>$project->name</td>";
    echo "<td style='width: 88.6px;'>$project->body</td>";
    echo "<td style='width: 80px;'>$project->quote</td>";
    echo" <td style='width: 80px;'>$project->bill</td>";
    echo "<td style='width: 80px;'>$project->created</td>";
    echo "<td style='width: 80px;'>$project->modified</td>";
    echo "<td style='width: 81px;'>$project->projectedend</td>";
    echo "<td style='width: 81px;'>$project->client_id</td>";
    echo "<td style='width: 81px;'>$project->user_id</td>";
    echo "<td style='width: 81px;'>$project->status_id</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
  }

echo "<style>
  .borderBlack{
    border: 1px solid black;
  }
</style>";
  ?>
</body>
</html>
