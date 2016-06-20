<?php
		include_once('../controller/database.php');

?>
		<a href="../view/index.php">REVENIR A L'ACCUEIL</a></br>
		<?php
		$distrib = $db->query('SELECT titre FROM tp_film');

		while ($result = $distrib->fetch()) 
		{
			?>
			<strong>Titre du film</strong> : <?php echo $result['titre']; ?><br />

			<?php
		}
		$distrib->closeCursor();
		?>
		