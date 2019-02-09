<?php
error_reporting(0);
    if(isset($_REQUEST['btnposalji']))
    {
		include ('konekcija.php');
      $ime = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $pitanje = $_REQUEST['message'];
     
      
     
                  
        $upit_upis = "INSERT INTO kontakt VALUES('', '$ime', '$email', '$pitanje')";
        $rez_upis = mysql_query($upit_upis, $konekcija);
        if(!$rez_upis)
        {
          echo "Greska prilikom upisa podataka! ".mysql_error();
        }
        else
        {
          header("location:kontakt1.php");
        }
      }
    
    
  
    
  ?>
<?php
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stil.css"/>
        <script type="text/javascript" src="js/skript1.js"  charset="utf-8"></script>
        <link rel="stylesheet" type="text/css" href="notify.css"  charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <meta charset="utf-8">
        <title>Kris kom - Kontakt</title>
        <link rel="shortcut icon" href="img/logo.png"/>
        <meta name="description" content="Kris kom je metalostrugarska firma koja se bavi obradom svih vrsta metala kao i plastičnih materijala">
        <meta name="keywords" content="Kris, kom, metal, plastika, obrada, metalurgija, firma, kontakt, telefon, email"/>
    </head>
    <body background="img/kontakt.jpg" alt="Pozadina">
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
             <div id="cistac">
             </div>
             <div id="naslovk">
                 <h2>Voleli bismo da Vam pomognemo </br> Pošaljite nam pitanje</h2>
             </div>
               <div id="osnova">
                <div id="levo">
                    <form method="POST" action="kontakt.php." id="forma" name="forma">
                        <table>
                            <tr><td><input type="text" name="name" id="tbime" placeholder="Vaše ime i prezime"/></td></tr>
                            <tr><td><input type="text" name="email" id="tbemail" placeholder="Vaš email"/></td></tr>
                            <tr><td><textarea type="text" name="message" id="tbpitanje" placeholder="Vaše pitanje"></textarea></td></tr>
                            <tr><td><input type="submit" name="btnposalji" id="btnposalji" value="POŠALJI"  onclick="return  validate(); "/></td></tr>
                        </table>
						
                    </form>
						
                </div>
                   
                <div id="desno">
                    <form>
                        <table>
                            <tr>
                                <td><img src="img/adresa.png" alt="Piktogram adrese"/></td>
                                <td><p>Adresa</p></td>
                                <td><p>Poljski put 22</p></td>
                            </tr>
                            <tr>
                                <td><img src="img/telefon.png" alt="Piktogram telefona"/></td>
                                <td><p>Telefon</p></td>
                                <td><p>064/275 57 63</p></td>
                            </tr>
                            <tr>
                                <td><img src="img/email.png" alt="Piktogram email"/></td>
                                <td><p>Email</p></td>
                                <td><p>kriskom@gmail.com</p></td>
                            </tr>
                        </table>
                    </form>
                </div>
                </div>
                <div id="cistac">
                     </div>
                <div id="naslov2">
                    <h2>Pronađite nas</h2>
                </div>
                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.461647036979!2d20.21860966634273!3d44.954610973884456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a5ecd6a526b3b%3A0x705cc14f7eed902!2z0J_QvtGZ0YHQutC4INC_0YPRgiwg0J3QvtCy0LAg0J_QsNC30L7QstCwIDIyMzMw!5e0!3m2!1ssr!2srs!4v1480606802771" width="1100" height="450" frameborder="0" style="border:8px solid #231f20; border-radius:8px"  allowfullscreen></iframe>
                </div>
                <script src="js/jquery-1.11.0.js"></script>
                <script src="js/notify.js"></script>
                <script src="js/prettify.js"></script>

    </body>
</html>