<?php
//connection
$servername = "localhost";
$username = "id14869558_root";
$password = "";
$database = "id14869558_registration";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry unable to connect, We regret for inconvinenece");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i/Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


  <script src="js/bundle.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/shift.js"></script>
    <script>
        function page_selector(shown, hidden, hidden2) {
    document.getElementById(shown).style.display='block';
    document.getElementById(hidden).style.display='none';
    document.getElementById(hidden2).style.display='none';


    return false;
  }


  function myFunction() {
    
    document.getElementById("btn2").className = "nav-item";
    document.getElementById("btn3").className = "nav-item";


  }
  function myFunction2() {
      
      document.getElementById("btn2").className = "nav-item active";
      document.getElementById("btn3").className = "nav-item";

  }
  function myFunction3() {
      
      document.getElementById("btn2").className = "nav-item";
      document.getElementById("btn3").className = "nav-item active";

  }
    </script>

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo1.png" alt="MITAOE" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Speakers</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#hotels">Hotels</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#supporters">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
          <li><a href="#Page3">No. of Buyers</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The Annual<br><span><img src="img/TedX.png" alt=""><br>MITAOE</span></h1>
      <p class="mb-4 pb-0">10-12 January(2021), MIT Academy of Engineering, Alandi road, Pune - 412105</p>
      <a href="https://www.youtube.com/watch?v=nO0MXWslJXQ" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>TEDxMITAOE is an independently organized TED event by the students of MIT Academy of Engineering, which aims to bring to its stages ideas worth spreding from all over india. The phenomenal success of the TEDxMITAOE 2020 is a reflection of the ever-incresing dedication and enthuiasm that all the team had displayed on a continual basis.<br><br>
            This time we are back with new well known speakers and more exciting talks. <br><br>
            Theme for this edition of  TEDxMITAOE is INDEPENDENCE, is a well thought through AUTARKY of all that we stand for today.
            <br></p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>MIT Academy of Engineering, Alandi road, Pune - 412105</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Sunday to Monday<br>10-12 January (2021)</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Event Speakers</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3>abhishek upmanyu</h3>
                <p>Stand-UP Comedian and influencer</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Srushti Nerkar</a></h3>
                <p>Social innovator and a child prodigy working on water conservation</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Sanjay Lodha</a></h3>
                <p>Global Business Director for TUBACOAT</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Abhijit Banerjee</a></h3>
                <p>Economist</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Sachin Pilgaonkar</a></h3>
                <p>Marathi lead Actor</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">Show starts at 09:30 AM sharp and ends at 01:00 PM. Two Speakers for each day.<br>
        And on the last day a SUPRISE ME special unknown speaker... Get excited buddies for one and only unknown...</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2">09:30 AM</div>
              <div class="col-md-10">
                <p>Get entry through the tickets we gave you. Please keep the tickets with you till the last day. And enjoy the shows.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">9:45 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Abhishek Upamanu">
                </div>
                <h4>Keynote <span>Abhishek Upamanu</span></h4>
                <p>Lets laugh on us...</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">10:45 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo.png" alt="MITAOE">
                </div>
                <h4>MitAoE performers</h4>
                <p>Dance and Singing</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">11:30 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Srushti Nerker">
                </div>
                <h4>About Enovations <span>Shrushti Nerker</span></h4>
                <p>City's Independent Thinking.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">12:30 PM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo.png" alt="MITAOE">
                </div>
                <h4>MitAoe performers</h4>
                <p>Short play</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2">10:00 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Sanjay Lodha">
                </div>
                <h4>Business Independence<span>Sanjay Lodha</span></h4>
                <p>Be aware and furious</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">11:00 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo.png" alt="MITAOE">
                </div>
                <h4>Lets Play a Game</h4>
                <p>Interesting interaction with the audience.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">11:30 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Abhijit Banerjee">
                </div>
                <h4>Independent Economic lifestyl<span>Abhijit Banerjee</span></h4>
                <p>Think and analyze</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">12:30 PM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo.png" alt="MITAOE">
                </div>
                <h4>Quiz</h4>
                <p>A small Quiz contest</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2">10:00 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/5.jpg" alt="Sachin Pilgaonkar">
                </div>
                <h4>Life and Inter-dependences<span>Sachin Pilgaonkar</span></h4>
                <p>aayushya var bolu kahi...</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">11:00 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo.png" alt="MITAOE">
                </div>
                <h4>Interview</h4>
                <p>Chief Guest Interview...</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">11:50 AM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="unknown">
                </div>
                <h4>Guess The Guest</h4>
                <p>Suprise Entry</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2">12:50 PM</div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/logo.png" alt="MITAOE">
                </div>
                <h4>Thank YOU</h4>
                <p>Thanking note and prize distribution...</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 3 -->

        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1889.8761850213762!2d73.89082227395674!3d18.675104964763122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c8811d7b1399%3A0x8526234694ba4d2b!2sMITAOE%20Boys%20Hostel%20Prayag!5e0!3m2!1sen!2sin!4v1595576536017!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>MIT - Academy of Engineering, Alandi - Pune, Maharashtra, India</h3>
                <p>The College Ground is the venue for the event. The venue has all essential facilitites. <br>Snakes will be provided at the venue. All care will be taken in order to maintain your comfort.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Hotels Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 1</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.4 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 2</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Hotel 3</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>0.6 Mile from the Venue</p>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.png" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    
    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Team membership</h2>
          <p>Subscribe to our website to be a part of our team and contribute in all oue events.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Tickets for our 3 Days TEDx event.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">Rs. 750</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Back Stage Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="#Page2"><button type="button" class="btn" data-toggle="modal">Buy Now</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">Rs. 1500</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="#Page2"><button type="button" class="btn" data-toggle="modal">Buy Now</button></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">Rs. 2200</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="#Page2"><button type="button" class="btn" data-toggle="modal">Buy Now</button></a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- Form -->
    <div id="Page2">
      <form action="valid.php" method="POST" class="needs-validation">
            <div class="form-group col-4">
                <label for="validationCustom01">Full Name</label>
                <input required type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                <?php
                if (isset($name_error)) { ?>
                    <h6><?php echo $name_error ?></h6>
                <?php } ?>
                <label>Email address</label>
                <input required type="emai" name="email" class="form-control" id="email">
                <?php
                if (isset($email_error)) { ?>
                    <h6><?php echo $email_error ?></h6>
                <?php } ?>
                <label>Mobile no.</label>
                <input required type="text" name="mobile" class="form-control" id="mobile">
                <?php
                if (isset($mobile_error)) { ?>
                    <h6> <?php echo $mobile_error ?></h6>
                <?php } ?>
                <label>Year</label>
                <input required type="text" name="year" class="form-control" id="year">
                <?php
                if (isset($year_error)) { ?>
                    <h6><?php echo $year_error ?></h6>
                <?php } ?>
                <label>Describe</label>
                <textarea cols="45" rows="10" name="describe" class="form-control" id="describe"></textarea>

            </div>
            <button type="submit" class="btn btn-success mb-3">Submit</button>
    </form>
    <a href='#Page3' style="text-decoration:none ;background-color: #007bff;color: white;padding:5px;border-radius: 5px;">Show data</a>
  </div>


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>MIT - Academy of engineering TEDx Team.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>MIT Academy of Engineering, Alandi road, Pune - 412105, Maharashtra, India</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:082080 55301">082080 55301</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">tedx@mitaoe.ac.in</a></p>
            </div>
          </div>

        </div>
     </div>
    </section>

    <!-- #ListOfRegisteredMembers"-->
    <div id="Page3">
      <div class="container1">
        <table class="table mt-3">

            <?php
            if (isset($_GET['this'])) {
                showfunction();
            }
            function showfunction()
            {
                global $conn;

                $sql = "SELECT * FROM `detail`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                echo "
                <thead class='thead-dark'>
                <tr>
                    <th scope='col'>S.no</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>year</th>
                    <th scope='col'>Order timestamp</th>
                    <th scope='col'>Workspace</th>
                </tr>
            </thead>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo "<tr>
                      <th scope=row>" . $sno . "</th>" .
                        "<td>" . $row['name'] . "</td>" .
                        "<td>" . $row['email'] . "</td>" .
                        "<td>" . $row['year'] . "</td>" .
                        "<td>" . $row['timestamp'] . "</td>
                        <td><button class='edit btn btn-sm btn-primary' id=" . $row['sno'] . ">Edit</button> 
                        <button class='delete btn btn-sm btn-primary' id=d" . $row['sno'] . ">Delete</button></td>
                        </tr>";
                }
            }


            ?>
        </table>
    </div>    
    </div>

<!-- #contact -->
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo1.png" alt="MITAOE">
            <p>All your subscription and purchasing details are secure. Privacy policies are well definied. All personal information will not be used or shared for any reason.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              MIT Academy of Engineering,<br> Alandi road,<br>Pune - 412105, Maharashtra,<br> India <br>
              <strong>Phone:</strong> 082080 55301<br>
              <strong>Email:</strong> tedx@mitaoe.ac.in<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/TEDxMITAOE/?ref=page_internal" class="facebook"><i class="fa fa-facebook"></i></a>
              
            </div>

          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script>
        $(document).ready(function() {

            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit", );
                    tr = e.target.parentNode.parentNode;
                    year = tr.getElementsByTagName("td")[2].innerText;
                    console.log(year);
                    edityear.value = year;
                    snoEdit.value = e.target.id;
                    console.log(e.target.id);
                    $('#editModal').modal('toggle');
                })

            })
            deletes = document.getElementsByClassName('delete');
            Array.from(deletes).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit", );
                    sno = e.target.id.substr(1,)

                    if (confirm("Are you sure you want to delete your order")) {
                        console.log('yes');
                        window.location = `insert.php?delete=${sno}`;
                        console.log(sno);
                    } else {
                        console.log('no');
                    }
                })

            })
        })
    </script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
