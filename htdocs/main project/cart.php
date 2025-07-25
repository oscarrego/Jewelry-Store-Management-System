<?php
include './config.php';
$admin = new Admin();

$uid = $_SESSION['user_id'];
?>
<style>
    @import "compass/css3";
    @import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Montserrat:400,700);
    @import "compass/reset";

    * {
        box-sizing: border-box;
    }

    body {
        color: #333;
        -webkit-font-smoothing: antialiased;
        font-family: 'Droid Serif', serif;
    }

    img {
        max-width: 100%;
    }

    .cf:before,
    .cf:after {
        content: " ";
        display: table;
    }

    .cf:after {
        clear: both;
    }

    .cf {
        *zoom: 1;
    }

    .wrap {
        width: 75%;
        max-width: 960px;
        margin: 0 auto;
        padding: 5% 0;
        margin-bottom: 5em;
    }

    .projTitle {
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        text-align: center;
        font-size: 2em;
        padding: 1em 0;
        border-bottom: 1px solid #dadada;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    .projTitle span {
        font-family: 'Droid Serif', serif;
        font-weight: normal;
        font-style: italic;
        text-transform: lowercase;
        color: #777;
    }

    .heading {
        padding: 1em 0;
        border-bottom: 1px solid #d0d0d0;
    }

    .heading h1 {
        font-family: 'Droid Serif', serif;
        font-size: 2em;
        float: left;
    }

    .heading a.continue:link,
    .heading a.continue:visited {
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: -0.015em;
        font-size: 0.75em;
        padding: 1em;
        color: #fff;
        background: #82ca9c;
        font-weight: bold;
        border-radius: 50px;
        float: right;
        text-align: right;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    .heading a.continue:after {
        content: "\276f";
        padding: 0.5em;
        position: relative;
        right: 0;
        -webkit-transition: all 0.15s linear;
        -moz-transition: all 0.15s linear;
        -ms-transition: all 0.15s linear;
        -o-transition: all 0.15s linear;
        transition: all 0.15s linear;
    }

    .heading a.continue:hover,
    .heading a.continue:focus,
    .heading a.continue:active {
        background: #f69679;
    }

    .heading a.continue:hover:after,
    .heading a.continue:focus:after,
    .heading a.continue:active:after {
        right: -10px;
    }

    .tableHead {
        display: table;
        width: 100%;
        font-family: 'Montserrat', sans-serif;
        font-size: 0.75em;
    }

    .tableHead li {
        display: table-cell;
        padding: 1em 0;
        text-align: center;
    }

    .tableHead li.prodHeader {
        text-align: left;
    }

    .cart {
        padding: 1em 0;
    }

    .cart .items {
        display: block;
        width: 100%;
        vertical-align: middle;
        padding: 1.5em;
        border-bottom: 1px solid #fafafa;
    }

    .cart .items.even {
        background: #fafafa;
    }

    .cart .items .infoWrap {
        display: table;
        width: 100%;
    }

    .cart .items .cartSection {
        display: table-cell;
        vertical-align: middle;
    }

    .cart .items .cartSection .itemNumber {
        font-size: 0.75em;
        color: #777;
        margin-bottom: 0.5em;
    }

    .cart .items .cartSection h3 {
        font-size: 1em;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.025em;
    }

    .cart .items .cartSection p {
        display: inline-block;
        font-size: 0.85em;
        color: #777;
        font-family: 'Montserrat', sans-serif;
    }

    .cart .items .cartSection p .quantity {
        font-weight: bold;
        color: #333;
    }

    .cart .items .cartSection p.stockStatus {
        color: #82ca9c;
        font-weight: bold;
        padding: 0.5em 0 0 1em;
        text-transform: uppercase;
    }

    .cart .items .cartSection p.stockStatus.out {
        color: #f69679;
    }

    .cart .items .cartSection .itemImg {
        width: 4em;
        float: left;
    }

    .cart .items .cartSection.qtyWrap,
    .cart .items .cartSection.prodTotal {
        text-align: center;
    }

    .cart .items .cartSection.qtyWrap p,
    .cart .items .cartSection.prodTotal p {
        font-weight: bold;
        font-size: 1.25em;
    }

    .cart .items .cartSection input.qty {
        width: 2em;
        text-align: center;
        font-size: 1em;
        padding: 0.25em;
        margin: 1em 0.5em 0 0;
    }

    .cart .items .cartSection .itemImg {
        width: 8em;
        display: inline;
        padding-right: 1em;
    }

    .special {
        display: block;
        font-family: 'Montserrat', sans-serif;
    }

    .special .specialContent {
        padding: 1em 1em 0;
        display: block;
        margin-top: 0.5em;
        border-top: 1px solid #dadada;
    }

    .special .specialContent:before {
        content: "\21b3";
        font-size: 1.5em;
        margin-right: 1em;
        color: #6f6f6f;
        font-family: helvetica, arial, sans-serif;
    }

    a.remove {
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        color: #fff;
        font-weight: bold;
        background: #e0e0e0;
        padding: 0.5em;
        font-size: 0.75em;
        display: inline-block;
        border-radius: 100%;
        line-height: 0.85;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    a.remove:hover {
        background: #f30;
    }

    .promoCode {
        border: 2px solid #efefef;
        float: left;
        width: 35%;
        padding: 2%;
    }

    .promoCode label {
        display: block;
        width: 100%;
        font-style: italic;
        font-size: 1.15em;
        margin-bottom: 0.5em;
        letter-spacing: -0.025em;
    }

    .promoCode input {
        width: 85%;
        font-size: 1em;
        padding: 0.5em;
        float: left;
        border: 1px solid #dadada;
    }

    .promoCode input:active,
    .promoCode input:focus {
        outline: 0;
    }

    .promoCode a.btn {
        float: left;
        width: 15%;
        padding: 0.75em 0;
        border-radius: 0 1em 1em 0;
        text-align: center;
        border: 1px solid #82ca9c;
    }

    .promoCode a.btn:hover {
        border: 1px solid #f69679;
        background: #f69679;
    }

    .btn:link,
    .btn:visited {
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: -0.015em;
        font-size: 1em;
        padding: 1em 3em;
        color: #fff;
        background: #82ca9c;
        font-weight: bold;
        border-radius: 50px;
        float: right;
        text-align: right;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    .btn:after {
        content: "\276f";
        padding: 0.5em;
        position: relative;
        right: 0;
        -webkit-transition: all 0.15s linear;
        -moz-transition: all 0.15s linear;
        -ms-transition: all 0.15s linear;
        -o-transition: all 0.15s linear;
        transition: all 0.15s linear;
    }

    .btn:hover,
    .btn:focus,
    .btn:active {
        background: #f69679;
    }

    .btn:hover:after,
    .btn:focus:after,
    .btn:active:after {
        right: -10px;
    }

    .promoCode .btn {
        font-size: 0.85em;
        paddding: 0.5em 2em;
    }

    /* TOTAL AND CHECKOUT */
    .subtotal {
        float: right;
        width: 35%;
    }

    .subtotal .totalRow {
        padding: 0.5em;
        text-align: right;
    }

    .subtotal .totalRow.final {
        font-size: 1.25em;
        font-weight: bold;
    }

    .subtotal .totalRow span {
        display: inline-block;
        padding: 0 0 0 1em;
        text-align: right;
    }

    .subtotal .totalRow .label {
        font-family: 'Montserrat', sans-serif;
        font-size: 0.85em;
        text-transform: uppercase;
        color: #777;
    }

    .subtotal .totalRow .value {
        letter-spacing: -0.025em;
        width: 35%;
    }

    @media only screen and (max-width: 39.375em) {
        .wrap {
            width: 98%;
            padding: 2% 0;
        }

        .projTitle {
            font-size: 1.5em;
            padding: 10% 5%;
        }

        .heading {
            padding: 1em;
            font-size: 90%;
        }

        .cart .items .cartSection {
            width: 90%;
            display: block;
            float: left;
        }

        .cart .items .cartSection.qtyWrap {
            width: 10%;
            text-align: center;
            padding: 0.5em 0;
            float: right;
        }

        .cart .items .cartSection.qtyWrap:before {
            content: "QTY";
            display: block;
            font-family: 'Montserrat', sans-serif;
            padding: 0.25em;
            font-size: 0.75em;
        }

        .cart .items .cartSection.prodTotal,
        .cart .items .cartSection.removeWrap {
            display: none;
        }

        .cart .items .cartSection .itemImg {
            width: 25%;
        }

        .promoCode,
        .subtotal {
            width: 100%;
        }

        a.btn.continue {
            width: 100%;
            text-align: center;
        }
    }
</style>

<div class="wrap cf">
    <h1 class="projTitle">Shopping<span>-Cart</span> </h1>
    <div class="heading cf">
        <h1>My Cart</h1>
        <a href="index.php" class="continue">Continue Shopping</a>
    </div>
    <div class="cart">
        <!--    <ul class="tableHead">
      <li class="prodHeader">Product</li>
      <li>Quantity</li>
      <li>Total</li>
       <li>Remove</li>
    </ul>-->
        <ul class="cartWrap">

            <?php
            $stmt4 = $admin->ret("SELECT * FROM `cart_table` inner join `product_table` on cart_table.p_id=product_table.p_id where cart_table.user_id='$uid'");
            while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) { ?>
                <li class="items odd">

                    <div class="infoWrap">
                        <div class="cartSection">
                            <img src="./Admin/controller/<?= $row4['img']; ?>" alt="" class="itemImg" />

                            <h3><?= $row4['pname']; ?></h3>

                            <p> <input type="text" class="qty" readonly value="<?= $row4['cart_qty']; ?>" /> x ₹<?= $row4['price']; ?>.00</p>


                        </div>


                        <div class="prodTotal cartSection">
                            <p>₹<?= $row4['cart_qty'] * $row4['price'] ?> .00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="./controller/cart.php?crtid=<?=$row4['cart_id']; ?>" class="remove">x</a>
                        </div>
                    </div>
                </li>

            <?php } ?>





            <!--<li class="items even">Item 2</li>-->

        </ul>
    </div>


</div>