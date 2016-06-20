<?php
		include_once('../controller/database.php');

		$distrib = $db->query('SELECT nom, prenom FROM tp_fiche_personne');

		?><a href="../view/index.php">retour accueil</a><br />
		<?php
		while ($result = $distrib->fetch()) 
		{
			?>
			<strong>Nom du membre</strong> : <?php echo $result['nom']; ?><br />
			<strong>Prenom du membre</strong> : <?php echo $result['prenom'] ?><br />
			<p>----------------------------</p>

			<?php
		}
		$distrib->closeCursor();
		?>
		