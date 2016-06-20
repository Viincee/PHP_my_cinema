<?php
	include_once('../controller/database.php');
	$reduction = $db->prepare('SELECT nom, pourcentage_reduc FROM tp_reduction');
		$reduction->execute();
		?>
		<html>  
	<head>
  <title>CineWorld</title>  
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <script src="script/hello.js"></script>
</head>
	<?php while(isset($reduction) && ($reduc = $reduction->fetch())): ?>
      <p class="subscribe">Name: <?= $reduc['nom'] ?></p>
      <p class="subscribe">Price : <?= $reduc['pourcentage_reduc'] ?></p>      
      <?php endwhile; ?>