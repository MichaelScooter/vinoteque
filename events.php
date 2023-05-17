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
            <img src="images/events_vinbaren_vinoteque.jpg" class="w-100">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Events</h1>
                    <p class="lead text-white">Spændende og sjove oplevelser - både på Vinoteque og vores strandcafé på kajen.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>


<div class="container text-center">
    <h2>Her kan du se alle vores kommende events</h2>
    <p class="lead">Events på skibet Vinoteque foregår indendørs og på strand caféen udendørs.</p>


    <div class="tabset py-3 py-lg-5">
    <!-- Tab 1 -->
    <input type="radio" name="tabset" id="tab1" aria-controls="alle" checked>
    <label for="tab1">Alle Event</label>
    <!-- Tab 2 -->
    <input type="radio" name="tabset" id="tab2" aria-controls="vinoteque">
    <label for="tab2">Vinoteque</label>
    <!-- Tab 3 -->
    <input type="radio" name="tabset" id="tab3" aria-controls="strand">
    <label for="tab3">Strand Caféen</label>

    <div class="tab-panels">
        <section id="alle" class="tab-panel fullscreen-bg">
        <!-- Tab 1: Tekst ind her -->
            <div class="row d-flex justify-content-center text-center p-5">
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
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
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
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

        </section>
        <section id="vinoteque" class="tab-panel fullscreen-bg">
        <!-- Tab 2: Tekst ind her -->
            <div class="row d-flex justify-content-center text-center p-5">
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
                    <div class="bg-white">
                        <h5 class="text-primary">31</h5>
                        <h6 class="text-muted">Februar</h6>
                    </div>
                    <div>
                        <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                        <h4 class="text-white pt-lg-3">øl<br>Smagning</h4>
                        <h5 class="text-white py-lg-3">195,- pr. person</h5>
                        <img src="images/oel-smagning-vinbaren.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
                    <div class="bg-white">
                        <h5 class="text-primary">31</h5>
                        <h6 class="text-muted">Februar</h6>
                    </div>
                    <div>
                        <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                        <h4 class="text-white pt-lg-3">Sønderjysk<br>Kagebord</h4>
                        <h5 class="text-white py-lg-3">245,- pr. person</h5>
                        <img src="images/kagebuffet-vinbaren.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
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
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
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
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="strand" class="tab-panel fullscreen-bg">
        <!-- Tab 3: Tekst ind her -->
            <div class="row d-flex justify-content-center text-center p-5">
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
                    <div class="bg-white">
                        <h5 class="text-primary">31</h5>
                        <h6 class="text-muted">Februar</h6>
                    </div>
                    <div>
                        <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                        <h4 class="text-white pt-lg-3">LF Mesterskaber<br>i maveplask</h4>
                        <h5 class="text-white py-lg-3">195,- pr. person</h5>
                        <img src="images/lf_mesterskaber_maveplask.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
                    <div class="bg-white">
                        <h5 class="text-primary">31</h5>
                        <h6 class="text-muted">Februar</h6>
                    </div>
                    <div>
                        <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                        <h4 class="text-white pt-lg-3">Filmaften<br>på storskærm</h4>
                        <h5 class="text-white py-lg-3">245,- pr. person</h5>
                        <img src="images/film_event_storskaem.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
                    <div class="bg-white">
                        <h5 class="text-primary">31</h5>
                        <h6 class="text-muted">Februar</h6>
                    </div>
                    <div>
                        <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                        <h4 class="text-white pt-lg-3">Tour de France<br>på storskærm</h4>
                        <h5 class="text-white py-lg-3">245,- pr. person</h5>
                        <img src="images/torr_de_france_storskaerm.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
                    </div>
                </div>
                <div class="col-6 col-lg-3 pt-5 pt-lg-0">
                    <div class="bg-white">
                        <h5 class="text-primary">31</h5>
                        <h6 class="text-muted">Februar</h6>
                    </div>
                    <div>
                        <h6 class="pt-lg-4 text-white">Monday 10:00 – 18:30</h6>
                        <h4 class="text-white pt-lg-3">Sankt Hans med<br>fiksefestival</h4>
                        <h5 class="text-white py-lg-3">295,- pr. person</h5>
                        <img src="images/sankt_hans.jpg" alt="" class="img-fluid h-100 rounded-4 border border-white border-1">
                        <a href="events.php" class="btn btn-primary text-white btn-link mt-4">Se event</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>



<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>