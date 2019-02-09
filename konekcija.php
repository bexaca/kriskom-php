<?php 
	$konekcija = mysql_connect('localhost','root','') or die('Greska pri komunikaciji sa serverom baze!');
	$baza = mysql_select_db('test1', $konekcija) or die('Greska pri izboru baze');
?>