<?php
include_once('../controller/database.php');
$limit = 0;
if (!empty($_POST['limit'])) {
  $limit = intval($_POST['limit']);
}
if (isset($_POST['submitDistr']))
{
  $sql = "SELECT tp_distrib.nom, tp_film.titre FROM tp_distrib, tp_film 
  WHERE nom = '". $_POST['searchDistrib'] ."' AND tp_film.id_distrib = 
  tp_distrib.id_distrib";
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
        <td><?= $data["nom"]?> : </td>
        <td> <?= $data["titre"] ?></td>
        <p>-----------------------------</p> 
      </tr>
    </table>
    <?php $id++; endforeach; 
    else:  
      echo "Merci de saisir un distributeur , vous pouvez retrouver la liste ici : ";
    endif;?>
    <a href='../infos/listeDistrib.php'>Liste de distributeur</a>
  </body>
  </html>
  <?php 
}   
?>
