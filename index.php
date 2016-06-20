<html>  
<head>
  <title>CineWorld</title>  
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <script src="script/hello.js"></script>
</head>
<body>
  <header>
      <div id="contener">
      <strong>MY_CINEMA</strong>
    <form method="post" action="../view/resultSearch.php">
    <input type="text" name="search" id="search" placeholder="Rechercher un film" id="search" value="<?php $search ?>">
    <input type="text" name="limit" id="limit" placeholder="nombre d'affichage..." value="<?php $limit ?>" >
    <button type="submit">CHERCHER UN FILM</button> <a href="../infos/listeFilm.php">Manque d'inspiration ? Voici la liste de nos films ! (Clique)</a>
    </form>
    <form method="post" action="../model/genre.php">
    <input type="text" name="genreSearch" id="genreSearch" placeholder="Rechercher par genre...">
    <input type="text" name="limit" id="limit" placeholder="nombre d'affichage..." value="<?php $limit ?>" >
    <button type="submit" name="submitGenre">CHERCHER UN GENRE</button>
    </form>
    <form method="post" action="../model/distrib.php">
    <input type="text" name="searchDistrib" id="searchDistrib" placeholder="Rechercher par distrib...">
    <input type="text" name="limit" id="limit" placeholder="nombre d'affichage..." value="<?php $limit ?>" >
    <button type="submit" name="submitDistr">CHERCHER UN DISTRIBUTEUR</button>
    </form>
    <form method="post" action="../model/histo.php">
      <input type="text" name="histoSearch" id="histoSearch" placeholder="Voir l'historique d'un membre...">
      <input type="text" name="limit" id="limit" placeholder="nombre d'affichage..." value="<?php $limit ?>">
      <button type="submit" name="submitHisto">VOIR HISTORIQUE MEMBRE</button> <a href="../infos/ListeMembre.php">Voir la liste de nos membres</a>
    </form>
    <form method="post" action="../model/projection.php">
      <input type="text" name="projecSearch" id="projecSearch" placeholder="format : 1990-01-01">
      <input type="text" name="limit" id="limit" placeholder="nombre d'affichage..." value="<?php $limit ?>">
      <button type="submit" name="submitProjec">CHERCHER UN FILM PAR DATE DE PROJECTION</button>
    </form> 
</header>
    <div id="seeAboAndReduc">
    <form method="post" id="formSub" action="../model/subsribe.php">
    <input type="submit" name="subcribe" id="sendSub" value="Voir nos abonnements<?php $subcribe ?>">
    </form>
    <form method="post" action="../model/reduction.php">
      <input type="submit" name="reduction" id="seeReduc" value="Voir nos reduction<?php $reduction ?>">
    </form>
      </div>
<div id="contenerMID">
  <form></form>
</div>

</body>
</html>
