<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Tilmelding Events på Vinoteque</title>
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
                    <h1 class="text-white">Tilmelding</h1>
                    <p class="lead text-white">Køb af billetter til events</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100">
</div>



<main>
    <div class="basket">
        <div class="basket-module">
            <label for="promo-code">Indtast rabat kode:</label>
            <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
            <button class="promo-code-cta">Indløs</button>
        </div>
        <div class="basket-labels">
            <ul>
                <li class="item item-heading">Event</li>
                <li class="price">Pris</li>
                <li class="quantity">Antal</li>
                <li class="subtotal">Subtotal</li>
            </ul>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/oel-smagning-vinbaren.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Øl Smagning</strong></p>
                    <p>Lørdag d. 24. juni kl. 20.00</p>
                </div>
            </div>
            <div class="price">195.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/kagebuffet-vinbaren.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Sønderjysk Kagebord</strong></p>
                    <p>Lørdag d. 8. juli kl. 16.00</p>
                </div>
            </div>
            <div class="price">245.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/gin-smagning-vinbaren.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Gin Smagning</strong></p>
                    <p>Lørdag d. 22. juli kl. 20.00</p>
                </div>
            </div>
            <div class="price">245.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/jazz-koncert-vinbaren.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Jazz Koncert</strong></p>
                    <p>Lørdag d. 29. juli kl. 20.00</p>
                </div>
            </div>
            <div class="price">295.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/sankt_hans.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Sankt Hans</strong></p>
                    <p>Lørdag d. 24. juni kl. 18.00</p>
                </div>
            </div>
            <div class="price">195.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/tour_de_france_storskaerm.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Tor de France på storskærm</strong></p>
                    <p>Lørdag d. 1. Juli kl. 14.00</p>
                </div>
            </div>
            <div class="price">145.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/lf_mesterskaber_maveplask.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>LF Mesterskaber i maveplask</strong></p>
                    <p>Lørdag d. 14. Juli kl. 16.00</p>
                </div>
            </div>
            <div class="price">95.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="images/film_event_storskaem.webp" alt="Placholder Image 2" class="product-frame">
                </div>
                <div class="product-details">
                    <h6>1 x billet</h6>
                    <p><strong>Film Storskærm</strong></p>
                    <p>Lørdag d. 5. August kl. 20.00</p>
                </div>
            </div>
            <div class="price">195.00</div>
            <div class="quantity">
                <input type="number" value="0" min="0" class="quantity-field">
            </div>
            <div class="subtotal">0.00</div>
            <div class="remove">
                <button>Fjern</button>
            </div>
        </div>

    </div>
    <aside>
        <div class="summary">
            <div class="summary-total-items"><span class="total-items"></span> Billetter</div>
            <div class="summary-subtotal">
                <div class="subtotal-title">Subtotal</div>
                <div class="subtotal-value final-value" id="basket-subtotal">0.00</div>
                <div class="summary-promo hide">
                    <div class="promo-title">Promotion</div>
                    <div class="promo-value final-value" id="basket-promo"></div>
                </div>
            </div>

            <div class="summary-total">
                <div class="total-title">Total</div>
                <div class="total-value final-value" id="basket-total">0.00</div>
            </div>
            <div class="summary-checkout">

                <a href="betaling.php" class="checkout-cta btn btn-farve5 text-white">Gå til sikker betaling</a>

            </div>
        </div>
    </aside>
</main>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100">
</div>



<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Tilmeldingsside -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    /* Set values + misc */
    var promoCode;
    var promoPrice;
    var fadeTime = 300;

    /* Assign actions */
    $(".quantity input").change(function () {
        updateQuantity(this);
    });

    $(".remove button").click(function () {
        removeItem(this);
    });

    $(document).ready(function () {
        updateSumItems();
    });

    $(".promo-code-cta").click(function () {
        promoCode = $("#promo-code").val();

        if (promoCode == "ven" || promoCode == "ven") {
            //If promoPrice has no value, set it as 10 for the 10OFF promocode - Michael Har ændret til VEN
            if (!promoPrice) {
                promoPrice = 100;
            } else if (promoCode) {
                promoPrice = promoPrice * 1;
            }
        } else if (promoCode != "") {
            alert("Invalid Promo Code");
            promoPrice = 0;
        }
        //If there is a promoPrice that has been set (it means there is a valid promoCode input) show promo
        if (promoPrice) {
            $(".summary-promo").removeClass("hide");
            $(".promo-value").text(promoPrice.toFixed(2));
            recalculateCart(true);
        }
    });

    /* Recalculate cart */
    function recalculateCart(onlyTotal) {
        var subtotal = 0;

        /* Sum up row totals */
        $(".basket-product").each(function () {
            subtotal += parseFloat($(this).children(".subtotal").text());
        });

        /* Calculate totals */
        var total = subtotal;

        //If there is a valid promoCode, and subtotal < 10 subtract from total
        var promoPrice = parseFloat($(".promo-value").text());
        if (promoPrice) {
            if (subtotal >= 10) {
                total -= promoPrice;
            } else {
                alert("Order must be more than £10 for Promo code to apply.");
                $(".summary-promo").addClass("hide");
            }
        }

        /*If switch for update only total, update only total display*/
        if (onlyTotal) {
            /* Update total display */
            $(".total-value").fadeOut(fadeTime, function () {
                $("#basket-total").html(total.toFixed(2));
                $(".total-value").fadeIn(fadeTime);
            });
        } else {
            /* Update summary display. */
            $(".final-value").fadeOut(fadeTime, function () {
                $("#basket-subtotal").html(subtotal.toFixed(2));
                $("#basket-total").html(total.toFixed(2));
                if (total == 0) {
                    $(".checkout-cta").fadeOut(fadeTime);
                } else {
                    $(".checkout-cta").fadeIn(fadeTime);
                }
                $(".final-value").fadeIn(fadeTime);
            });
        }
    }

    /* Update quantity */
    function updateQuantity(quantityInput) {
        /* Calculate line price */
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children(".price").text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;

        /* Update line price display and recalc cart totals */
        productRow.children(".subtotal").each(function () {
            $(this).fadeOut(fadeTime, function () {
                $(this).text(linePrice.toFixed(2));
                recalculateCart();
                $(this).fadeIn(fadeTime);
            });
        });

        productRow.find(".item-quantity").text(quantity);
        updateSumItems();
    }

    function updateSumItems() {
        var sumItems = 0;
        $(".quantity input").each(function () {
            sumItems += parseInt($(this).val());
        });
        $(".total-items").text(sumItems);
    }

    /* Remove item from cart */
    function removeItem(removeButton) {
        /* Remove row from DOM and recalc cart total */
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function () {
            productRow.remove();
            recalculateCart();
            updateSumItems();
        });
    }
</script>

</body>
</html>


