  <?php
error_reporting(0);
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>

<style type="text/css">
	 .galerija {
	display: inline-block;
	
    
    margin-right: 250px;
		 padding-right: 55px;
	 }
	 
.galerija img
{
	
 width:auto;
	
 box-shadow:0px 0px 10px #cecece;
	
	
 -moz-transform: scale(0.7);
 -moz-transition-duration: 0.6s; 
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.7);
 
 -ms-transform: scale(0.7);
 -ms-transition-duration: 0.6s; 
}
.galerija img:hover
{
  box-shadow: 10px 10px 10px #dcdcdc;
 -moz-transform: scale(0.8);
 -moz-transition-duration: 0.6s;
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.8);
 
 -ms-transform: scale(0.8);
 -ms-transition-duration: 0.6s;
 
}
</style>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stil.css"/>
        <script type="text/javascript" src="js/jquery-1.11.0.js"></script> 
        <script type="text/javascript" src="js/skript.js"></script> 
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <meta charset="utf-8">
        <title>Kris kom - Galerija</title>
        <link rel="shortcut icon" href="img/logo.png"/>
        <meta name="description" content="Kris kom je metalostrugarska firma koja se bavi obradom svih vrsta metala kao i plastičnih materijala">
        <meta name="keywords" content="Kris, kom, metal, plastika, obrada, metalurgija, firma, galerija"/>
       
    </head>
	
    <body background="img/galerija.jpg" alt="Pozadina">
         <div id="omot">           
             <div id="header">
                <?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?><div class="logo"><a href="uloga.php"><img src="img/logob.png" alt="Logo"/></a></div><?php }?>
                <div class="navigation">
                    <ul class="lista1">
                       <?php error_reporting(0); if($_SESSION['uloga']=="" ){?>
						<li><a href="login.php">LOG IN</a></li><?php }?>
						<?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici") {?>
						<li><a href="usluge.php">USLUGE</a></li><?php }?>
						<?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>	
						<li><a href="galerija.php">GALERIJA</a></li><?php }?>
						<?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
                        <li><a href="kontakt.php">KONTAKT</a></li><?php }?>
						<?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
                        <li><a href="about.php">O AUTORU</a></li><?php }?>
						<?php if($_SESSION['uloga']=="admin"){?>
						<li><a href="panel.php">ADMIN PANEL</a></li><?php }?>
						<?php if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici"){?>
						<li><a href="login.php">LOG OUT</a></li><?php }?>
						
                    </ul>
                </div>
                <div class="forma">
                    <form action="search.html" id="formular">
                        <input type="text" id="tbSearch" name="tbSearch" placeholder="Pretraga" />
                        <input type="submit" name="btnSearch" id="btnSearch" value="Pretraži"/>
                    </form>
                </div>
             </div>
             <div id="naslov">
                <h2>Zavirite u naše radionice</h2>
             </div>
             <div id="lanac">
                <img src="img/lanac.png" alt="Lanac" />
             </div>
			 
              <?php
 include("konekcija.php");
 $query = "SELECT * FROM slika ";
 $rez = mysql_query($query) or die("Query nije izvrsen");

 while($r = mysql_fetch_array($rez))
 {
 echo "<div class=\"galerija\"><a class=\"fancybox\"
href=\"".$r['putanja']."\" rel=\"group\"><img src=\"".$r['putanja']."\"></a></div>";
	 
 }

?>
			 
			 
		</div>
    </body>
</html>