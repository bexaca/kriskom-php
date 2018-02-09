
<!DOCTYPE html>
<?php
error_reporting(0);
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>
<html>
    <head>
        <script type="text/javascript" src="js/skript.js"></script> 
        <link rel="stylesheet" type="text/css" href="stil.css"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <title>Kris kom - O Autoru</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="shorcut icon" href="img/logo.png"/>
        <meta name="description" content="Kris kom je metalostrugarska firma koja se bavi obradom svih vrsta metala kao i plastičnih materijala">
        <meta name="keywords" content="Kris, kom, metal, plastika, obrada, metalurgija, firma, autor, ICT"/>
		<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
    </head>
    <body background="img/about.jpg" alt="Pozadina">
        <div id="omot6">
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
                <div id="sadrzaj6">
                    <div class="levo">
                        <img src="img/isidora.png" alt="Fotografija autora"/>
                    </div>
                    <div class="desno">
                        <h2>O Autoru</h2>
                        <p>Moje ime je Isidora Nikolić. Živim u Novoj Pazovi. Rođena sam 26.06.1997. Srednjoškolsko obrazovanje sam stekla u Vazduhoplovnoj akademiji. Ovaj sajt je projekat za kurs "Web programiranje" na Višoj ICT školi koju trenutno pohađam.</p>
                        <p><strong>E-mail:</strong> isidora.nikolic.167.15@ict.edu.rs</p>
                        <div id="poll">
<h2>Da li vam se dopao moj sajt?</h2>
<form>
	<p>Da:
<input type="radio" name="vote1" value="0" onclick="getVote(this.value)"></p>
	<p>Ne:
<input type="radio" name="vote2" value="1" onclick="getVote(this.value)"></p>
	                       

</form>
</div>
                    </div>
                </div>
           <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Pratite nas</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="http://www.facebook.com"><img src="img/facebook.png"/></a>
    <a href="http://www.twitter.com"><img src="img/twitter.png"/></a>
    <a href="http://www.pinterest.com"><img src="img/pinterest.png"/></a>
    <a href="http://www.instagram.com"><img src="img/instagram.png"/></a>
  </div>
</div>
            <div id="futer">
                <p>&copy; 2016 Isidora Nikolić, Nova Pazova, Serbia <a href="http://www.ict.edu.rs/">ICT Visoka škola</a><a href="rssfeed.xml"><img src="img/rss.png" alt="Piktogram RSS"/></a><a href="rssfeed1.xml"><img src="img/rss1.png" alt="Piktogram RSS"/></a><a href="sitemap.xml">SITEMAP</a></p>
                
            </div>
        </div>
    </body>
</html>




    


    