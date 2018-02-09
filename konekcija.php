<?php 
	$konekcija = mysql_connect('PostgreSQL:5432','2319775','') or die('Greska pri komunikaciji sa serverom baze!');
	$baza = mysql_select_db('2319775_login', $konekcija) or die('Greska pri izboru baze');
?>