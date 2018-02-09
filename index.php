
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stil.css"/>
        <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script language="JavaScript" src="js/konverzija.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/javascript" src="js/slider.js"></script> 
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <meta charset="utf-8">
        <title>Kris kom</title>
        <link rel="shortcut icon" href="img/logo.png"/>
        <meta name="description" content="Kris kom je metalostrugarska firma koja se bavi obradom svih vrsta metala kao i plastičnih materijala">
        <meta name="keywords" content="Kris, kom, metal, plastika, obrada, metalurgija, firma"/>
    </head>
    <body>
         <div id="omot">
            <div id="header">
                <?php error_reporting(0);  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici" || $_SESSION['uloga'] == "") {?> <div class="logo"><a href="index.php"><img src="img/logob.png" alt="Logo"/></a></div><?php }?>
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
						<?php  if($_SESSION['uloga']=="admin" || $_SESSION['uloga'] == "korisnici" || $_SESSION['uloga'] == "") {?>
                        <input type="text" id="tbSearch" name="fajl" placeholder="Pretraga"  />
                        <input type="submit" name="btnSearch" id="btnSearch" value="Pretraži"  />
						<?php }?>
                    </form>
					
                </div>
             </div>
             <div id="slika">
                    <div class="levos"><a href="#" class="control_prev"><img src="img/strelal.png" alt="Strelica u levo"/></a></div>
                    <div id="tekst">
                        <div id="slider">
                            <ul>
                                <li><img src="img/mismo.png" alt="Naziv firme"/></li>
                                <li><img src="img/mismo1.png" alt="Naziv firme"/></li>
                                <li><img src="img/mismo2.png" alt="Naziv firme"/></li>
                            </ul>
                        </div>
                    </div>
                    <div id="srafovi">
                        <img class="krug" src="img/srafv.png" alt="Sraf"/>
                        <img class="krug1" src="img/srafv.png" alt="Sraf"/>
                        <img class="krug2" src="img/srafv.png" alt="Sraf"/>
                    </div>
                    <div class="desnos"><a href="#" class="control_next"><img src="img/strelad.png" alt="Strelica u desno"/></a></div>
                </div>
             <div id="dole">
                <ul>
                    <li><img src="img/levo.png" alt="Istorijat"/></li>
                    <li><h5>ISTORIJAT</h5></li>
                    <li><a href="Dokumentacija.pdf"><p class="dok">DOKUMENTACIJA</p></a><img src="img/sredina.png" alt="Lanac"/></li>
                    <li><h5>O NAMA</h5></li>
                    <li><img src="img/desno.png" alt="O nama"/></li>
                 </ul>
                 <div id="levop">
                    <p>Od male zanatske radionice osnovane daleke 1967. god. koja se bavila kovačkim uslugama i bravarijom u dvorištu iza stare kuće pa sve do danas, ova firma se konstantno razvijala. Sam početak je bio težak kao i svaki drugi. Krenulo se sa malim obradama i sa malo mašina. Obrade su bile jednostavne i pretežno su se odvijale na materijalima od metala. Ova firma je porodično nasleđe jer je osnovana od strane Živorada Milovića. Ime firme je nastalo iz korena imena njegovog sina, Kristijana Milovića. Kroz godine firma je rasla i napredovala, da bismo 2001. god. premestili naše postrojenje u Novu Pazovu. Od 2004. god. firma je postala stalni izvoznik naših proizvoda na inostrano tržište.</p>
                 </div>
                 <div id="desnop">
                    <p>Danas KRIS KOM poseduje impozantan mašinski park koji čini preko 20 mašina, i to mašine za: struganje, glodanje, bušenje, razvrtanje, dubljenje, kovanje i zavarivanje. Specijalnost firme KRIS KOM su raznovrsnost usluga-izrade pojedinačnih i maloserijskih delova iz oblasti održavanja. Postoji niz projekata na kojima firma radi kao što su transportni sistemi, sistemi prenosa snage, prehrambena i laboratorijska oprema, delovi iz auto industrije, delovi poljoprivredne mahanizacije, sistema konustrukcija, elementi raznih postrojenja i utenzilija.
Danas, 2016 godine radimo sa ozbiljnijim firmama i specijalizovali smo se za nove delove koje do sada nismo radili.</p>
                 </div>
             </div>
        </div>
    </body>
</html>