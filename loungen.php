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
            <img src="images/vinbaren_strandcafe_mobil.jpg" class="w-100 d-lg-none">
            <img src="images/vinbarens_strand_cafe.jpg" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Vinoteque Strand Café</h1>
                    <p class="lead text-white">Byens bedste udsigt</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>


<!-- Strand Caféen -->
<div class="container pb-5">
    <div class="row">
        <div class="text-center pb-1 pb-lg-3">
            <h5 class="text-primary">Velkommen til</h5>
            <h2>Vinoteque Strand Caféen</h2>
            <p class="lead">Strand Café er en charmerende café beliggende på havnen, der tilbyder en fantastisk kombination af lækker mad, forfriskende drikkevarer i en dejlig atmosfære med en skøn udsigt udover vandet.
             </p>
        </div>
        <div class="col-4 py-3"><img src="images/strand_bar_vinoteque.jpg" alt="" class="img-fluid h-100 rounded-3"></div>
        <div class="col-4 py-3"><img src="images/strand_bar_drinks.jpg" alt="" class="img-fluid h-100 rounded-3"></div>
        <div class="col-4 py-3"><img src="images/strand_bar_solnedgang.jpg" alt="" class="img-fluid h-100 rounded-3"></div>
        <div>
            <p class="pt-3 pt-lg-5">I løbet af sommeren arrangeres der forskellige festlige events på Vinoteque Strand Café. Fra livemusik, til tema-aftener og specialarrangementer, er der altid noget spændende at opleve. Dette gør caféen til et populært mødested for både lokale beboere og turister, der søger en sjov og underholdende aften.</p>
            <p>Uanset om du ønsker at nyde en lækker middag, slappe af med en forfriskende drink eller deltage i en af de festlige begivenheder, er Vinoteque Strand Café det ideelle sted at besøge. </p>
            <p>Den venlige betjening, den behagelige atmosfære og det imponerende udvalg af mad og drikke sikrer, at du får en uforglemmelig oplevelse hver gang du besøger caféen på havnen.</p>
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>



<!-- Billede af strand Caféen -->
<div class="container-fluid fixedBaggrund vh-50 d-flex justify-content-center align-items-center py-5">
    <div class="row">
        <div class="col-12 text-white text-center py-lg-5">
            <h5>Vinoteque</h5>
            <h2>Strand Café</h2>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <img src="images/vinoteque_strand_cafe.png" alt="" class="img-fluid v-100">
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

