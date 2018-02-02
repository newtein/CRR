<!DOCTYPE html>
  <html lang="en">

  <!-- Mirrored from sohelrana.me/hotel/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2017 14:54:37 GMT -->
  <head>

    <title>Hotel Empire - Hotel Reservation HTML Template</title>

    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
    <link rel="stylesheet" href="../css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon/font/flaticon.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" id="style_sheet" type="text/css" href="css/style_flights.css">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!--JQuery-->
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

  <header class="main-header">
      <?php include("com_header.php"); ?>
  </header>
  <?php include("f_mysqlconnect.php");


    $query="select * from flights;" ;
    if(($e = mysqli_query($c,$query)))
    {
      while( $row = mysqli_fetch_assoc( $e ) )
      {
        $id[]=$row['id'];
        $name[]=$row['name'];
      }

    }
    else echo mysqli_error($c);
  ?>

<div class = "main-part">
  <div class= "container">
  <h1><span>Welcome to the</span> flight <span>portal</span></h1>
</div>
<form action="flight_results.php" method="get">
  <div class="container">
<div class="row">
   <div class="col-sm-6 col-sm-offset-3">
       <div id="imaginary_container">
           <div class="input-group stylish-input-group">
               <input type="text" class="form-control" id="auto" name="fname" placeholder="Enter the name of the airline..." >
               <span class="input-group-addon">
                   <button type="submit">
                       <span class="glyphicon glyphicon-search"></span>
                   </button>
               </span>
           </div>
       </div>
   </div>
</div>
</div>
<script type="text/javascript">
  var src=[<?php for($i=0 ; $i<sizeof($name)-1; $i=$i+1 ) echo '"'.$name[$i].'"'.',' ; echo '"'.$name[$i].'"'; ?>];
  $("#auto").autocomplete({
      source: function(request, response) {
          var results = $.ui.autocomplete.filter(src, request.term);

          response(results.slice(0, 10));
    }
});

</script>
</form>
</div>
<?php include("com_footer.php"); ?>
</body>
</html>
