<!DOCTYPE html>
<html lang="en">
<head>

  <title>Subha Prada - Dream Home</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Infinite is a multipurpose landing page template and it is very easy to use and customizable">
  <meta name="keywords" content="creative, Bootstrap, Start Up, Multi-pupose, Landing, Business, css3, html5, responsive">
  <meta name="author" content="Naveen">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicon -->
  <!--<link rel="shortcut icon" href="img/favicon/icon1.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" type="image/x-icon" href="img/favicon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" type="image/x-icon" href="img/favicon/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" type="image/x-icon" href="img/favicon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" type="image/x-icon" href="img/favicon/apple-touch-icon-57-precomposed.png">-->

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


  <!-- Font Icons -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/etlinefont.css">

  <!-- Animation -->
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

  <!-- Custom Styles -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Google Web Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- main-menu -->
  <nav class="main-menu navbar navbar-down navbar-fixed-top">
    <div class="container">

      <a class="navbar-brand goto" href="#"><img src="img/logo/icon1.png" alt="Your logo"></a>

      <button type="button" class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="social_container">
        <div class="social_wraper">

          <ul class="social">
            <li><a href="https://www.facebook.com/subhapradabuilders/" target="_blank" class="fa fa-facebook facebook"></a></li>
            <li><a href="#" target="_blank" class="fa fa-twitter twitter"></a></li>
            <li><a href="#" target="_blank" class="fa fa-google-plus google-plus"></a></li>
          </ul>
        </div>
      </div>

      <div class="collapse navbar-collapse navMenuCollapse">
        <ul class="nav">
          <li><a href="#services">Services</a></li>
          <!--<li><a href="#about">About</a></li>-->
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pricing_table">Pricing</a></li>
          <li><a href="#testimonial">Testimonial</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- main-menu end -->



<!-- main-content start -->
<div id="main-content">


  <!-- .intro-video -->
 <section class="intro intro-video dark-bg">
  <div class="color_overlay"></div>

  <div class="slider-fade-bg">
    <div class="slide">
      <div class="cover-bg" style="background-image: url(img/background/1.png);"></div>
    </div>
    <div class="slide">
      <div class="cover-bg" style="background-image: url(img/background/2.png);"></div>
    </div>
    </div>


  <div class="container double-padding">
    <div class="hero-text text-center">
      <h2 class="title">SUBHA PRADA</h2>
      <h1 class="slogan" >A Dream House, Get A One For Yourself.</h1>
      <h2 class="sub">Get The Most Reasonable rates. JOIN US.</h2>
    </div>
    <div class="fast-subscribe-form text-center">
      <?php
        if (isset($_POST['submit'])){
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "SubhaPrada";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection

          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          if(isset($_POST['name']))
            $name = $_POST['name'];
          else $name = null;

          if(isset($_POST['email']))
            $email = $_POST['email'];
          else $email = null;

          $stmt = $conn->prepare("INSERT INTO newsletters (name, email) VALUES (?, ?)");
          $stmt->bind_param('ss', $name, $email);

          $stmt->execute();

          echo "Thanks for the details!!! We will contact you shortly.";

          $stmt->close();
          $conn->close();

        }

      ?>
      <form class="mailchimp mar-cen" action="" method="post">
        <div class="input-group mar-bottom-1">

          <input type="text" id="name" name="name" class="form-control input-box" placeholder="Your Name" required>
          <input type="email" id="email" name="email" class="form-control input-box" placeholder="Email Address">
          <span class="input-group-btn input-box">
            <input class="btn btn-primary" type="submit" id="submit" name="submit" value="Subscribe »">
          </span>
        </div>
      </form>
        <p>
          * We don’t share any of your personal information with anyone<br>
           It's just a way to be connected. For more information <a href="#contact" class="goto">Contact Us</a>.
        </p>
    </div>
  </div>

</section>
<!-- .intro-video end -->



  <!-- features-grid -->
  <section id="features" class="features-grid pad-top-1 pad-bottom-2 bb-1">
    <div class="container">

      <header class="heading_1 text-center">
        <i class="icon icon-happy"></i>
        <h2 class="main_title">
          <span class="sub_title">Society Features</span>
          What we <span class="base-highlight">do</span>
        </h2>
      </header>


      <div class="row text-center">

        <div class="col-sm-4">
          <i class="icon-presentation icon-color-1"></i>
          <h4>Builders</h4>
          <p>We are builders that help others to build their dream apartments and homes.</p>
        </div>
        <div class="col-sm-4">
          <i class="icon-lightbulb icon-color-2"></i>
          <h4>Designers</h4>
          <p>And yeah we are designers too and take complete care of your interior and exteriors to cherish your great memories.</p>
        </div>
        <div class="col-sm-4">
          <i class="icon-mobile icon-color-3"></i>
          <h4>Long run partner</h4>
          <p>We are just not for creation we become a backend of your life as a partner of yours for complete life. We share a special bond with our customers.</p>
        </div>

      </div>
    </div>
  </section>
  <!-- features-grid end -->



<!-- content-section -->
<section id="content" class="content-section padding">
  <div class="container">

    <header class="heading_1 text-center">
      <i class="icon icon-clipboard"></i>
      <h2 class="main_title">
        <span class="sub_title">Flats Description</span>
        Our <span class="base-highlight">Apartments</span>
      </h2>
    </header>

    <div class="row">

      <div class="col-sm-8">
        <div class="content_slide_1">

          <div class="item">
            <img class="img-responsive" src="img/background/Flat1.png" alt="Image">
          </div>

          <div class="item">
            <img class="img-responsive" src="img/background/Flat2.png" alt="Image">
          </div>

          <div class="item">
            <img class="img-responsive" src="img/background/Flat3.png" alt="Image">
          </div>

          <div class="item">
            <img class="img-responsive" src="img/background/Flat4.png" alt="Image">
          </div>

        </div>
      </div>

      <div class="col-sm-4">


        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel">
            <div class="title" id="headingOne">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">First Product
                <p>2BHK - South Facing</p>
              </a>
            </div>
            <div id="collapseOne" class="desc panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              It is two bedroom falt with south facing and the total area of this flat is 1290 sq.ft. Consisting of two balconies for a great view of 270 degrees.
            </div>
          </div>


          <div class="panel">
            <div class="title" id="headingTwo">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Second Product
                <p>2BHK - North Facing</p>
              </a>
            </div>
            <div id="collapseTwo" class="desc panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              It is two bedroom falt with north facing and the total area of this flat is 1200 sq.ft. Consisting of only one balcony for a great view from your master bedroom.
            </div>
          </div>


          <div class="panel">
            <div class="title" id="headingThree">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Third Product
                <p>2BHK - North Facing</p>
              </a>
            </div>
            <div id="collapseThree" class="desc panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              It is two bedroom falt with north facing and the total area of this flat is 1290 sq.ft. Consisting of two balconies for a great view of 270 degrees.
            </div>
          </div>


        <div class="panel">
          <div class="title" id="headingFour">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Fourth Product
              <p>2BHK - South Facing</p>
            </a>
          </div>
          <div id="collapseThree" class="desc panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            It is two bedroom falt with south facing and the total area of this flat is 1200 sq.ft. Consisting of only one balcony for a great view from your master bedroom.
          </div>
        </div>


      </div>

    </div>

  </div>
</section>
<!-- content-section end -->




<!-- services -->
<section id="services" class="services padding gray-bg" data-stellar-background-ratio="0.3">
  <div class="container">

    <header class="heading_1 text-center">
      <i class="icon icon-tools"></i>
      <h2 class="main_title">
        <span class="sub_title">Have a look at the fascinating services that we provide</span>
        Services We <span class="base-highlight">Provide</span>
      </h2>
    </header>


    <div class="row">

      <div class="col-md-4 service-category col-sm-6">
       <div class="main-service">
         <h4>Interiors</h4>
         <i class="icon-gift icon-color-1"></i>
         <div class="sub-services">
           <h4>Interiors</h4>
           <ul>
             <li><a href="#">3 side open flats</a></li>
             <li><a href="#">Vastu Compliant Suites</a></li>
             <li><a href="#">Separate Dining and Prayer Room</a></li>
           </ul>
         </div>
       </div>

     </div>

     <div class="col-md-4 service-category col-sm-6">
       <div class="main-service">
         <h4>Exteriors</h4>
         <i class="icon-paintbrush icon-color-4"></i>
         <div class="sub-services">
           <h4>Exteriors</h4>
           <ul>
             <li><a href="#">Swimming Pool</a></li>
             <li><a href="#">Club Room & Senior Citizen Lounge</a></li>
             <li><a href="#">24 Hours Security </a></li>
           </ul>
         </div>
       </div>

     </div>

     <div class="col-md-4 service-category col-sm-6">
       <div class="main-service">
         <h4>Other Amenities</h4>
         <i class="icon-lightbulb icon-color-5"></i>
         <div class="sub-services">
           <h4>Other Amenities</h4>
           <ul>
             <li><a href="#">Near to Koramagla</a></li>
             <li><a href="#">Conencted via NH-7</a></li>
             <li><a href="#">Great Education Institutes nearby</a></li>
           </ul>
         </div>
       </div>

     </div>



  </div>
</div>
</section>
<!-- services end -->


 <!-- about-us -->

<!-- about-us end -->




 <!-- portfolio -->
 <section id="portfolio" class="portfolio  bg-color3 pad-top-1">

  <header class="heading_1 text-center">
    <i class="icon icon-mobile"></i>
    <h2 class="main_title">
      <span class="sub_title">Portfolio</span>
      Our <span class="base-highlight">Works</span>
    </h2>
  </header>


  <div id="grid-container" class="bg-color1">
      <ul class="row">

        <li class="col-md-3 col-sm-6 item web_dev web-design">
          <div class="item-wrapper">
            <div class="image">
              <a href="img/portfolio/Flat1.png" class="image_pop" title="Project Title">
              <img class="img-responsive" src="img/portfolio/Flat1.png" alt="Portfolio" />
              </a>
            </div>
            <div class="text">
              <h5 class="h6"><a href="#">South Facing Flat</a></h5>
              <span>by <strong>White Stone</strong></span>
            </div>
          </div>
        </li>

        <li class="col-md-3 col-sm-6 item web_dev web-design">
          <div class="item-wrapper">
            <div class="image">
              <a href="img/portfolio/Flat2.png" class="image_pop" title="Project Title">
              <img class="img-responsive" src="img/portfolio/Flat2.png" alt="Portfolio" />
              </a>
            </div>
            <div class="text">
              <h5 class="h6"><a href="#">South Facing Flat [East Alt Op]</a></h5>
                <span>by <strong>White Stone</strong></span>
            </div>
          </div>
        </li>

        <li class="col-md-3 col-sm-6 item web_dev web-design">
          <div class="item-wrapper">
            <div class="image">
              <a href="img/portfolio/Flat3.png" class="image_pop" title="Project Title">
              <img class="img-responsive" src="img/portfolio/Flat3.png" alt="Portfolio" />
              </a>
            </div>
            <div class="text">
              <h5 class="h6"><a href="#">North Facing Flat</a></h5>
              <span>by <strong>White Stone</strong></span>
            </div>
          </div>
        </li>

        <li class="col-md-3 col-sm-6 item web-design uncategorized">
          <div class="item-wrapper">
            <div class="image">
              <a href="img/portfolio/Flat4.png" class="image_pop" title="Project Title">
              <img class="img-responsive" src="img/portfolio/Flat4.png" alt="Portfolio" />
              </a>
            </div>
            <div class="text">
              <h5 class="h6"><a href="#">North Facing Flat [East Alt Op]</a></h5>
              <span>by <strong>White Stone</strong></span>
            </div>
          </div>
        </li>

    </ul>




  </div>

</section>
<!-- portfolio end -->



 <!-- statistics -->
 <section id="statistics" class="statistics text-center">

  <div class="counter_wraper single-padding cover-bg dark-bg" data-stellar-background-ratio="0.3" style="background-image: url(img/background/bg24.jpg);">
    <div class="container">

     <h3 class="h4 mar-bottom-1">70% People Belive Another Consumer's Opinion Posted Online</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 count">
          <i class="icon-facebook"></i>
          <span data-from="500" data-to="5000" data-speed="5000"></span>
          <p>Facebook Like</p>
        </div>
        <div class="col-md-3 col-sm-6 count">
          <i class="icon-twitter"></i>
          <span data-from="700" data-to="3000" data-speed="5000"></span>
          <p>Twitter Followers</p>
        </div>
        <div class="col-md-3 col-sm-6 count">
          <i class="icon-happy"></i>
          <span data-from="100" data-to="900" data-speed="5000"></span>
          <p>Happy Clients</p>
        </div>
        <div class="col-md-3 col-sm-6 count">
          <i class="icon-globe"></i>
          <span data-from="500" data-to="7000" data-speed="10000"></span>
          <p>Flats Remaining</p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- statistics end -->




 <!-- pricing-table -->
 <section id="pricing_table" class="pricing-tables bg-color3 single-padding">
  <div class="container  text-center">

    <header class="heading_1 text-center">
      <i class="icon icon-presentation"></i>
      <h2 class="main_title">
        <span class="sub_title">Apartment Packages</span>
        Select your <span class="base-highlight">Best deal !</span>
      </h2>
    </header>

    <div class="row">
      <div class="col-sm-6">
        <div class="pricing-table padding">
          <h5 class="text-uppercase">Type 1</h5>
          <h4 class="price">1290</h4>
          <p class="lead">Sq.ft.</p>
          <p class="lead">₹2800 per sq.ft.</p>
          <ul>
            <li><i class="icon-key"></i><strong>2BHK </strong>Apartment</li>
            <li><i class="icon-tools-2"></i><strong>Swimming</strong> Pool</li>
            <li><i class="icon-lightbulb"></i><strong>One Time</strong> Investment</li>
            <li><i class="icon-globe"></i><strong>24/7</strong> Security</li>
            <li><i class="icon-mobile"></i><strong>Big Two</strong> Balconies</li>
          </ul>
          <a class="btn btn-primary" href="#contact">Call Us!!!</a>
          <p>
            <br> Buy a One for you Now!!!
          </p>
        </div>
      </div>

      <div class="col-sm-6">

        <div class="pricing-table suggested dark-bg padding">

          <h5 class="text-uppercase">Type 2</h5>
          <h4 class="price">1200</h4>
          <p class="lead">Sq.ft.</p>
          <p class="lead">₹2800 per sq.ft.</p>
          <ul>
            <li><i class="icon-key"></i><strong>2BHK </strong>Apartment</li>
            <li><i class="icon-tools-2"></i><strong>Swimming</strong> Pool</li>
            <li><i class="icon-lightbulb"></i><strong>One Time</strong> Investment</li>
            <li><i class="icon-globe"></i><strong>24/7</strong> Security</li>
            <li><i class="icon-mobile"></i><strong>Big One</strong> Balcony/li>
          </ul>
          <a class="btn btn-primary btn-primary-white"href="#contact" >Call Us!!!</a>
          <p>
            <br> Buy a One for you Now!!!
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- pricing-table -->


 <!-- client-testimonial testimonial -->
 <section id="testimonial" class="client-testimonial dark-bg text-center padding pad-bottom-2" data-stellar-background-ratio="0.3" style="background-image: url(img/background/bg12.jpg);">
  <div class="container">
    <div class="row">

      <div class="col-md-12 testmonial_slider_1">

        <div class="testimonial">
          <img src="img/testimonial/1.png" alt="Testimonial" class="mar-bottom-1 mar-cen">
          <p class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </p>
          <p class="context mar-bottom-1">The most appealing part of the theme it's very clean and light. I liked the level of the provided service. <br> It reveals an individual approach to each customer</p>
          <span class="mar-bottom-1"><i class="fa fa-twitter twitter"></i> @someone</span>
        </div>

        <div class="testimonial">
          <img src="img/testimonial/2.png" alt="Testimonial" class="mar-bottom-1 mar-cen">
          <p class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </p>
          <p class="context mar-bottom-1">The most appealing part of the theme it's very clean and light. I liked the level of the provided service. <br> It reveals an individual approach to each customer</p>
          <span class="mar-bottom-1"><i class="fa fa-facebook facebook"></i> @someone</span>
        </div>


      </div>
    </div>


  </div>
</section>
<!-- client-testimonial -->

 <!-- contact -->
 <section id="contact" class="contact cover-bg padding">
  <div class="container">

  <header class="heading_1 text-center">
      <i class="icon icon-chat"></i>
      <h2 class="main_title">
        <span class="sub_title">Contact Us</span>
        Say <span class="base-highlight">Hello! </span>
      </h2>
    </header>

    <div class="row">


    <div class="col-md-7">
        <?php
          if (isset($_POST['contact-submit'])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "SubhaPrada";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if(isset($_POST['contact-name']))
              $name = $_POST['contact-name'];
            else $name = null;

            if(isset($_POST['contact-email']))
              $email = $_POST['contact-email'];
            else $email = null;

            if(isset($_POST['contact-subject']))
              $subject = $_POST['contact-subject'];
            else $subject = null;

            if(isset($_POST['contact-message']))
              $message = $_POST['contact-message'];
            else $message = null;

            $stmt = $conn->prepare("INSERT INTO Visitors (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssss', $name, $email, $subject, $message);

            $stmt->execute();

            echo "Query sent. We will contact you asap";

            $stmt->close();
            $conn->close();

          }

        ?>
          <!-- FORM -->
          <form id="contact-form" class="contact-form mar-z" role="form" action="" method="post">
            <div class="field-wrapper form-group col-md-6">
              <div class="help-block with-errors form-tooltip"></div>
              <input class="form-control input-box" id="contact-name" type="text" name="contact-name" placeholder="Your Name" data-error="Write Down Your Name Please !" required>
            </div>

            <div class="field-wrapper form-group col-md-6">
              <div class="help-block with-errors form-tooltip"></div>
              <input class="form-control input-box" id="contact-email" type="email" name="contact-email" placeholder="Email"  data-error="Bruh, that email address is invalid" required>
            </div>

            <div class="field-wrapper form-group col-md-12">
              <div class="help-block with-errors form-tooltip"></div>
              <input class="form-control input-box" id="contact-subject" type="text" name="contact-subject" placeholder="Subject" data-error="Subject Is Empty !" required>
            </div>

            <div class="field-wrapper form-group col-md-12">
              <div class="help-block with-errors form-tooltip"></div>
              <textarea class="form-control textarea-box" id="contact-message" rows="7" name="contact-message" placeholder="Your Message" data-error="This field can not be empty." required></textarea>
            </div>
            <div class="col-md-12 form-group">
              <h6 class="form-success">You Message was sent successfully ! </h6>
              <h6 class="form-error">You Message Wasn't Sent Try Again ! </h6>
              <input class="btn btn-primary mar-top-1" type="submit" id="contact-submit" name="contact-submit" value="submit">
            </div>
          </form><!-- FORM END-->

      </div>


      <div class="col-md-4">

       <!-- GOOGLE MAP -->
        <!-- end .google-map -->
        <div style="height:400px;width:550px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Subha+Prada+builders+-+WhiteStone,+Anekal+Main+Road,+Electronics+City+Phase+1,+Bengaluru,+Karnataka,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embedded-map-code" href="https://www.hostingreviews.website/inmotion-hosting-review" id="get-map-data">inmotion hosting</a><style>#gmap-canvas .map-generator{max-width: 100%; max-height: 100%; background: none;</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=8f443393-f048-edac-0aa4-f98d21c463ff&c=embedded-map-code&u=1467386773" defer="defer" async="async"></script>

    </div>

  </div>

</section>


<section class="content-contact-section gray-bg">
          <div class="container">
              <div class="row right-row-border">
                  <div class="col-sm-4">
                      <div class="content-contact">
                          <div class="icon"><i class="icon-phone"></i></div>
                          <div class="key">Have a question?</div>
                          <div class="val"><a href="tel:1234567890">+91 7022595535</a></div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="content-contact">
                          <div class="icon"><i class="icon-clock"></i></div>
                          <div class="key">Call Mon - Sun</div>
                          <div class="val">10:00am to 10:00pm</div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="content-contact">
                          <div class="icon"><i class="icon-chat"></i></div>
                          <div class="key">Drop us an email</div>
                          <div class="val"><a href="mailto:stejvinay@gmail.com">stejvinay@gmail.com</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

<!-- contact end -->



<section  class="cta-4 bg-color2 dark-bg">
  <div class="container">
    <div class="row flex-row-center">
      <div class="col-md-9">
        <h2 class="h3 fw-300 text-uppercase">Book Your <strong>DREAM HOUSE</strong> Right Now </h2>
      </div>

      <div class="col-md-3">
        <a class="btn btn-default-white">CALL OR MAIL US</a>
      </div>
      <div class="col-md-3">
        <a class="btn btn-default-white" href="emi.html" target="_blank">Calculate EMI</a>
      </div>

    </div>
  </div>
</section>
<!-- cta-4 call to action end -->




  </div>
<!-- main-content end -->



<!-- footer -->
<footer class="footer bg-color1 padding dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 copyright">
      <a href="#"></a><span >© 2016 Zense<br>

        Designed by Zense</a></span>
        </div>
      <div class="col-md-8 text-right">
        <ul class="soc-list">
          <li><a href="https://www.facebook.com/subhapradabuilders/" target="_blank" class="fa fa-facebook facebook"></a></li>
          <li><a href="#" target="_blank" class="fa fa-twitter twitter"></a></li>
          <li><a href="#" target="_blank" class="fa fa-google-plus google-plus"></a></li>
        </ul>
      </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->


   <!-- Back to top -->
   <a href="#0" class="back-to-top-link">Top</a>
    <!-- Back to top end -->





<!-- Js Files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/inview.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
