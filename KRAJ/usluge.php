<!doctype html>
 <?php
error_reporting(0);
@session_start();
$_SESSION['admin'];
$_SESSION['korisnik'];
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stil.css"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <meta charset="utf-8">
        <title>Kris kom - Usluge</title>
        <link rel="shortcut icon" href="img/logo.png"/>
        <meta name="description" content="Kris kom je metalostrugarska firma koja se bavi obradom svih vrsta metala kao i plastičnih materijala">
        <meta name="keywords" content="Kris, kom, metal, plastika, obrada, metalurgija, firma, usluga"/>
    </head>
     <body background="img/usluge.jpg" alt="Pozadina">
         <div id="omot1">           
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
                <h2>Usluge koje vršimo</h2>
             </div>
             <div id="lanac">
                <img src="img/lanac.png" alt="lanac"/>
             </div>
             <div id="prvi">
                <div class="slika1"><img src="img/u1.jpg" alt="Pozadina usluga"/></div>
                <div class="nazivu1">
                    <img src="img/nazivu.png" alt="Naziv usluge"/> 
                </div>
                <div class="tekst1"><p>Rezanje se sastoji u prodiranju reznog alata u materijal.U oštem slučaju razlikuju se koso i ortogonalno rezanje .Ako je pravac relativnog kretanja između materijala i obratka pod nekim uglom u odnosu na sečivo reznog alata  to je koso rezanje dok je ortogonalno rezanje specijalan slučaj kosog rezanja kada je pravac relativnog kretanja između alata i obratka normalan na sečivo reznog alata.
Rezanje se obavlja pri strogo određenoj kinematici relativnog kretanja između alata i obratka,gde se definišu glavno i pomoćno kretanje .Glavno kretanje određuje brzinu kretanja,a izvode ga alat ili obradak i može biti kružno ili pravolinijsko.Pomoćno kretanje takođe može biti kružno ili pravolinijsko.Glavno i pomoćno kretanje u određenoj kinematici kretanja alata i obradka definišu metod obrade.Jedan metod obrade može imati samo jedno glavno i jedno ili više pomoćnih kretanja.Metodi su: struganje, rendisanje, bušenje, glodanje i brušenje. Cena ove usluge je 500e.</p>
                </div>
             </div>
             <div id="drugi">
                <div class="slika1"><img src="img/u2.jpg" alt="Pozadina usluga"/></div>
                <div class="nazivu2">
                    <img src="img/nazivu2.png" alt="Naziv usluge"/> 
                </div>
                <div class="tekst1"><p>Bušenje je koso rezanje. Pri bušenju oba kretanja izvodi alat-zavojna burgija.Glavno obrtno kretanje i pomoćno pravolinijsko kretanje nalaze se u kinematičkoj vezi.
 Pri bušenju burgija trpi visoka naprezanja zbog dejstva otpora rezanja,značajnih dopunskih deformacija strugotine i trenja između strugotine i površine otvora.Pri bušenju na sečivo reznog alata deluje neki rezultujući otpor rezanja koji se može razložiti na tri komponente.Za svako sečivo posebno,postoje po tri komponente otpora.Bušenje u širem smislu podrazumeva:
 
1)bušenje u užem smislu reči-izrada rupa i otvora
   alat:burgija
2)proširivanje-povećanje prečnika postojećih rupa i otvora
   alat:proširivač
3)razvrtanje-fina obrada unutrašnjih strana rupa i otvora
   alat:razvrtač
4)upuštanje-obrada ulaza rupa i otvora
   alat:upuštač
5)zabušivanje-izrada plitkih rupa sa ciljem centriranja
   alat:zabušivač. Cena ove usluge je 350e.</p>
                </div>
             </div>
             <div id="treci">
                <div class="slika1"><img src="img/u3.jpg" alt="Pozadina usluga"/></div>
                <div class="nazivu3">
                    <img src="img/nazivu3.png" alt="Naziv usluge"/> 
                </div>
                <div class="tekst1"><p>Pri glodanju, koso rezanje nastaje pri radu valjkastim glodalima sa zavojnim zubima, a ortogonalno pri glodanju sa pravim zubima. Glavno obrtno kretanje izvodi višesečni alat-glodalo,a pomoćno pravolinijsko kretanje izvodi obradak.S obzirom na mogući smer kretanja alata i obratka razlikuju se istosmerno i suprotnosmerno glodanje. Kod istosmernog glodanja brzina rezanja i brzina pomoćnog kretanja imaju isti smer.U ovom slučaju debljina strugotine se smanjuje od neke najveće vrednosti do nule ,kada zub glodala napušta materijal.Kod suprotnosmernog glodanja debljina strugotine raste od nule do neke najveće debljine.Na početku zadiranja zuba glodala u materijal nastaje prethodno klizanje,što kvari kvalitet obrađene površine.Iako pokazuje izvesna preimućstva u odnosu na suprotnosmerno,istosmerno glodanje se manje primenjuje. Pri glodanju, u opštem slučaju,učestvuje više zuba glodala istovremeno u procesu rezanja.Cena ove usluge je 400e.</p>
                </div>
             </div>
         </div>
    </body>
</html>