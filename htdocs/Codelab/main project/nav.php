<?php
$admin = new Admin();
?>


<div class="home_black_version">
    <header class="header_area header_black">
        <!-- header top starts -->
     
        <!-- header top ends -->

        <!-- header middle starts -->
        <div class="header_middel">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5">
                        <div class="home_contact">
                            <div class="contact_icone">
                                <img src="test.jpg" alt="">
                            </div>
                            <div class="contact_box">
                                <p>Customer Care : <a href="tel: +91 908737311">+91 908737311</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="logo">
                            <a href="#"><img src="icon.jpg" alt=""></a>
                        </div>
                    </div>

                    <div class="middel_right">
                        <div class="">
                            <div class="">
                            </div>
                        </div>
                        <div class="">
                            <a href="#"><i class=""></i></a>
                        </div>
                        <div class="">
                            <!-- <span class="cart_quantity">2</span> -->

                            <!-- mini cart -->
                            <div class="mini_cart">
                                <div class="cart_close">
                                    <div class="cart_text">
                                        <h3>cart</h3>
                                    </div>
                                    <div class="mini_cart_close">
                                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="cart/earing.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">"Dune" Ear Cuff S size </a>
                                        <span class="quantity">Qty : 2</span>
                                        <span class="price_cart">$660 USD </span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="cart/ring.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">18k "All About Basics" Flat Wide Band Ring</a>
                                        <span class="quantity">Qty : 1</span>
                                        <span class="price_cart">$1,500 USD</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_total">
                                    <span> </span>
                                    <span> </span>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button view_cart">
                                        <a href="#"> </a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="#" class="active">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- mini cart ends  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- header middle ends -->

<!-- header bottom starts -->

<div class="header_bottom "> <!--sticky-header -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="main_menu_inner">
                    <div class="logo_sticky">
                        <a href=""><img src="icon.jpg" alt="logo"></a>
                    </div>
                    <div class="main_menu">
                        <nav>
                            <ul>
                                <li class="active">
                                    <a href="./index.php">Home</a>

                                </li>
                                <li>
                                    <a href="#">Category</a>
                                    <ul class="mega_menu">
                                        <?php
                                        $stmt = $admin->ret("SELECT * FROM `category_table`");
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                            <li><a href="products.php?cid=<?= $row['cid'] ?>" >
                                                    <?php echo $row['cname'] ?>
                                                </a>
                                            </li>

                                        <?php
                                        }
                                        ?>


                                    </ul>
                                </li>
                                <li>
                                  <a href="./jwellery.php" > Trending</a>
                                </li>
                                
                                <li>
                                <?php 
                                if(isset($_SESSION['user_id'])){ ?>
                                  <a href="./cart.php"> Cart</a>
                                  <?php }else{?>
                                    <a href="./login.php"> Cart</a>
                                    <?php } ?>
                                </li>
                                <!-- <li>
                                  <a href="aboutus.html"> About Us</a>
                                </li> -->
                                <li>
                                    <?php 
                                if(!isset($_SESSION['user_id'])){ ?>
                                  <a href="login.php"> Login</a>
                                  <?php }else{?>
                                <a href="logout.php"> Logout</a>
                                <?php } ?>
                                </li>

                              

                                <!-- <li><a href="#">About Us</a>
                                    <ul class="sub_menu pages">
                                        <li><a href="#">World of Electronic Gems</a></li>
                                        <li><a href="#">Stores</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">How to wear Jewelry</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>

                                </li> -->

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header bottom ends -->
</header>