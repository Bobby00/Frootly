<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Frootly - Your one stop shop for fresh & tasty Fruits</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="css/theme-tangerine.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="css/test4.css"/>
        <link href="css/font-raleway.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/logo-frootly.png"/>


    </head>

    <?php
  include 'conct.php';

  // define variables and set to empty values
  $uname = $email = $phoneno = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = test_input($_POST["uname"]);
    $email = test_input($_POST["email"]);
    $phoneno = test_input($_POST["phoneno"]);

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO users (uname, email, phoneno) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $uname, $email, $phoneno);

  // set parameters and execute
  $isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $phoneno = $_POST['phoneno'];
  $successful = $stmt->execute();
  // echo "New records created successfully";

  $stmt->close();
  $conn->close();

  ?>

    <body>
        <div class="nav-container">
            <div class="via-1506805086708" via="via-1506805086708" vio="frootly">
                <nav style="position:absolute;" class="bar bar-toggle bar--absolute">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 col-sm-2 col-xs-3">
                                <div class="bar__module">
                                    <a href="index.php"> <img class="logo logo-dark" alt="logo" src="img/logo-frootly3.png"> <img class="logo logo-light" alt="logo"> </a>
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-10 col-xs-9">
                                <div class="bar__module">
                                    <a class="menu-toggle pull-right" href="#" data-notification-link="sidebar-menu"> <i class="stack-interface stack-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="notification pos-right pos-top side-menu bg--white" data-notification-link="sidebar-menu" id="background-nav" data-animation="from-right">
                    <div class="side-menu__module pos-vertical-center text-right">
                        <ul class="menu-vertical">
                            <li class="h4"> <a href="#">Home</a> </li>
                            <li class="h4"> <a onclick="mybasket()" class="inner-link" href="#show-basket">Fruit baskets</a> </li>
                            <li class="h4"> <a href="#">About us</a> </li>
                        </ul>
                    </div>
                    <div class="side-menu__module pos-bottom pos-absolute col-xs-12 text-right">
                        <ul class="social-list list-inline list--hover">
                            <li><a href="#"><i class="socicon socicon-google icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-instagram icon icon--xs"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <section id="header" class="cover imagebg text-center section--ken-burns height-80" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src="img/frootly-bg.jpg"> </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-8 col-md-7">
                            <h1>Enjoy fresh and healthy fruits delivered to you</h1>
                            <a  onclick="mybasket()" href="#show-basket" class="btn type--uppercase btn--primary inner-link"> <span class="btn__text"><span>Get started today</span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
            <section class="space--xs text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8">
                            <h2>Eat fruits and stay healthy the frootly way</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="process-1">
                                <div class="process__item">
                                    <h4>Select your preferred fruit basket</h4>
                                    <p> Choose your preferred fruit basket</p>
                                </div>
                                <div class="process__item">
                                    <h4>Schedule delivery</h4>
                                    <p> Tell us where and when to deliver the basket</p>
                                </div>
                                <div class="process__item">
                                    <h4>Enjoy the freshest and most nutritious fruits&nbsp;</h4>
                                    <p> Enjoy all the goodness in the fruits</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>


            <section style="" class="text-center bg--secondary">
              <div class="container-fluid">
                              <h2>Our Available Fruits </h2>
                              <h4 style="color:#7c9330;">- Feel Free to Look Around -</h4>
                                <div style="display:block;" class="row">
                                    <div class="slider" data-paging="true" data-timing="1700" data-arrows="true">
                                        <ul class="slides">
                                            <li class="col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <a onclick="mybasket()" class="inner-link" href="#show-basket"> <img alt="Image" src="img/apple.jpg"> </a>
                                                    <a class="block" href="#">
                                                        <div>
                                                            <h4>Apples</h4><span> Per Apple</span> </div>
                                                        <div> <span style="color:#7c9330;" class="h4 inline-block">KES 40.00</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <a onclick="mybasket()" class="inner-link" href="#show-basket"> <img alt="Image" src="img/avocado.jpg"> </a>
                                                    <a class="block" href="#">
                                                        <div>
                                                            <h4>Avocados</h4><span> Per Avocado</span> </div>
                                                        <div> <span style="color:#7c9330;" class="h4 inline-block">KES 50.00</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <a onclick="mybasket()" class="inner-link" href="#show-basket"> <img alt="Image" src="img/banana.jpg"> </a>
                                                    <a class="block" href="#">
                                                        <div>
                                                            <h4>Bananas</h4><span> Per Banana</span> </div>
                                                        <div> <span class="h4 inline-block type--strikethrough">KES 30.00</span> <span style="color:#7c9330;" class="h4 inline-block">KES 20.00</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <a onclick="mybasket()" class="inner-link" href="#show-basket"> <img alt="Image" src="img/strawberry.jpg"> </a>
                                                    <a class="block" href="#">
                                                        <div>
                                                            <h4>Strawberries</h4><span> Per Packet</span> </div>
                                                        <div> <span style="color:#7c9330;" class="h4 inline-block">KES 50.00</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <a onclick="mybasket()" class="inner-link" href="#show-basket"> <img alt="Image" src="img/watermelon.jpg"> </a>
                                                    <a class="block" href="#">
                                                        <div>
                                                            <h4>Watermelon</h4><span> Per Watermelon</span> </div>
                                                        <div> <span style="color:#7c9330;" class="h4 inline-block">KES 100.00</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <a onclick="mybasket()" class="inner-link" href="#show-basket"> <img alt="Image" src="img/mangoes.jpg"> </a>
                                                    <a class="block" href="#">
                                                        <div>
                                                            <h4>Mangoes</h4><span> Per Mango</span> </div>
                                                        <div> <span style="color:#7c9330;" class="h4 inline-block">KES 50.00</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                              </div>
                        </section>

            <section style="padding-top:3.42857143em; padding-bottom:3.42857143em;" class="switchable image-background" data-overlay="5">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-6 col-xs-12">
                            <div class="switchable__text" id="show">
                                <div class="switchable__text">
                                    <h2 style="color:white;">Frootly Fruit Basket of the day</h2>
                                    <p style="color:white;" class="lead"> Each basket is filled with all the necessary ingredients you will need for a healthy life full of energy</p>

                             </div>
														 <hr class="short">
														 <a style="background-color:white; padding-left:10px;" onclick="mybasket()" href="#show-basket" class="btn btn--primary inner-link">
                               <i style="font-size:25px; color:#7c9330; padding-right:10px;" class="fa fa-shopping-basket"></i>
	                               <span style="color:#fe9c0c; font-size:15px;" class="btn__text"> Create Your Own Basket</span>
                               </a>

                         </div>

                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-6 col-xs-12">
                            <div class="pricing pricing-2 boxed boxed--border boxed--lg">
                                <div class="col-md-6 col-sm-7 col-xs-12">
																<ul>
                                        <li><span class="checkmark bg--primary-1"></span><span>5 delicious bananas</span></li>
                                        <li><span class="checkmark bg--primary-1"></span><span>3 apples</span></li>
                                        <li><span class="checkmark bg--primary-1"></span><span>10 Avocadoes</span></li>
                                        <li><span class="checkmark bg--primary-1"></span><span>2 packets straw berries</span></li>
                                        <li><span class="checkmark bg--primary-1"></span><span>3 Thorn melons</span></li>
                                    </ul>

                                </div>
                                <div class="col-md-6 col-sm-5 col-xs-12 text-center">
                                    <h5>Price</h5> <span class="h1"><p>599</p></span>
                                    <p class="type--fine-print">Kenya Shillings</p>
                                    <a style="margin-top:30px; padding-right:20px; padding-left:20px;" class="btn btn--primary center" href="#"> <span class="btn__text">PURCHASE BASKET</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="show-basket" style="display:none; padding-top:0px; padding-bottom:0px;">
                  <div class="main-container">
                      <section class="bg--primary">
                          <div class="container">
                            <h2 class="text-center">Select Your Fruit(s)</h2>
                            <br/>
                              <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <article class="feature feature-1">
                                        <a href="#0" class="block"> <img alt="Image" src="img/apple.jpg"> </a>
                                        <div class="feature__body boxed boxed--border">
                                          <h3 style="color:orange;" class="text-orange text-left">Apples <span style="color:black; font-size:12px;">(Per Apple)</span><span class="price-style"><em>KES 40.00</em></span></h3>
                                          <div id="apple_details">
                                            <h5>Very rich in important antioxidants, and dietary fiber</h5>
                                            <a class="add-to-cart cd-add-to-cart" data-name="Apples" data-price="40" onclick="apple_pluminus()" href="#0" >Add To Basket</a>
                                          </div>

                                          <div id="apple_quantity" class="hide">
                                          <div class="container text-center">
                                            <h4 class="spacing-small" style="text-decoration:em">How Many? <h4/>

                                            <span id="decrementButtonApple"> <i id="minus-button-style" class="fa fa-minus-circle"></i> </span>
                                              <span type="number" id="currentCountApple">1</span>
                                            <span data-name="Apples" data-price="40" class="add-to-cart" id="incrementButtonApple"><i id="plus-button-style" class="fa fa-plus-circle"></i></span>
                                          </div>
                                        </div>
                                        </div>
                                    </article>
                              </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <article class="feature feature-1">
                                        <a href="#0" class="block"> <img alt="Image" src="img/avocado.jpg"> </a>
                                        <div class="feature__body boxed boxed--border">
                                          <h3 style="color:orange;" class="text-orange text-left">Avocados <span style="color:black; font-size:12px;">(Per Fruit)</span><span class="price-style"><em>KES 50.00</em></span></h3>
                                          <div id="avocado_details">
                                            <h5>Rich in Heart-Healthy Monounsaturated Fatty Acids</h5>
                                            <a data-name="Avocados" data-price="50" onclick="avocado_pluminus()" href="#0" class="add-to-cart cd-add-to-cart">Add To Basket</a>
                                          </div>

                                          <div id="avocado_quantity" class="hide">
                                          <div class="container text-center">
                                            <h4 class="spacing-small" style="text-decoration:em">How Many? <h4/>

                                            <span id="decrementButtonAvocado"> <i id="minus-button-style" class="fa fa-minus-circle"></i> </span>
                                              <span type="number" id="currentCountAvocado">1</span>
                                            <span data-name="Avocados" data-price="50" class="add-to-cart" id="incrementButtonAvocado"> <i id="plus-button-style" class="fa fa-plus-circle"></i> </span>
                                          </div>
                                        </div>
                                          </div>
                                    </article>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <article class="feature feature-1">
                                        <a href="#0" class="block"> <img alt="Image" src="img/banana.jpg"> </a>
                                        <div class="feature__body boxed boxed--border">
                                          <h3 style="color:orange;" class="text-orange text-left">Bananas <span style="color:black; font-size:12px;">(Per Banana)</span><span class="price-style"><em>KES 20.00</em></span></h3>
                                          <div id="bananas_details">
                                            <h5>Has Nutrients That Moderate Blood Sugar Levels</h5>
                                            <a data-name="Bananas" data-price="20" onclick="bananas_pluminus()" href="#0" class="add-to-cart cd-add-to-cart">Add To Basket</a>
                                          </div>

                                          <div id="bananas_quantity" class="hide">
                                          <div class="container text-center">
                                            <h4 class="spacing-small" style="text-decoration:em">How Many? <h4/>

                                            <span id="decrementButtonBanana"> <i id="minus-button-style" class="fa fa-minus-circle"></i> </span>
                                              <span type="number" id="currentCountBanana">1</span>
                                            <span data-name="Bananas" data-price="20" class="add-to-cart" id="incrementButtonBanana"> <i id="plus-button-style" class="fa fa-plus-circle"></i> </span>
                                          </div>
                                        </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <article class="feature feature-1">
                                        <a href="#0" class="block"> <img alt="Image" src="img/strawberry.jpg"> </a>
                                        <div class="feature__body boxed boxed--border">
                                          <h3 style="color:orange;" class="text-orange text-left">Berries <span style="color:black; font-size:12px;">(Per Packet)</span><span class="price-style"><em>KES 50.00</em></span></h3>
                                          <div id="straw_details">
                                            <h5>Rich in vitamin C that boost immunity</h5>
                                            <a data-name="S.berries" data-price="50" onclick="straw_pluminus()" href="#0" class="add-to-cart cd-add-to-cart">Add To Basket</a>
                                          </div>

                                          <div id="straw_quantity" class="hide">
                                          <div class="container text-center">
                                            <h4 class="spacing-small" style="text-decoration:em">How Many? <h4/>

                                            <span id="decrementButtonStrawberry"> <i id="minus-button-style" class="fa fa-minus-circle"></i> </span>
                                              <span type="number" id="currentCountStrawberry">1</span>
                                            <span data-name="S.berries" data-price="50" class="add-to-cart" id="incrementButtonStrawberry"> <i id="plus-button-style" class="fa fa-plus-circle"></i> </span>
                                          </div>
                                        </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <article class="feature feature-1">
                                        <a href="#0" class="block"> <img alt="Image" src="img/watermelon.jpg"> </a>
                                        <div class="feature__body boxed boxed--border">
                                          <h3 style="color:orange;" class="text-orange text-left">Melons <span style="color:black; font-size:12px;">(Per Melon)</span><span class="price-style"><em>KES 100.00</em></span></h3>
                                          <div id="melon_details">
                                            <h5>Rich in vitamin A & C for healthy skin</h5>
                                            <a data-name="W.melon" data-price="100" onclick="melon_pluminus()" href="#0" class="add-to-cart cd-add-to-cart">Add To Basket</a>
                                          </div>

                                        <div id="melon_quantity" class="hide">
                                       <div class="container text-center">
                                          <h4 class="spacing-small" style="text-decoration:em">How Many? <h4/>

                                          <span id="decrementButtonMelon"> <i id="minus-button-style" class="fa fa-minus-circle"></i> </span>
                                            <span type="number" id="currentCountMelon">1</span>
                                          <span data-name="W.melon" data-price="100" class="add-to-cart" id="incrementButtonMelon"> <i id="plus-button-style" class="fa fa-plus-circle"></i> </span>
                                        </div>
                                      </div>
                                    </div>
                                    </article>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <article class="feature feature-1">
                                        <a href="#0" class="block"> <img alt="Image" src="img/mangoes.jpg"> </a>
                                        <div class="feature__body boxed boxed--border">
                                          <h3 style="color:orange;" class="text-orange text-left">Mangoes<span style="color:black; font-size:12px;"> (Per Mango)</span><span class="price-style"><em>KES 50.00</em></span></h3>
                                          <div id="mango_details">
                                            <h5>Rich in vitamin C that boosts Immunity </h5>
                                            <a data-name="Mangoes" data-price="50" onclick="mango_pluminus()" href="#0" class="add-to-cart cd-add-to-cart">Add To Basket</a>
                                          </div>

                                          <div id="mango_quantity" class="hide">
                                          <div class="container text-center">
                                            <h4 class="spacing-small" style="text-decoration:em">How Many? <h4/>

                                            <span id="decrementButtonMango"> <i id="minus-button-style" class="fa fa-minus-circle"></i> </span>
                                              <span type="number" id="currentCountMango">1</span>
                                            <span data-name="Mangoes" data-price="50" class="add-to-cart" id="incrementButtonMango" class="cd-add-to-cart"> <i id="plus-button-style" class="fa fa-plus-circle"></i> </span>
                                          </div>
                                        </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                      </div>
                      </section>


                      <nav class="navbar navbar-inverse bg-inverse fixed-bottom bg-faded">

            <div class="col">

                    <i data-toggle="modal" data-target="#cart" class="fa fa-shopping-basket for-checkout" aria-hidden="true"><span class="total-count"></span></i>
            <!--  <button class="clear-cart btn btn-danger">X</button></div> -->

        </div>

    </nav>

            </section>

            <a class="back-to-top inner-link active" href="#header" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
            <section class="text-center bg--dark" id="cta" >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-6">
                            <div class="cta">
                                <p class="lead"> Join the frootly family and be part of the healthy revolution</p>

                                <!-- <a onclick="myFunction()" class="btn btn--primary btn--lg type--uppercase inner-link" href="#show-more"> <span class="btn__text">
                            Join frootly</span> </a> -->
                                <br/><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="font-family:Raleway;" id="show-more">
                            <div class="row">
                                <div class="col-md-5 col-sm-7">
                                    <h3>Enter Your Details To Join The Frootly Community</h3>

                                    <?php if ($isPost): ?>
            <?php if ($successful): ?>
              <div class="alert alert-info">You have successfully registered</div>
            <?php else: ?>
              <div class="alert alert-danger">Please Confrim Your Details!</div>
            <?php endif; ?>
            <?php endif; ?>

                                    <hr class="short">

                                    <form method="post" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#cta">
                                        <div class="row">
                                            <div class="col-xs-12"> <input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Your Name" required> </div>
                                            <div class="col-xs-12"> <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email Address" required> </div>
                                            <div class="col-xs-12"> <input type="text" name="phoneno" value="<?php echo $phoneno;?>" placeholder="Phone number" required> </div>
                                            <div class="col-xs-12">
                                                <div class="input-checkbox"> <input type="checkbox" name="agree"> </div> <span></span> </div>
                                            <div class="col-xs-12"><button data-tooltip="Thank You For Subscribing" class="btn btn--primary btn--lg type--uppercase" type="submit" name="submit">Subscribe</button></div>
                                          </hr>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
            </section>


            <footer  style="padding-bottom:10px; padding-top:30px;" class="footer-3 text-center-xs space--xs footer-style">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8"> <img style="max-height:2.07142857em;" alt="Image" class="logo" src="img/logo-frootly3.png">

                        </div>
                        <div class="col-sm-4 text-right text-right-xs">
                            <ul class="social-list list-inline list--hover">
                                <li><a href="#"><i style="color:#ffffff;" class="socicon socicon-google icon icon--xs"></i></a></li>
                                <li><a href="#"><i style="color:#ffffff;" class="socicon socicon-twitter icon icon--xs"></i></a></li>
                                <li><a href="#"><i style="color:#ffffff;" class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                <li><a href="#"><i style="color:#ffffff;" class="socicon socicon-instagram icon icon--xs"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left text-center-xs"> <span style="color:black; font-family:Raleway; font-weight:bolder;" class="type--fine-print">© <span style="color:black; font-family:Raleway; font-weight:bolder;" class="update-year"></span> Frootly.</span> <a style="color:black; font-family:Raleway; font-weight:bolder;" class="type--fine-print" href="#">Privacy Policy</a> <a style="color:black; font-family:Raleway; font-weight:bolder;" class="type--fine-print" href="#">Legal</a> </div>
                    </div>
                </div>
            </footer>



            <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <img style="width:10%;" src="img/logo-frootly.png"><h2 class="modal-title" id="exampleModalLabel">Your Frootly Basket</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span style="font-size:200%; color:;" aria-hidden="true">×</span>
                    </button>
                  </div>

                  <div>
                    <div id="media-sm-cart" class="container-fluid">
                    <table style="font-family:Raleway;" class="show-cart table">

                    </table>
                  </div>

                    <div style="line-height:0em;">
                      <p style="font-size:16px; padding-right:9%;" class="text-right"><strong>Price:</strong> KES <i><strong><span style="color:#fe9c0e; font-weight:bolder; font-size:20px;" class="total-cart"></span></strong><span style="color:#fe9c0e; font-weight:bolder; font-size:20px;">/=</span></i></p>
                      <p style="font-size:16px; padding-right:9%;" class="text-right"><strong>Transit:</strong> KES <i><strong><span id="transit"style="color:#fe9c0e; font-weight:bolder; font-size:20px;">200/=</span></strong></i></p>
                      <p style="font-size:19px; font-weight:bolder; padding-right:9%; padding-top:2%; padding-bottom:2%;" class="text-right">Total price: KES <i><strong><span style="color:#fe9c0e; padding-left:1%; font-weight:bolder; font-size:25px;" class="total-total"></span></strong></i></p>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <a id="thursday" style="background-color:white;" data-dismiss="modal" class="btn btn--primary">
                        <span style="color:#fe9c0c; font-family:Raleway;" class="btn__text">Keep Shopping</span>
                      </a>
                    <button id="order-style" style="border:0px; background-color:#7c9330; font-family:Raleway;" onclick="window.location.href='checkout.php'" class="btn btn-primary">Order now</button>
                  </div>
                </div>
              </div>
            </div>




<script>



function apple_pluminus(){
  var apple_details = $('#apple_details');
  var apple_quantity = $('#apple_quantity');
  apple_details.toggleClass("hide");
  apple_quantity.toggleClass("hide");
}

function avocado_pluminus(){
  var avocado_details = $('#avocado_details');
  var avocado_quantity = $('#avocado_quantity');
  avocado_details.toggleClass("hide");
  avocado_quantity.toggleClass("hide");
}

function bananas_pluminus(){
  var bananas_details = $('#bananas_details');
  var bananas_quantity = $('#bananas_quantity');
  bananas_details.toggleClass("hide");
  bananas_quantity.toggleClass("hide");
}

function straw_pluminus(){
  var straw_details = $('#straw_details');
  var straw_quantity = $('#straw_quantity');
  straw_details.toggleClass("hide");
  straw_quantity.toggleClass("hide");
}

function melon_pluminus(){
  var melon_details = $('#melon_details');
  var melon_quantity = $('#melon_quantity');
  melon_details.toggleClass("hide");
  melon_quantity.toggleClass("hide");
}

function mango_pluminus(){
  var mango_details = $('#mango_details');
  var mango_quantity = $('#mango_quantity');
  mango_details.toggleClass("hide");
  mango_quantity.toggleClass("hide");
}

function mybasket(){
  var y =
  document.getElementById('show-basket');
  if (y.style.display === 'none')
  {
    y.style.display = 'block';
  }else {
    y.style.display = 'none';
  }
}

            function myFunction(){
                var x =
            document.getElementById('show-more');
            if (x.style.display === 'none')
            {
                x.style.display = 'block';
            } else {
               x.style.display = "none";
            }
        }


        // window.onload = shoppingCart.clearCart();
</script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/flickity.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/custom-scripts.js"></script>

    </body>

</html>
