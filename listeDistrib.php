<?php
		include_once('../controller/database.php');

		$distrib = $db->query('SELECT nom FROM tp_distrib');

		while ($result = $distrib->fetch()) 
		{
			?>
			<strong>Nom du distributeur</strong> : <?php echo $result['nom']; ?><br />

			<?php
		}
		$distrib->closeCursor();
		?>
		<a href="../view/index.php">retour accueil</a>