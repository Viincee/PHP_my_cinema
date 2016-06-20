<?php
		include_once('../controller/database.php');

		$distrib = $db->query('SELECT nom FROM tp_genre');
		?>
			<a href="../view/index.php">REVENIR A L'ACCUEIL</a>
			<?php
		while ($result = $distrib->fetch()) 
		{
			?>
			<strong>Nom des genres disponnible</strong> : <?php echo $result['nom']; ?><br />

			<?php
		}
		$distrib->closeCursor();
		?>
		