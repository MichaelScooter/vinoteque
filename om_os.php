<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Om Vinoteque | Historien om vores unikke vinbar</title>
    <meta name="description" content="Opdag historien bag Vinoteque, en eksklusiv vinbar ombord på vores skib. Oplev den perfekte kombination af luksus, smag og havudsigt. Læs mere nu!">

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <?php include "includes/head.php"; ?>


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include "includes/navigation.php"; ?>

<!-- Her skal sidens indhold ligge -->

<!-- Hero Sektion -->
<div class="container-fluid g-0 d pt-5">
    <div>
        <div class="position-relative">
            <img src="images/marittima_vinoteque_mobil.webp" alt="Dyk ned i Vinoteques historie og kulturelle arv gennem tiderne" class="w-100 d-lg-none pt-5">
            <img src="images/marittima_vinoteque.webp" alt="Opdag historien bag Vinoteque og dets unikke traditioner" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Vinoteque Marittima</h1>
                    <p class="lead text-white">Historien om skibet og vinbaren</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100">
</div>

<!-- Historien -->
<div class="container">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-lg-6 pb-5 pe-md-3">
            <h5 class="text-primary">Historien</h5>
            <h2>Marittima, Porto de Morgan og nu Vinoteque Marittima</h2>
            <p class="lead pb-3">Fra juli 2021 er Marittima omdøbt til Vinoteque Marittima med ny hjemstavn, Nykøbing Falster.
                Her skal hun fungere som Vin og Kaffebar, fest lokale og med events hele året rundt.
            </p>
            <p>
                ”Damen” er fra 1958 bygget på Husumer Werft, til at sejle biler og passagere til Helgoland. Efter flere års tjeneste, bliver hun købt af et spansk rederi, der sejlerde cruise sejlads ved Tenerife og Gran Canaria. Efter en årrække, bliver sejladsen udvidet til også at omfatte Middelhavet, nærmere bestemt Mallorca.
            </p>
            <p>
                I 1993 køber Rederei Bötcher skibet, laver en stor ombygning og omdøber hende til Marittima. Skibet sejler bl. a som ”smørbåd” til Danmark, da dette ophører bliver den nye opgave, som party båd og turistbåd i Trave kanalerne omkring Lübeck og i Østersøen.
            </p>
            <a href="kontakt.php" class="btn btn-secondary text-white">Kontakt</a>
        </div>
        <div class="col-12 col-lg-6">
            <img src="images/vibaren_Jes_Jonigk.webp" alt="Jes Jonigk Vinoteque - Historien om vores unikke vinbar på skibet" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3 pt-md-0">
            <h3>Hvem står bag Vinotequet?</h3>
            <p>Vinotequet er en ide opstået af vinhandler Jes Jonigk, fra Marius Mortensens Eftf. Det var aldrig meningen at byens Vinoteque skulle ligge på vandet, det var en ren tilfældighed.</p>
            <p>Ejerkredsen er udvidet til 40 investorer i selskabet Marius & Friends, disse ejer selve skibet og med deres investering for øje, er det et ønske at åbne og udvikle Nykøbing F Havn.</p>
            <p>Den daglige drift står Marius Mortensens Eftf for. I det daglige bedre kendt som Marius ( vinhandlen ) og Thea ( delikatesser, kaffe og The ). Marius og Thea er byens førende med vin, tobak, spiritus, delikatesser, kaffe og et stort the udvalg. Marius Mortensens Eftf er blandt verdens 10 ældste Tobaks og Vinforretninger – Born 1865 and still going strong.</p>
            <p>Drømmen om at åbne en god kvalitativ vin og kaffebar er hermed blevet til. Nogen tænker det, andre drømmer det – VI GØR DET .</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-md-0 pt-lg-0">
            <h3>Vin, Events og Festlokale</h3>
            <p>Vinotequet vil have et stort aktivitets program, der vil året rundt være masser af smagninger, om det er i øl, vin, rom/gin så har vi ekspertisen.</p>
            <p>Vinotequet i sig selv, byder på et stort udvalg i vine, øl, drinks kaffe og the. </p>
            <p>Der udover bliver der en masse events, såsom poker / casino aftener, svensk skalddyrs buffet på kajen, danse fester, strik og drik.... og og og.</p>
            <p>På øverste etage på vinotequet er der indrettet et stort og flot fest lokale, der er plads til 70 gæster og kan lejes til hvilket formål, du nu måtte ønske – om det er fødselsdag, jubilæum, konfirmation, modeshow eller fernisering, så er det kun fantasien der sætter grænsen.</p>
            <p>Hvis du ønsker mere info kontakt : vinoteque-m@rius.dk.</p>
            <p>Dog kan vi love dig intet mindre end byens bedste udsigt, til din happening</p>
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100">
</div>

<!-- Video Sektion -->

<div class="container-fluid bg-farve3">
    <div class="container py-5">
        <div class="row py-lg-5 d-flex align-items-center text-center text-md-start bg-farve3">
            <div class="col-12 col-lg-6 pb-5 pe-md-3">
                <h5 class="text-primary">Video 2 min.</h5>
                <h2>En kort præsentationsvideo<br>med Jes Jonigk</h2>
                <p class="lead pb-3">Se lidt fra skibet og hør om nogle af de forhåbninger Jes har vedr. gæsternes oplevelser på Vinoteque.</p>
                <button class="playButton btn-link text-decoration-none text-white" onclick="document.getElementById('video').play()">Afspil video</button>
            </div>
            <div class="col-12 col-lg-6">
                <video id="video" width="600" height="600" controls poster="images/praesentationsbillede_vinotque.webp">
                    <source src="video/praesentationsvideo_vinoteque.webm" type="video/webm">
                    <source src="video/praesentationsvideo_vinoteque.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>



<!-- Billede af Skibet -->
<div class="container-fluid fixedBaggrund vh-50 d-flex justify-content-center align-items-center py-5">
    <div class="row">
        <div class="col-12 text-white text-center py-lg-5">
            <h5>Skibet</h5>
            <h2>Vinoteque Marittima</h2>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <img src="images/skibet_vinoteque_marittima.webp" alt="" class="img-fluid v-100 smaller-image">
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

