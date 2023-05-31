<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Find vej til Vinbaren Vinoteque | Kom og nyd vores udvalg</title>
    <meta name="description" content="Leder du efter Vinbaren Vinoteque? Få rutevejledning og besøg os for at nyde vores fantastiske udvalg af vine. Vi venter på dig!">



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
            <img src="images/find_vej_mobil.webp" alt="Find vej til Vinbaren Vinoteque - Kom og nyd vores udvalg" class="w-100 d-lg-none pt-5">
            <img src="images/find_vej_vinbaren.webp" alt="Find vej til Vinoteque vinbaren - Kom og nyd vores udvalg" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Find Vej</h1>
                    <p class="lead text-white">Vinoteque vinbar & strand café</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100"></div>
</div>

<!-- Strand Caféen -->
<div class="container pb-2">
    <div class="row">
        <div class="text-center pb-1 pb-lg-3">
            <h5 class="text-primary">Gratis Parkering</h5>
            <h2>På Stengade 150 meter til Vinoteque</h2>
            <p class="lead">Vi ligger lige på hjørnet af Ndr. Kajgade og Sandgade</p>
         </div>
    </div>
</div>
<div class="text-center pb-5">
    <p class="lead">Find vej med Google Map</p>
    <p>(Klik på det lille billede)</p>
    <a class="googleMap" href="https://www.google.dk/maps/dir//Sandgade,+4800+Nyk%C3%B8bing+Falster/@54.7703377,11.8537091,15z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x47ad30f97b0d187f:0x9d45111e91fc8619!2m2!1d11.8624639!2d54.770338!3e2?hl=da">
        <img src="images/google.webp" alt="Find vej">
    </a>
</div>

<!-- Google Map -->
<div class="fixedBaggrund vh-100 d-flex justify-content-center align-items-center px-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.590234059943!2d11.858908712815465!3d54.7695909726224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad30fa2b1b7da5%3A0x7354c59eccd9b31b!2sNdr%20Kajgade%20%26%20Sandgade%2C%204800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sda!2sdk!4v1684255003172!5m2!1sda!2sdk" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>