<?php
    include('productCRUD.php');

    $obj = new ProductCRUD();
    //read data
    $list = $obj->readProducts();
    if($list) {
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>ATN Shop | Product</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- !Important notice -->
<!-- Only for product page body tag have to added .productPage class -->
<body class="productPage">  
<!-- wpf loader Two -->
    <div id="wpf-loader-two">          
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
    </div> 
    <!-- / wpf loader Two -->       
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
<div class="aa-header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-top-area">
                    <!-- / header top left -->
                    <div class="aa-header-top-right">
                    <ul class="aa-head-top-nav-right">
                        <li><a href="account.html">My Account</a></li>
                        <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                        <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                        <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                        <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / header top  -->
<!-- start header bottom  -->
<div class="aa-header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-bottom-area">
                    <!-- logo  -->
                    <div class="aa-logo">
                        <!-- Text based logo -->
                        <a href="index.html">
                            <span class="fa fa-shopping-cart"></span>
                            <p> <strong> ATN </strong> <span> TOYS STORE </span></p>
                        </a>
                        <!-- img based logo -->
                        <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                    </div>
                    <!-- / logo  -->
                    <!-- cart box -->
                    <div class="aa-cartbox">
                        <a class="aa-cart-link" href="#">
                            <span class="fa fa-shopping-basket"></span>
                            <span class="aa-cart-title">SHOPPING CART</span>
                            <span class="aa-cart-notify">0</span>
                        </a>
                            <div class="aa-cartbox-summary">
                                <ul>                  
                                    <li>
                                        <span class="aa-cartbox-total-title">
                                        Total
                                        </span>
                                        <span class="aa-cartbox-total-price">
                                        $0
                                        </span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                            </div>
                    </div>
                    <!-- / cart box -->
                    <!-- search box -->
                    <div class="aa-search-box">
                        <form action="">
                            <input type="text" name="" id="" placeholder="Searching ">
                            <button type="submit"><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                    <!-- / search box -->             
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / header bottom  -->
</header>
<section id="menu">
<div class="container">
    <div class="menu-area">
    <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>          
            </div>
            <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li><a href="#">Teenager<span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                        <li><a href="#">Board Games</a></li>
                        <li><a href="#">DIY</a></li>
                        <li><a href="#">Draw and paint</a></li>
                        <li><a href="#">Creative</a></li>                                                
                        <li><a href="#">Puzzle</a></li>
                        <li><a href="#">Lego</a></li>
                        <li><a href="#">keychains</a></li>
                        <li><a href="#">And more.. <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Console games</a></li>
                                <li><a href="#">Outdoor Activies</a></li>
                                <li><a href="#">Cards Game</a></li>                                      
                            </ul>
                        </li>
                    </ul>
                </li>
                </li>
                <li><a href="#">Kids <span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                        <li><a href="#">Active Play</a></li>
                        <li><a href="#">Arts & Crafts</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Plush</a></li>                                                
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Vehicles</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">And more.. <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Outdoor Toys </a></li>
                            <li><a href="#">DIY</a></li>
                            <li><a href="#">Music</a></li>                                      
                        </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                    <li><a href="product.html">Shop Page</a></li>
                    <li><a href="product-detail.html">Shop Single</a></li>                
                    <li><a href="404.html">404 Page</a></li>                
                </ul>
                </li>
            </ul>
    </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
</div>
</div>
</section>
<section id="aa-catg-head-banner">
<div style="width: auto; height: auto">
    <img src="img/1578050692471.jpg" style="width: 1900px ;height:900px" alt="toy img">
</div>
<div class="aa-catg-head-banner-area">
    <div class="container">

        <div class="aa-catg-head-banner-content">
            <h2 style="text-align: center; margin:auto; size: 500px">Welcome  to  Toy  Stores  of  ATN  system</h2>
        </div>
    </div>
</div>
</section>
<!-- / catg header banner section -->
<!-- product category -->
<section id="aa-product-category" style="margin-top: 100px">
<div class="container">
    <div class="row">
    <div class="col -lg-9 col-md-9 col-sm-8 col-md-push-3">
        <?php foreach($list as $item) { ?>
        <div class="aa-product-catg-body" style="width: 250px; float: left; border: 500px, 500px; text-align: center;">
            <!-- start single product item --> 
                <a class="aa-product-img" href="#"><img src="img\<?= $item['image']?>"  width="200" height="200"></a>
                    <h4 class="aa-product-title"><?php echo $item["name"] ?></h4>
                    <p>Price: $<span class="aa-product-price"><?php echo $item["price"]?></span></p>
                    <p class="aa-product-descrip"><?php echo $item["details"]?></p>
                    <a class=""href="#">
                    <button type="button" class="fa fa-shopping-cart">Add To Cart</button>
                    </a>
        </div>
        <?php } ?>
        <?php } ?>                   
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
        <aside class="aa-sidebar">
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Category</h3>
            <ul class="aa-catg-nav">
            <li><a href="#">Science & Nature</a></li>
            <li><a href="">Building & Construction</a></li>
            <li><a href="">Maker & DIY Kits</a></li>
            <li><a href="">Electornics</a></li>
            <li><a href="">Sports</a></li>
            </ul>
        </div>
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Brand</h3>
            <div class="tag-cloud">
            <a href="#">Fat Brain Toys</a>
            <a href="#">LEGO Star Wars</a>
            <a href="#">Design Works, Inc.</a>
            <a href="#">Spooner</a>
            <a href="#">Rubik's Cube</a>
            <a href="#">PlayMonster</a>
            <a href="#">Ravensburger</a>
            </div>
        </div>
    </div>
    </div>
    <div class="aa-product-catg-pagination">
            <nav style="text-align: center;">
            <ul class="pagination">
                <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
            </nav>
        </div>
</section>
<!-- / product category -->
<!-- footer -->  
<footer id="aa-footer">
<!-- footer bottom -->
<div class="aa-footer-top">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="aa-footer-top-area">
        <div class="row">
            <div class="col-md-3 col-sm-6">
            <div class="aa-footer-widget">
                <h3>Main Menu</h3>
                <ul class="aa-footer-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Our Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                <h3>Knowledge Base</h3>
                <ul class="aa-footer-nav">
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="#">Special Offer</a></li>
                </ul>
                </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                <h3>Useful Links</h3>
                <ul class="aa-footer-nav">
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="#">Suppliers</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                <h3>Contact Us</h3>
                <address>
                    <p> 12 gia phu st, district 6, HCMC, VN</p>
                    <p><span class="fa fa-phone"></span>+ 1234567890</p>
                    <p><span class="fa fa-envelope"></span>ATNshop@gmail.com</p>
                </address>
                <div class="aa-footer-social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                    <a href="#"><span class="fa fa-youtube"></span></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
</div>
</footer>
<!-- / footer -->
<!-- Login Modal -->  
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">                      
    <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login or Register</h4>
        <form class="aa-login-form" action="">
        <label for="">Username or Email address<span>*</span></label>
        <input type="text" placeholder="Username or email">
        <label for="">Password<span>*</span></label>
        <input type="password" placeholder="Password">
        <button class="aa-browse-btn" type="submit">Login</button>
        <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
        <div class="aa-register-now">
            Don't have an account?<a href="account.html">Register now!</a>
        </div>
        </form>
    </div>                        
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>  
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
<!-- To Slider JS -->
<script src="js/sequence.js"></script>
<script src="js/sequence-theme.modern-slide-in.js"></script>  
<!-- Product view slider -->
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="js/nouislider.js"></script>
<!-- Custom js -->
<script src="js/custom.js"></script> 
</body>
</html>