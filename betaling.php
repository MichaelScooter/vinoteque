<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Film på Storskærm ved Vinoteque Strand Cafe</title>
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
            <img src="images/film_mobil.webp" alt="Nyd en aften under stjernerne med film på storskærm hos Vinoteque - skab uforglemmelige minder" class="w-100 d-lg-none pt-5">
            <img src="images/film_event_vinoteque.webp" alt="Få en unik filmoplevelse på Vinoteque med spektakulær storskærmsvisning og en behagelig atmosfære" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Betaling</h1>
                    <p class="lead text-white">Betaling af dine tilmeldte events</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100">
</div>

<div class="container pb-2">
    <div class="row">
        <div class="text-center">
            <h5 class="text-primary">Betaling</h5>
            <h2>Vi bruger sikker betaling</h2>
            <p>Vi bruger krypteringsteknologi til at beskytte dine betalingsoplysninger under transmission. <br>Dette sikrer, at dine følsomme data forbliver private og ikke kan læses af uautoriserede parter.</p>
        </div>
    </div>
</div>

<div class="containerVisa">

    <div class="card-body">

        <div class="payment">

            <div class="creditcard">
                <div class="thecard">
                    <div class="top-card">
                        <div class="circle"></div>
                        <div class="card-title">
                            Visakort
                        </div>
                    </div>
                    <div class="card-info">
                        <div class="card-number">
                            1234 5678 9012 3456
                        </div>
                        <div class="exp-date">
                            01 / 2018
                        </div>
                        <div class="card-holder">
                            Jens Jensen
                        </div>
                    </div>
                </div>
            </div>

            <div class="formBetaling">
                <formBetaling action="" method="get">
                    <label for="cardnumber">Kort nummer</label>
                    <input type="text" id="cardnumber" placeholder="1234 5678 9012 3456">
                    <label for="cardholder">Navn på kortet</label>
                    <input type="text" id="cardholder" placeholder="F.eks. Jens Jensen">
                    <label for="exp">Udløbsdato</label>
                    <div class="date">
                        <select name="month" id="month">
                            <option value="january">Januar</option>
                            <option value="february">Februar</option>
                            <option value="march">Marts</option>
                            <option value="april">April</option>
                            <option value="may">Maj</option>
                            <option value="june">Juni</option>
                            <option value="july">Juli</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">Oktober</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>
                        <select name="Year">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div class="small">
                        <div class="cvc">
                            <label for="cvc">CVC</label>
                            <input type="text" id="cvc" maxlength="3" size="4" placeholder="123">
                        </div>
                        <p>Tre eller fire cifre, som normalt findes på bagsiden af kortet</p>
                    </div>
                    <button>Godkend køb</button>
                </formBetaling>
            </div>
        </div>
    </div>
</div>


<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100">
</div>



<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>