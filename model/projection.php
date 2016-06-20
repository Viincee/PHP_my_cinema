<?php
  include_once('../controller/database.php');
  $limit = 0;
if (!empty($_POST['limit'])) {
  $limit = intval($_POST['limit']);
}
if (isset($_POST['submitProjec']))
{
  $sql = "SELECT titre, date_debut_affiche FROM tp_film WHERE date_debut_affiche = '". $_POST['projecSearch'] ."'";
  if ($limit > 0) {
    $sql .= ' LIMIT 0, :limit';
  }
  $request = $db->prepare($sql); 
  if ($limit > 0) { 
    $request->bindValue(':limit', $limit, PDO::PARAM_INT);
  }
  $request->execute();
  $datas = $request->fetchAll();
?>
<html>  
<head>
  <title>CineWorld</title>  
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <script src="script/hello.js"></script>
</head>
<body>
  <p> RESULTAT DE VOTRE RECHERCHE PAR DISTRIBUTEUR : </p>

  <?php $id = 0; if ($datas != NULL): 
      foreach($datas as $data): ?>
  <table>
    <td><?= $data["date_debut_affiche"]?> : </td>
    <td><?= $data["titre"]?></td>
    <p>-----------------------------</p> 
  </tr>
</table>
<?php $id++; endforeach; 
  else:  
    echo "Merci de saisir un genre de film , vous pouvez retrouver la liste des genres ici : ";
  endif;?>
  <a href='../infos/listeGenre.php'>Liste de genre</a>
</body>
</html>
<?php 
  }   
?>