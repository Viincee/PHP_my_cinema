<?php
  include_once('../controller/database.php');
  $limit = 0;
if (!empty($_POST['limit'])) {
  $limit = intval($_POST['limit']);
}
if (isset($_POST['submitHisto']))
{
  $sql = "SELECT *,tp_abonnement.nom AS 'abo_nom', tp_fiche_personne.nom AS 'nom_person' FROM tp_historique_membre INNER JOIN tp_membre ON tp_historique_membre.id_membre = tp_membre.id_membre INNER JOIN tp_fiche_personne ON tp_fiche_personne.id_perso = tp_membre.id_fiche_perso INNER JOIN tp_film ON tp_film.id_film = tp_historique_membre.id_film INNER JOIN tp_abonnement ON tp_membre.id_abo = tp_abonnement.id_abo WHERE tp_fiche_personne.nom = '". $_POST['histoSearch'] ."' ORDER BY tp_historique_membre.date ASC";
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
  <p> RESULTAT DE VOTRE RECHERCHE POUR LE MEMBRE <?= $_POST['histoSearch'] ?> : </p>

  <?php $id = 0; if ($datas != NULL): 
      foreach($datas as $data): ?>
  <table>
    <p>Titre du film vue : <?= $data["titre"]?></p>
    <p>Date a la quel le film a etait vue : <?= $data["date"]?></p>
    <p>-----------------------------</p> 
  </tr>
</table>
<?php $id++; endforeach; 
  else:  
    echo "Merci de saisir un nom ou prenom , vous pouvez retrouver la liste de nos membres ici : ";
  endif;?>
  <a href='../infos/listeMembre.php'>Liste des membres</a>
</body>
</html>
<?php 
  }   
?>