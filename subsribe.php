<?php
include_once('../controller/database.php');
	$subscribe = $db->prepare('SELECT nom, prix, resum FROM tp_abonnement ORDER BY prix ASC');
		$subscribe->execute();
		?>
		<html>  
<head>
  <title>CineWorld</title>  
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <script src="script/hello.js"></script>
</head>
	<?php while(isset($subscribe) && ($abonnement = $subscribe->fetch())): ?>
      <p class="subscribe">Name: <?= $abonnement['nom'] ?></p>
      <p class="subscribe">Price : <?= $abonnement['prix'] ?></p>
      <p class="subscribe">Resum : <?= $abonnement['resum'] ?></p>	
      <?php endwhile; ?>

