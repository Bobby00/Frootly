<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Frootly - Your one stop shop for fresh & tasty Fruits</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme-tangerine.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/location-api.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/test4.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/font-raleway.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/logo-frootly.png"/>

        <script>
          // This example displays an address form, using the autocomplete feature
          // of the Google Places API to help users fill in the information.

          // This example requires the Places library. Include the libraries=places
          // parameter when you first load the API. For example:
          // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

          var placeSearch, autocomplete;
          var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
          };

          function initAutocomplete() {

            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
          }

          function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
              document.getElementById(component).value = '';
              document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
              var addressType = place.address_components[i].types[0];
              if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
              }
            }
          }

          // Bias the autocomplete object to the user's geographical location,
          // as supplied by the browser's 'navigator.geolocation' object.
          function geolocate() {
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                  center: geolocation,
                  radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
              });
            }
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOm7uQGfuqQcGE_RsHbx-ifpILyOo4nkc&libraries=places&callback=initAutocomplete" async defer></script>

    </head>

    <?php

    include 'conct.php';

    // define variables and set to empty values
    $first_name = $last_name = $email = $phoneno = $location_main = $street = $address = $city = $state = $zip_code = $country = $payment_method = $customer_order = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $first_name = test_input($_POST["first_name"]);
      $last_name = test_input($_POST["last_name"]);
      $email = test_input($_POST["email"]);
      $phoneno = test_input($_POST["phoneno"]);
      $location_main = test_input($_POST["location_main"]);
      $street = test_input($_POST["street"]);
      $address = test_input($_POST["address"]);
      $city = test_input($_POST["city"]);
      $state = test_input($_POST["state"]);
      $zip_code = test_input($_POST["zip_code"]);
      $country = test_input($_POST["country"]);
      $payment_method = test_input($_POST["payment_method"]);
      $customer_order = test_input($_POST["customer_order"]);

    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders (first_name, last_name, email, phoneno, location_main, street, address, city, state, zip_code, country, payment_method, customer_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $first_name, $last_name, $email, $phoneno, $location_main, $street, $address, $city, $state, $zip_code, $country, $payment_method, $customer_order);

    // set parameters and execute
    $isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $location = $_POST['location_main'];
    $street = $_POST['street'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];
    $payment_method = $_POST['payment_method'];
    $customer_order = $_POST['customer_order'];
 var_dump( $_POST);
    $successful = $stmt->execute();
     var_dump( $successful);
     if ($successful === True) {
       // If you are using Composer
       require 'sendgrid/vendor/autoload.php';

       // If you are not using Composer (recommended)
       // require("path/to/sendgrid-php/sendgrid-php.php");

       $customer_order = ('
       <html>
       <head>
       <title>Your order was Successfull</title>
       </head>
       <body>
       <p style="color:#7c9330;">Hi '.$first_name.',</p>
       <p>Your Frootly fruit basket order was successfully placed and will delivered to your location.</p>
       <p> We will personally contact you shortly to confirm your preferred time of delivery. </p>
       <br>
       <p>Here is an overview of your Order</p>
       '.$customer_order.'
       <p>Thank You for shopping with Frootly</p>
       </body>
       </html>');

       $from = new SendGrid\Email(null, "Edwarobert7@gmail.com");
       $subject = "Your Order Has Successfully Been Received";
       $to = new SendGrid\Email(null, $email);
       $content = new SendGrid\Content("text/html", $customer_order);
       $mail = new SendGrid\Mail($from, $subject, $to, $content);

       //$apiKey = getenv('SENDGRID_API_KEY');
       $apiKey = "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";
       $sg = new \SendGrid($apiKey);

       $response = $sg->client->mail()->send()->post($mail);
       echo $response->statusCode();
       echo $response->headers();
       echo $response->body();

      // mail("addres","subject","msg");
     }
    // echo "New records created successfully";

    $stmt->close();
    $conn->close();


    ?>

    <body data-smooth-scroll-offset="77">

      <div class="nav-container">
          <div class="via-1506805086708" via="via-1506805086708" vio="frootly">
              <nav style="background-color:black; padding-bottom:1%; opacity:0.8;" class="bar bar-toggle bar--absolute">
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
                          <li class="h4"> <a  style="font-family:Raleway;" href="index.php">Home</a> </li>
                          <li class="h4"> <a  style="font-family:Raleway;" onclick="index.php" class="inner-link" href="#show-basket">Fruit baskets</a> </li>
                          <li class="h4"> <a  style="font-family:Raleway;" href="#">About us</a> </li>
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


<style>

.total-count {
  font-family: Raleway;
  font-size: 20px;
  position: absolute;
  top: 0%;
  font-weight: bolder;
  background-color: white;
  padding: 2px 2px 2px 2px;
  right: auto;;
  border-radius: 0px;
  color: #7c9330;
  margin-left: 5px;

}
.total-count:hover {
  font-family: Raleway;
  font-size: 20px;
  position: absolute;
  top: 0%;
  font-weight: bolder;
  background-color: white;
  padding: 2px 2px 2px 2px;
  right: auto;;
  border-radius: 0px;
  color: #7c9330;
  margin-left: 5px;

}

a.animated-button:link, a.animated-button:visited {
	position: relative;
	display: block;
	margin: 30px auto 0;
	padding: 14px 15px;
	color: #fff;
	font-size:14px;
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	letter-spacing: .08em;
	border-radius: 0;
	text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}
a.animated-button:link:after, a.animated-button:visited:after {
	content: "";
	position: absolute;
	height: 0%;
	left: 50%;
	top: 50%;
	width: 150%;
	z-index: -1;
	-webkit-transition: all 0.75s ease 0s;
	-moz-transition: all 0.75s ease 0s;
	-o-transition: all 0.75s ease 0s;
	transition: all 0.75s ease 0s;
}
a.animated-button:link:hover, a.animated-button:visited:hover {
	color: #FFF;
	text-shadow: none;
}
a.animated-button:link:hover:after, a.animated-button:visited:hover:after {
	height: 450%;
}
a.animated-button:link, a.animated-button:visited {
	position: relative;
	display: block;
	margin: 30px auto 0;
	padding: 14px 15px;
	color: #fff;
	font-size:14px;
	border-radius: 0;
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	letter-spacing: .08em;
	text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}

/* Thar Buttons */

a.animated-button.thar-one {
	color: #fff;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #F7CA18;
	transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}
a.animated-button.thar-one:hover {
	color: #fff !important;
	background-color: transparent;
	text-shadow: none;
}
a.animated-button.thar-one:hover:before {
	bottom: 0%;
	top: auto;
	height: 100%;
}
a.animated-button.thar-one:before {
	display: block;
	position: absolute;
	left: 0px;
	top: 0px;
	height: 0px;
	width: 100%;
	z-index: -1;
	content: '';
	color: #fff !important;
	background: #F7CA18;
	transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}
a.animated-button.thar-two {
	color: #fff;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #F7CA18;
	transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}
a.animated-button.thar-two:hover {
	color: #fff !important;
	background-color: transparent;
	text-shadow: ntwo;
}
a.animated-button.thar-two:hover:before {
	top: 0%;
	bottom: auto;
	height: 100%;
}
a.animated-button.thar-two:before {
	display: block;
	position: absolute;
	left: 0px;
	bottom: 0px;
	height: 0px;
	width: 100%;
	z-index: -1;
	content: '';
	color: #fff !important;
	background: #F7CA18;
	transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}
a.animated-button.thar-three {
	color: #fff;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #7c9330;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}
a.animated-button.thar-three:hover {
	color: #fff !important;
	background-color: transparent;
	text-shadow: nthree;
}
a.animated-button.thar-three:hover:before {
	left: 0%;
	right: auto;
	width: 100%;
}
a.animated-button.thar-three:before {
	display: block;
	position: absolute;
	top: 0px;
	right: 0px;
	height: 100%;
	width: 0px;
	z-index: -1;
	content: '';
	color: #fff !important;
	background: #7c9330;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}
a.animated-button.thar-four {
	color: #fff;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #fe9c0e;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}
a.animated-button.thar-four:hover {
	color: #fff !important;
	background-color: transparent;
	text-shadow: nfour;
}
a.animated-button.thar-four:hover:before {
	right: 0%;
	left: auto;
	width: 100%;
}
a.animated-button.thar-four:before {
	display: block;
	position: absolute;
	top: 0px;
	left: 0px;
	height: 100%;
	width: 0px;
	z-index: -1;
	content: '';
	color: #fff !important;
	background: #fe9c0e;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}
#next-step-3 {
  border-color: #7c9330;
  color: #fff;
  border-radius: 0px;
  border-width: 2px;
  background-color: #7c9330;
  font-size: 14px;
  margin-top: 30px;
  padding-left: 20px;
  letter-spacing:.08em;
  height: 55px;
}
</style>
            <section class="switchable bg--secondary image-background" data-overlay="5">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-8 col-lg-8">
                          <a id="modal-sm-show" style="background-color:#7c9330; color:white; padding:8px;" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-basket"></i> My Basket<span class="total-count"></span></a>

                          <div class="card-like">

                            <?php if ($isPost): ?>
    <?php if ($successful): ?>
      <div class="alert alert-info">Your Order Has Successfully Been Placed</div>
    <?php else: ?>
      <div class="alert alert-danger">Please Confrim Your Details!</div>
    <?php endif; ?>
    <?php endif; ?>

                            <br><br>
                                  <form method="post" autocomplete="on"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">

                                    <div style="font-family:Raleway;" class="p-details-step-1">
                                            <h2 class="text-center">Personal Details</h2>

                                            <h4 style="color:#7c9330;">How Can We Reach You?</h4>
                                            <hr class="short">

                                                <div class="row" style="margin-bottom:10%;">
                                                    <div class="col-xs-12 col-md-6 col-lg-6 col-sm-12 input-icon" style="margin-bottom:2%;"> <input id="autocomplete2" type="text" name="first_name" placeholder="First Name"> </div>
                                                    <div class="col-xs-12 col-md-6 col-lg-6 col-sm-12 input-icon" style="margin-bottom:2%;"> <input id="autocomplete2" type="text" name="last_name" placeholder="Second Name"> </div>
                                                    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="margin-bottom:2%;"> <input id="autocomplete2" type="email" name="email" placeholder="Email Address"> </div>
                                                    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12"> <input id="autocomplete2" type="text" name="phoneno" placeholder="Phone Number"> </div>

                                                </div>
                                                <!-- <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button thar-four">Learn more</a> </div> -->
                                                <div class="col-md-4 col-sm-4 col-xs-6"> <a href="#D-details-step-2" id="next-step-1" class="btn btn-sm animated-button thar-three inner-link">Next  🡪 </a> </div>

                                    </div>
                                  </div>




                                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">

                                    <div  style="font-family:Raleway; display:none;" id="D-details-step-2" class="D-details-step-2">
                                              <h2 class="text-center">Delivery Details</h2>

                                              <h4 style="color:#7c9330;">Where Do We Deliver?</h4>
                                              <hr class="short">


                                              <div class="input-wrapper">
                                                <div class="row">

                                                <div id="locationField">
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 input-icon"><i style="color:#7c9330; padding-right:10px;" class="search-icon fa fa-map-marker" aria-hidden="true"></i> <input id="autocomplete" placeholder="Enter city or town" onFocus="initAutocomplete()" name="location_main" onclick="geolocate()" type="text"></input>
                                                     </div>
                                                   </div>
                                                </div>
                                              </div>



                                              <br><br>

                                              <table  style="font-family:Raleway;" id="address">

                                                <tr>

                                                  <td class="labelqq">STREET</td>
                                                  <td class="slimField">
                                                    <input name="street" style="font-family:Raleway;" class="field" id="street_number" disabled="true"></input>
                                                  </td>

                                                    <td class="labelqq">ADDRESS</td>
                                                  <td class="wideField" colspan="3">
                                                    <input name="address" style="font-weight:bolder;" class="field" id="route" disabled="true"></input>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td class="labelqq">CITY</td>
                                                  <!-- Note: Selection of address components in this example is typical.
                                                       You may need to adjust it for the locations relevant to your app. See
                                                       https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
                                                  -->
                                                  <td class="wideField" colspan="3">
                                                    <input name="city" style="font-weight:bolder;" class="field" id="locality" disabled="true"></input>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td class="labelqq">STATE</td>
                                                  <td class="slimField">
                                                    <input name="state" style="font-weight:bolder;" class="field" id="administrative_area_level_1" disabled="true"></input>
                                                  </td>
                                                  <td class="labelqq">ZIP CODE</td>
                                                  <td class="wideField">
                                                    <input name="zip_code" style="font-weight:bolder;" class="field" id="postal_code" disabled="true"></input>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td class="labelqq">COUNTRY</td>
                                                  <td class="wideField" colspan="3"><input name="country" style="font-weight:bolder;" class="field" id="country" disabled="true"></input>
                                                  </td>
                                                </tr>
                                              </table>


                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6"> <a style="display:none;" href="#D-details-step-2" id="previous-step-1" class="btn btn-sm animated-button thar-four inner-link"> 🡨 Previous</a> </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6"> <a style="display:none;" href="#p-options-step3" id="next-step-2" class="btn btn-sm animated-button thar-three inner-link">Next  🡪 </a> </div>
                                    </div>






                                  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">

                                    <div style="font-family:Raleway; display:none;" id="p-options-step3" class="p-options-step3">

                                   <h2 class="text-center">Payment Options</h2>
                                   <h4 style="color:#7c9330;">Choose your preferred payment option</h4>
                                   <hr class="short">
                        <!-- <div class="row" style="padding-left:5%;">
                                     <div class="input-radio">
	                                      <input id="radio" type="radio" name="agree" />
	                                       <label for="checkbox"></label>
                                       </div>
                                     <div>
                                       <p style="font-weight:bolder; padding-left:10px;">M-pesa</p>
                                     </div>
                        </div> -->
                        <div class="row" style="padding-left:5%;">
                                       <br>
                                       <div class="input-radio">
  	                                      <input id="radio2" type="radio" name="payment_method" />
  	                                       <label for="checkbox"></label>

                                         </div>
                                         <div>
                                           <p style="font-size: 20px;padding-left:10px;">Pay On Delivery</p>
                                         </div>
                          </div>
                        <br><br>

                             </div>

                             <table style="display:none;" name="customer_order" class="show-cart2 table">

                             </table>
                             <input id="order_values" type="hidden" name="customer_order" value="6">

                             <div class="col-md-3 col-sm-3 col-xs-6"> <a style="display:none;" href="#D-details-step-2" id="previous-step-2" class="btn btn-sm animated-button thar-four inner-link"> 🡨 Previous</a> </div>
                             <div class="col-md-3 col-sm-3 col-xs-6"> <button type="submit" name="submit" style="display: none;" href="#0" id="next-step-3" class="btn btn-sm animated-button thar-three inner-link">CHECKOUT  🡪 </button> </div>
                           </form>

                           </div>




                        </div>
                      </div>
                        <div id="sticky-sidebar" class="col-sm-6 col-md-4 col-lg-4 col-xs-1">
                            <div class="pricing pricing-2 boxed boxed--border boxed--lg">
                              <h4 class="text-center">MY FRUIT BASKET</h4>
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-7">

                                  <table class="show-cart2 table">

                                  </table>
                                <!--  <ul>
                                          <li><span class="checkmark bg--primary-1"></span><span>5 delicious bananas</span></li>
                                          <li><span class="checkmark bg--primary-1"></span><span>3 apples</span></li>
                                          <li><span class="checkmark bg--primary-1"></span><span>10 Avocadoes</span></li>
                                          <li><span class="checkmark bg--primary-1"></span><span>2 packets straw berries</span></li>
                                          <li><span class="checkmark bg--primary-1"></span><span>3 Thorn melons</span></li>
                                      </ul> -->

                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-5 text-center" style="padding-top:5%;">
                                    <h5 style="font-family:Raleway;">TOTAL PRICE</h5> <span style="font-family:Raleway;" class="h1"><p class="total-total"></p></span>
                                    <p class="type--fine-print">Kenya Shillings</p>

                                </div>

                            </div>

                        </div>
                      </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>



<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title">MY FRUIT BASKET</h3>
        <button type="button" style="font-size:20px;" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-7">

            <table class="show-cart2 table">

            </table>
          <!--  <ul>
                    <li><span class="checkmark bg--primary-1"></span><span>5 delicious bananas</span></li>
                    <li><span class="checkmark bg--primary-1"></span><span>3 apples</span></li>
                    <li><span class="checkmark bg--primary-1"></span><span>10 Avocadoes</span></li>
                    <li><span class="checkmark bg--primary-1"></span><span>2 packets straw berries</span></li>
                    <li><span class="checkmark bg--primary-1"></span><span>3 Thorn melons</span></li>
                </ul> -->

          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-5 text-center" style="padding-top:5%;">
              <h5>TOTAL PRICE</h5> <span class="h1"><p class="total-total"></p></span>
              <p class="type--fine-print">Kenya Shillings</p>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



            <footer style="background-color:#fe9c0e; padding-bottom:10px; padding-top:30px;" class="footer-3 text-center-xs space--xs">
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




        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/flickity.min.js"></script>
        <script src="js/easypiechart.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/granim.min.js"></script>
        <script src="js/jquery.steps.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/custom-scripts.js"></script>

        <script>
    $(document).ready(function(){
        $("#previous-step-1").click(function(){
            $(".D-details-step-2, #previous-step-1, #next-step-2").fadeOut();
            $("#next-step-1").fadeIn();
        });
        $("#previous-step-2").click(function(){
            $(".p-options-step3, #next-step-3, #previous-step-2").fadeOut();
            $("#next-step-2, #previous-step-1").fadeIn();
        });
        $("#next-step-1").click(function(){
            $(".D-details-step-2, #next-step-2, #previous-step-1").fadeIn();
            $("#next-step-1").fadeOut();
        });
        $("#next-step-2").click(function(){
            $(".p-options-step3, #next-step-3, #previous-step-2").fadeIn();
            $("#next-step-2, #previous-step-1").fadeOut();
        });
    });
    </script>

    </body>
</html>
