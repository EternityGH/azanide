<!DOCTYPE html>
<html lang="en">

<head>
    <title>AZANIDE GAMING</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/animate.css">
    <link rel="stylesheet" type="text/css" href="lib/css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="lib/css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="shortcut icon" href="lib/images/logo/logo.png" type="image/png">
</head>

<body>
    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">free shipping on all u.s orders over $50</div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">
                                	<?php 
                                		if (!isset($_SESSION['login'])){
                                	?>
	                                    <li class="account">
	                                        <a href="#">
												My Account
												<i class="fa fa-angle-down"></i>
											</a>
	                                        <ul class="account_selection">
	                                            <li>
	                                            	<a href="login.php"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Sign In</a>
	                                            </li>
	                                            <li>
	                                            	<a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
	                                            </li>
	                                        </ul>
	                                    </li>
	                                <?php 
	                                	} else {

	                                ?>
										<li class="account">
	                                        <a href="#">
												Hi, <?=$_SESSION['login']['name']?>
												<i class="fa fa-angle-down"></i>
											</a>
	                                        <ul class="account_selection">
	                                            <li>
	                                            	<a href="account.php"><i class="fas fa-user-circle"></i>Account</a>
	                                            </li>
	                                           
	                                            <?php 
                                            		if ($_SESSION['login']['role'] == 0) {
                                            			
                                            	
	                                            ?>
	                                            <li>
	                                            	<a href="admin/"><i class="fas fa-sign-in-alt"></i>Control</a>
	                                            </li>
	                                            <?php 
	                                            	}
	                                            ?>
	                                            <li>
	                                            	<a href="controller/logout_process.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	                                            </li>
	                                        </ul>
	                                    </li>


	                                <?php	
	                                	}

	                                ?>    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="index.php">Azanide<span>Gaming</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="#">Home</a>
                                    </li>
                                    <li><a href="#">Category </a>
                                    </li>
                                    <li><a href="#">Sell vouchers</a>
                                    </li>
                                    <li><a href="#">About us</a>
                                    </li>
                                    <li><a href="#">FAQs</a>
                                    </li>
                                    <li><a href="#">Contact us</a>
                                    </li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">2</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item has-children">
                        <a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
                        <ul class="menu_selection">
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
                            </li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="#">home</a>
                    </li>
                    <li class="menu_item"><a href="#">khuyen mai</a>
                    </li>
                    <li class="menu_item"><a href="#">phu kien</a>
                    </li>
                    <li class="menu_item"><a href="#">linh kien</a>
                    </li>
                    <li class="menu_item"><a href="#">contact</a>
                    </li>
                </ul>
            </div>
        </div>

       </div>
    </div>
 



        
