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
            <img src="images/vinbar_vinoteque.jpg" class="w-100">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Vinoteque Marittima
                    </h1>
                    <p class="lead text-white">Byder på et stort udvalg i vine, øl, drinks, kaffe og the.</p>
                    <div>
                        <a href="vej.php" class="btn btn-primary text-white btn-link ms-lg-2">Find Vej</a>
                        <a href="events.php" class="btn btn-secondary text-white btn-link ms-lg-2">Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Velkommen Sektion -->
<div class="container">
    <div class="row">
        <div class="text-center">
            <h5 class="text-primary">Velkommen om bord</h5>
            <h2>Nyd et glas vin og den fantastisk udsigt</h2>
            <p class="lead">Vinotequet vil have et stort aktivitets program, der vil året rundt være masser af smagninger, <br>om det er i øl, vin, rom/gin så har vi ekspertisen.

                <br><br>Derudover arrangere vi forskellige events i løbet af året, såsom koncerter og sønderjysk kagebord. <br>Sidst kan nævnes, at vi har et stort og flot festlokale til udlejning.</p>
        </div>
        <div class="col-4 py-3"><img src="images/vinbarens_tapas.jpg" alt="" class="img-fluid h-100 rounded-3"></div>
        <div class="col-4 py-3"><img src="images/vinoteque_vinbar.jpg" alt="" class="img-fluid h-100 rounded-3"></div>
        <div class="col-4 py-3"><img src="images/vinbarens_vin.jpg" alt="" class="img-fluid h-100 rounded-3"></div>
    </div>
</div>

<!-- Vinen Sektion -->
<div class="container py-5">
    <div class="row py-lg-5 d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
            <h5 class="text-primary">Vinen</h5>
            <h2>Vinen er fra én af verdens <br>10 ældste vinforretninger</h2>
            <p class="lead pb-3">Den lokale vinforretning Marius Mortensens Eftf er blandt verdens 10 ældste Tobaks og Vinforretninger – Born 1865 and still going strong – Forretningen ejes af Jes Jonigk,
                der også er en del Vinoteque Marittimas ejerkreds.</p>
            <a href="om_os.php" class="btn btn-secondary text-white btn-link ms-lg-2">Læs om Vinoteque</a>
        </div>
        <div class="col-12 col-md-6">
            <img src="images/vinbarens_vine2.jpg" alt="" class="img-fluid h-100">
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Udsigten fra Vinoteque -->
<div class="bg-info hero position-relative">
    <img src="images/vinbar_udsigt.jpg" class="w-100 h-100">

    <div class="position-absolute mt-3 mt-lg-5 pt-5 top-0 start-50 translate-middle text-center text-white">
        <h5 class="pt-md-3 pt-lg-5 mt-md-3 mt-lg-5">Udsigten</h5>
        <h2>Vinoteque Marittima</h2>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Vinen Festlokale -->
<div class="container">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
            <h5 class="text-primary">Festlokale</h5>
            <h2>Hold fest med en <br>skøn udsigt</h2>
            <p class="lead pb-3">På øverste etage på Vinoteque er der indrettet et stort og flot fest lokale, der er plads til 70 gæster og kan lejes til hvilket formål, du nu måtte ønske.</p>
            <button class="btn btn-secondary text-white">Kontakt</button>
        </div>
        <div class="col-12 col-md-6">
            <img src="images/vinbar_festlokale.jpg" alt="" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Testimonials -->
<div class="container-fluid py-5 text-center bg-farve3">
    <h2 class="mb-4 text-uppercase pt-lg-5">Referencer</h2>
    <p class="mb-4 lead">Udtalelser fra tidligere gæster om deres oplevelser på Vinoteque Marittima</p>


    <div id="carouselExampleCaptions" class="carousel slide text-center p-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="rounded-circle shadow-1-strong mb-4" src="images/gammel2.jpg" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Mogens Mortensen</h5>
                        <p class="text-primary">Tidligere vognmand</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Jeg er stor fan af Milde og Vilde viser.
                            Deres musik bringer folk sammen, og uanset hvordan éns dag har været, så løfter de humøret med deres musik, man kan synge med på.
                            Deres forskellige fortolkninger af sangene giver også lidt nyt liv til klassikerne.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="images/gammel3.jpg" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Gerda Haagensen</h5>
                        <p class="text-primary">Revy Entusiast</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Jeg var lidt skeptisk omkring at bruge min eftermiddag på sang efter opfordring fra konen.
                            Vi endte med at deltage aktivt og blev med det samme en del af fællesskabet.
                            Nu skal vi afsted på fredag for 4. gang - kan klart anbefales!
                            Også selvom man måske ikke har den helt store sangstemme.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="images/Gammel1.jpg" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Inger Frederiksen</h5>
                        <p class="text-primary">Pensioneret</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Milde og Vilde Viser er så gode. Jeg har altid følelserne helt ude på tøjet, de gange jeg har deltaget til deres koncerter, da deres musik er så genkendelig og vækker så mange minder.
                            Jeg kan også godt lide at de skiller sig lidt ud - og ikke er som en jukeboks.
                            Der må gerne være lidt nyt engang i mellem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<!-- Kommende Events -->
<div class="container-fluid p-lg-5 fullscreen-bg">
    <h2 class="text-center text-white mt-lg-3 pt-5">Kommende events</h2>
    <div class="row d-flex justify-content-center text-center px-lg-5 pt-lg-5">
        <div class="col-6 col-lg-3">
            <div class="bg-white">
                <h5 class="text-primary">31</h5>
                <h6 class="text-muted">Februar</h6>
            </div>
            <div>
                <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                <h4 class="text-white pt-lg-3">øl<br>Smagning</h4>
                <h5 class="text-white py-lg-3">195,- pr. person</h5>
                <img src="images/oel-smagning-vinbaren.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="bg-white">
                <h5 class="text-primary">31</h5>
                <h6 class="text-muted">Februar</h6>
            </div>
            <div>
                <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                <h4 class="text-white pt-lg-3">Sønderjysk<br>Kagebord</h4>
                <h5 class="text-white py-lg-3">245,- pr. person</h5>
                <img src="images/kagebuffet-vinbaren.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
            </div>
        </div>
        <div class="col-6 col-lg-3 pt-5 pt-lg-0">
            <div class="bg-white">
                <h5 class="text-primary">31</h5>
                <h6 class="text-muted">Februar</h6>
            </div>
            <div>
                <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                <h4 class="text-white pt-lg-3">Gin<br>Smagning</h4>
                <h5 class="text-white py-lg-3">245,- pr. person</h5>
                <img src="images/gin-smagning-vinbaren.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
            </div>
        </div>
        <div class="col-6 col-lg-3 pt-5 pt-lg-0">
            <div class="bg-white">
                <h5 class="text-primary">31</h5>
                <h6 class="text-muted">Februar</h6>
            </div>
            <div>
                <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                <h4 class="text-white pt-lg-3">Jazz<br>Koncert</h4>
                <h5 class="text-white py-lg-3">295,- pr. person</h5>
                <img src="images/jazz-koncert-vinbaren.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
            </div>
        </div>


    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
