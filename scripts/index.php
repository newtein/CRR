<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sohelrana.me/hotel/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2017 14:54:37 GMT -->
<head>
  <title>Hotel Empire - Hotel Reservation HTML Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <!-- External CSS libraries -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/flaticon/font/flaticon.css">

  <!-- Custom stylesheet -->
  <link rel="stylesheet" id="style_sheet" type="text/css" href="css/style.css">

  <!-- Google fonts -->
  <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <script type = "text/javascript">
    $(document).ready(function(){

      $('#myModal').modal('show');

    });
    </script>

</head>
<body>
<!-- Header Start -->
<header class="main-header">
    <?php include("com_header.php"); ?>
</header>
<!-- Header End -->

<!-- Modal main code -->
<div id="myModal" class="modal fade">

    <div class = "modal-dialog modal-md">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title">Choose what you are looking for</h4>

            </div>

            <div class="modal-body">
                <a href="hotels.php" class="btn btn-fill">Hotels</a>
                <a href="flights.php" class="btn btn-fill">Flights</a>
                <a href="company.php" class="btn btn-fill">Workplaces</a>
                <a href="zomato.php" class="btn btn-fill">Restaurants</a>

            </div>

        </div>

    </div>

</div>
<!-- Modal code finished -->

<!-- Banner Start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-1 active">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Title-->
                        <h1><span>Welcome to</span> The Review Pool</h1>
                        <!-- Paragraph -->
                        <p>Find reviews for various services here.</p>
                        <!-- Btn -->
                        <button class="btn btn-fill" data-toggle="modal" data-target="#myModal">Choose a service</button>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Titel-->
                        <h1><span>It's time to </span> fly!</h1>
                        <!-- Paragraph -->
                        <p>Fly only with the best</p>
                        <!-- Btn -->
                        <a href="service.html" class="btn btn-fill">View flights</a>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Titel-->
                        <h1><span>Book rooms </span>now!</h1>
                        <!-- Paragraph -->
                        <p>Get rooms in hotels best suited to your needs and best rated by users.</p>
                        <!-- Btn -->
                        <a href="rooms-list.html" class="btn btn-fill">view hotels</a>
                    </div>
                </div>
            </div>
            <div class="item item-4">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Titel-->
                        <h1><span>Treat yourself to sumptuous </span> food!</h1>
                        <!-- Paragraph -->
                        <p>Treat your tastebuds to lip smacking meals at top billed outlets!</p>
                        <!-- Btn -->
                        <a href="rooms-list.html" class="btn btn-fill">view Restaurents</a>
                    </div>
                </div>
            </div>
            <div class="item item-5">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Titel-->
                        <h1><span>Advance your </span> career!</h1>
                        <!-- Paragraph -->
                        <p>Choose your workplace only after reviewing the work environment. </p>
                        <!-- Btn -->
                        <a href="rooms-list.html" class="btn btn-fill">view our services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <img src="img/chevron-left.png" alt="chevron-left">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="img/chevron-right.png" alt="chevron-right">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Banner End-->

<!-- Short Intro Start-->
<div class="short-intro">
    <div class="container">
        <div class="short-intro-inner">
            <!-- Image-->

            <!--<span class="crown"><i class="flaticon-royalty-crown"></i></span>-->
            <h1>A single stop<span> to cater to all your needs!</span></h1>

            <div class="short-intro-item-image">
                <img src="img/botto.png" class="img-responsive" alt="group-pic">

            </div>
        </div>
    </div>
</div>
<!-- Short Intro End-->

<!-- Flights Start-->
<div class="hotel-service-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="content">
                    <h3>Get extensive ratings on flights </h3>
                    <p>Find an extensive collection
                      of reviews on various flights to facilitate your decision as well as links to the relevent booking site. </p>
                       <a href="service.html" class="btn btn-fill">View flights</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="home-chef">
                    <img src="img/airline.png" class="img-responsive" alt="aircraft-logo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Flights end-->

<!--Hotels start -->

<div class="hotel-service-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="home-chef">
          <img src="img/sleepy.png" class="img-responsive" alt="aircraft-logo">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="content">
          <h3>Hotels rated by realtime users </h3>
          <p>Never again get stuck at a hotel not living up to your
             extentaions. Read authentic and well informed reviews on them before booking to have a satisfying stay.</p>
            <a href="service.html" class="btn btn-fill">View Hotels</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Hotels end -->

<!--Restaurant start -->
<div class="hotel-service-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="content">
                    <h3>Choose only the best food </h3>
                    <p>Don't waste on food that looks good only in pictures.
                      Take secons opinioins from the multitude of reviews available to enjoy your meal to the fullest.</p>
                      <a href="service.html" class="btn btn-fill">View Restaurants</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="home-chef">
                    <img src="img/eating.png" class="img-responsive" alt="aircraft-logo">
                </div>
            </div>
        </div>
    </div>
</div>

<!--Restaurent end -->

<!--Company start-->
<div class="hotel-service-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="home-chef">
                    <img src="img/office.svg" class="img-responsive" alt="aircraft-logo">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="content">
                    <h3>Verify workplace before you join </h3>
                    <p>Workplace suitability is important for one to acheive their professional peak.
                      Get first-hand opinions on companies before joining and never again make a wrong career choice.</p>
                      <a href="service.html" class="btn btn-fill">View Companies</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Company end -->

  <?php include("com_footer.php"); ?>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/flatpickr.js"></script>
<!-- Custom javascript -->
<script src="js/app.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89110077-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from sohelrana.me/hotel/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2017 14:55:42 GMT -->
</html>
