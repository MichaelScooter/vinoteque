<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Unik ølsmagning på skibet | Oplev den fantastiske udsigt!</title>
    <meta name="title" content="Unik ølsmagning på skib | Oplev den fantastiske udsigt!">
    <meta name="description" content="Tag med på vores eksklusive ølsmagnings event på skibet med en betagende udsigt. Smag på håndbryggede øl og skab uforglemmelige øjeblikke. Tilmeld dig nu!">

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
            <img src="images/oel_smagning_mobil.jpg" class="w-100 d-lg-none pt-5">
            <img src="images/oel_smagnin_vinoteque.jpg" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Øl Smagning</h1>
                    <p class="lead text-white">Få nye smagsoplevelser og måske en ny favorit øl.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Historien -->
<div class="container">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
            <h5 class="text-primary">Lørdag d. 24. juni kl. 20.00</h5>
            <h2>Ølsmagning for alle</h2>
            <p class="lead pb-3">En unik oplevelse venter dig på dette særlige ølsmagningsevent, der finder sted på et imponerende skib, der ligger fast fortøjet i havnen. Mens du træder ombord, bliver du mødt af en atmosfære fyldt med spænding og forventning. Skibets majestætiske udseende og charme er en prægtig kulisse for denne uforglemmelige begivenhed.
            </p>
            <p>
                Mens du bevæger dig gennem skibets dækkede områder, føles det som at træde ind i en verden af elegance og raffinement. Fra det øjeblik, du træder ombord, kan du mærke en særlig energi, der summer i luften. Den lækre udsigt over havet og havnen strækker sig ud foran dig, og du kan næsten mærke havbrisen på dit ansigt.
            </p>
            <p class="lead">Pris pr. person kr. 195,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>

        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_oel_smagning.jpg" alt="Ølsmagning på skibet med fantastisk udsigt" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Oplev ølens fortryllende verden på smukke omgivelser</h3>
            <p>Eventet begynder med en varm velkomst fra det imødekommende personale, der guider dig til det dedikerede område til ølsmagning. Det stilfulde indretning og den sofistikerede atmosfære bidrager til den eksklusive stemning, der omgiver arrangementet. Smukt anrettede borde er fyldt med et udvalg af nøje udvalgte ølflasker og specialdesignede glas, der venter på at blive udforsket.</p>
            <p>Eksperter inden for ølverdenen står klar til at guide dig gennem smagningens kunst. De deler deres dybdegående viden om ølens historie, brygningsprocessen og de forskellige smagsnuancer, der kan findes i forskellige ølvarianter. Du vil blive betaget af de rige aromaer, de komplekse smagsoplevelser og de subtile nuancer, der danser på din tunge.</p>
            </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>En fortryllende kombination af smagsoplevelser og betagende udsigt</h3>
            <p>Mens du nyder de lækre ølsmagsprøver, kan du lade dig forføre af den fortryllende udsigt udenfor. Det maleriske havnemiljø med skibes bevægelse og den solnedgang, der kaster et gyldent lys over horisonten, giver en perfekt kulisse til denne eksklusive oplevelse.</p>
            <p>Uanset om du er en ægte ølentusiast eller bare nysgerrig efter at udforske ølverdenens vidundere, vil denne ølsmagningsevent på det stillestående skib efterlade dig med minder for livet. En kombination af sublime smagsoplevelser, forbløffende udsigt og en atmosfære fyldt med klasse.</p>
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Kommende Events -->
<div class="container-fluid p-5 fullscreen-bg">
    <h2 class="text-center text-white mt-lg-3 pt-5">Kommende events</h2>
    <p class="lead text-center text-white">Skibet Vinoteque</p>
    <div class="row d-flex justify-content-center text-center px-lg-5 pt-lg-5">
        <?php include "includes/events_vinoteque.php"; ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

