<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Montserrat:wght@300;400&display=swap');
    </style>


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
            <img src="images/marittima_vinoteque.jpg" class="w-100">
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
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100"></div>
</div>

<!-- Historien -->
<div class="container">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
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
            <a href="kontakt.html" class="btn btn-secondary text-white">Kontakt</a>

        </div>
        <div class="col-12 col-md-6">
            <img src="images/vibaren_Jes_Jonigk.jpg" alt="" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Hvem står bag Vinotequet?</h3>
            <p>Vinotequet er en ide opstået af vinhandler Jes Jonigk, fra Marius Mortensens Eftf. Det var aldrig meningen at byens Vinoteque skulle ligge på vandet, det var en ren tilfældighed.</p>
            <p>Ejerkredsen er udvidet til 40 investorer i selskabet Marius & Friends, disse ejer selve skibet og med deres investering for øje, er det et ønske at åbne og udvikle Nykøbing F Havn.</p>
            <p>Den daglige drift står Marius Mortensens Eftf for. I det daglige bedre kendt som Marius ( vinhandlen ) og Thea ( delikatesser, kaffe og The ). Marius og Thea er byens førende med vin, tobak, spiritus, delikatesser, kaffe og et stort the udvalg. Marius Mortensens Eftf er blandt verdens 10 ældste Tobaks og Vinforretninger – Born 1865 and still going strong.</p>
            <p>Drømmen om at åbne en god kvalitativ vin og kaffebar er hermed blevet til. Nogen tænker det, andre drømmer det – VI GØR DET .</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
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

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100"></div>
</div>

<!-- Billed af skib -->
<div class="bg-info hero position-relative pt">
    <img src="images/vinoteque_marittima.jpg" class="w-100 h-100">

    <div class="position-absolute mt-3 mt-lg-5 pt-5 top-0 start-50 translate-middle text-center text-white">
        <h5 class="pt-md-3 pt-lg-5 mt-md-3 mt-lg-5">Udsigten</h5>
        <h2>Vinoteque Marittima</h2>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

