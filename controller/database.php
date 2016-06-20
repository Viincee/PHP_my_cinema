<?php
try
	{
	  $db = new PDO('mysql:host=localhost;dbname=my_cinema;charset=utf8', 'root', '');
	}
	catch (Exeception $error)
	{
		die('xd ta fait nimp : ' . $error->getMesage());
	}

