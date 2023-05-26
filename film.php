<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Film på Storskærm ved Vinoteque Strand Cafe | Unik udendørs filmoplevelse</title>
    <meta name="title" content="Oplev Film på Storskærm ved Vinoteque Strand Cafe">
    <meta name="description" content="Nyd en uforglemmelig aften med udendørs film på storskærm ved vores strand cafe på skibet Vinoteque. Kom og oplev film under åben himmel med en lækker udsigt. Book nu!">


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
            <img src="images/film_mobil.jpg" alt="Nyd en aften under stjernerne med film på storskærm hos Vinoteque - skab uforglemmelige minder" class="w-100 d-lg-none pt-5">
            <img src="images/film_event_vinoteque.jpg" alt="Få en unik filmoplevelse på Vinoteque med spektakulær storskærmsvisning og en behagelig atmosfære" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Film</h1>
                    <p class="lead text-white">På Storskærm - i hyggelig & lækker sommer stemning</p>
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
            <h5 class="text-primary">Lørdag d. 5. August kl. 20.00</h5>
            <h2>Oplev magien ved film på en strandcafé med betagende havudsigt</h2>
            <p class="lead pb-3">Velkommen til en uforglemmelig filmoplevelse på en strandcafé beliggende ved havnen. Her kan du fordybe dig i magien ved film, mens du nyder en betagende udsigt over det strålende hav og den solnedgang, der maler himlen i varme farver.</p>
           <p>Når du træder ind på strandcaféen, vil du straks blive mødt af en atmosfære af spænding og forventning. Den stemningsfulde belysning, de bløde havbrise og den beroligende lyden af bølgerne, skaber en perfekt kulisse for en aften med film og hygge. Tag plads i de komfortable siddeområder, som er placeret, så du har den bedste udsigt til både filmen på storskærmen og den naturskønne omgivelse.</p>
            <p class="lead">Pris pr. person kr. 195,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>

        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_film.jpg" alt="Film på Storskærm ved Vinoteque Strand Cafe | Udendørs filmoplevelse under åben himmel" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Dyk ned i filmens verden på den store storskærm</h3>
            <p>På dette event kan du dykke ned i filmens fortryllende verden, når vi viser populære film på den store storskærm. Uanset om du er fan af action, romantik, komedie eller thrillere, vil der være noget for enhver smag. Tag plads på strandcaféen, lad dig synke ned i de komfortable sæder og fordyb dig i historierne, karaktererne og de visuelle effekter, som filmene bringer med sig. Den store storskærm og den fantastiske lydkvalitet skaber en intim biografoplevelse under åben himmel.</p>
            <p>Når du sætter dig til rette i de bløde sæder og retter dit blik mod den store storskærm, vil du blive draget ind i filmens univers. Det skarpe billede og den imponerende lydkvalitet på storskærmen skaber en intens biografoplevelse, der får dig til at glemme tid og sted. Du vil føle dig omgivet af spændingen, følelserne og dramaet, der udfolder sig på lærredet.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>En magisk aften med film og betagende havudsigt</h3>
            <p>Dette event er skabt til alle, der elsker film og ønsker at kombinere det med en betagende havudsigt og afslappende atmosfære. Forestil dig at sidde på strandcaféen, omgivet af venner, familie eller andre filmelskere, mens solen går ned og skaber en magisk kulisse. Den betagende udsigt og de glitrende havbølger skaber den perfekte baggrund for denne uforglemmelige filmoplevelse.</p>
            <p>Tag del i dette unikke event med film på storskærm på strandcaféen og lad dig forføre af filmens magi og den betagende havudsigt. Uanset om du er en ægte filmfan eller blot ønsker at nyde en hyggelig aften med underholdning, vil dette event efterlade dig med smil på læben og minder for livet.</p>
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
    <p class="lead text-center text-white">Strand Caféen</p>
    <div class="row d-flex justify-content-center text-center px-lg-5 pt-lg-5">
        <?php include "includes/events_cafe.php"; ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

