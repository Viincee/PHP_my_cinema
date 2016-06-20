<?php
include_once('../controller/database.php');
$search = '';
if (!empty($_POST['search'])) {
  $search = $_POST['search'];
}

$limit = 0;
if (!empty($_POST['limit'])) {
  $limit = intval($_POST['limit']);
}
if ($search)
{
  $sql = 'SELECT id_film, titre, date_debut_affiche, duree_min FROM tp_film WHERE titre LIKE :search';
  if ($limit > 0) {
    $sql .= ' LIMIT 0, :limit';
  }
  $request = $db->prepare($sql); 
  if ($limit > 0) {
    $request->bindValue(':limit', $limit, PDO::PARAM_INT);
  }
  $request->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
  $request->execute();
}
else
{ 
  include_once('../infos/ListeFilm.php');
}
?>
<html>
<head>
  <title></title>
</head>
<body>
   <div id="ListeFilm">
    <?php while(isset($request) && ($film = $request->fetch())): ?>
      <p class="result">Titre: <?= $film['titre'] ?></p>
      <p class="result">Annee : <?= $film['date_debut_affiche'] ?></p>
      <p class="result">Duree en min : <?= $film['duree_min'] ?></p>  
      <p class="avis">Ajouter son avis</p>
      <p>-----------------------------</p>  
    <?php endwhile; ?> 
</body>
</html>
