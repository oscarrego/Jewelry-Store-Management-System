<?php
include './config.php';
$admin = new Admin();

if(isset($_SESSION['user_id'])){
    $uid = $_SESSION['user_id'];

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Gems</title>
    <link rel="shortcut icon" href="favicon.jpg" type="image/jpg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.3.1/esm/ionicons.min.js" integrity="sha512-WsL2r6j6Im3HvCp3uuExL45LhU4qwsS4HgVHgti+k/9zXNQnLqiunaxwNxDl+NsLHryCUyGPBw2IV7mGe1Z7nQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <?php

    include './nav.php';
    ?>
    <!-- header middle ends -->

    <!-- header bottom starts -->




    <br><br><br>
    <section class="product_section p_section1 product_black_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_tab_button">
                            <ul class="nav" >
                                <li>
                                    <a class="active">Trending </a>
                                </li>


                            </ul>
                        </div>
                        <div class="">
                            <div  >
                                <div>
                                    <div style="display: flex;flex-wrap:wrap;justify-content:center">
                                        <?php
                                        $stmt4 = $admin->ret("SELECT * FROM `product_table` INNER JOIN `category_table` ON category_table.cid=product_table.cat_id" );
                                        while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <div class="custom-col-5" style="width: 300px;">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="./Admin/controller/<?php echo $row4['img'] ?>" alt="product1" style="height: 300px;"></a>
                                                        <!-- <a href="#" class="secondary_img"><img src="./Admin/controller/<?php echo $row4['img'] ?>" alt="product1"></a> -->
                                                       
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#"><?php echo $row4['pname'] ?></a>

                                                        </div>
                                                        <h3><a href="#"><?php echo $row4['cname'] ?></a></h3>
                                                        <div class="price_box">
                                                            <span class="current_price"><i class="fa fa-inr"> </i><?php echo $row4['price'] ?></span>
                                                        </div>
                                                        <div class="product_hover" style="width: 300px;">
                                                        
                                                            <div class="product_desc">
                                                                <p><?php echo $row4['descp'] ?></p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                <form action="./controller/cart.php" method="post">
                  <input type="hidden" name="pid" id="" value="<?php echo $row4['p_id'] ?>">
                  <input type="hidden" name="cqty" id="" value="1">

               
                      <p>
                      <li class="add_to_cart"><a class="btn btn-warning" href="controller/cart.php?pid=<?=$row4['p_id']; ?>" title="Add to Cart">Add to Cart</a></li>

                        <!-- <input type="submit" name="addtocart" class="btn btn-primary" value="Add to cart"> -->
                      </p>

                
                  

                </form>
                                                                   
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <?php
                                        }
                                        ?>





                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer section starts -->
    <footer class="footer_widgets footer_black">
        <div class="container">
            <div class="footer_top">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-5 col-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>

                               
                                    <li><a href="#">How to wear jewelry </a></li>
                                    <li><a href="#">Size Guide </a></li>
                              
                                    <li><a href="faq.html">FAQ </a></li>
                                    <li><a href="contact.html">Contact Us </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <div class="widgets_container widget_menu">
                            <h3>About us</h3>
                            <div class="footer_menu">
                                <ul>
                          
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms of Services</a></li>

                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="widgets_container contact_us">

                            <h3>Follow us</h3>
                            <div class="footer_contact">
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="footer_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="copyright_area">
                                    <p> &copy; <a href="#">Electronic Gems Official Online Store </a></p>
                                    <img src="images/icon/papyel2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

    </footer>
    <!-- footer section ends -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="main.js"></script>

</body>

</html>