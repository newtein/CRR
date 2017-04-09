<!DOCTYPE html>
<html>
<head>
  <link href='css/bootstrap.css' rel='stylesheet' />
    <link href='css/rotating-card.css' rel='stylesheet' />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  
</head>
<body>
<!----PHP-S-->
<?php
ini_set('max_execution_time', 300);
include "mysqlconnect.php";
include "stardel.php";
//$city=$_GET['keyword'];
$city="Bangalore";
$query="select cityid from cityids where cityname='".$city."'";

$query_run=mysqli_query($current,$query);

while($result=mysqli_fetch_array($query_run)){
	$cityid=$result['cityid'];
	
}




$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://developer.goibibo.com/api/voyager/get_hotels_by_cityid/?app_id=fd404eb9&app_key=77e86bf46981a679414a51972c95a7a1&city_id='.$cityid,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);


error_reporting(0);
?>

  

<div class="container-fluid">

<div class="row">
        <h1 class="title">
            Results for <?php echo $city; ?> 
        </h1>
		
	<?php
	$flag=0; //Flag is used to print name of Hotel once
    foreach($json['data'] as $key=>$value)
	{
		foreach($value as $data){
		if($flag==1){
		
	?>
        <div class="col-sm-10 col-sm-offset-1">
         <div class="col-md-12 col-sm-12">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="images/rotating_card_thumb2.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="images/rotating_card_profile4.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php   print_r($data['name']."</br>");
		                                                 $flag=0;
		                                                 }
		                                                 else $flag=1;
		  
	                                                     }    ?>                     </h3>
                                <p class="profession">
								<?php
								foreach($value as $data){
	                                       $maxR=0;  //maxR is used to print 3 review maximum
		                                    print_r($data['rating']);
											starshow($data['rating']);
								
								
								?>
								</p>
								<!--Can Insert something-->
                                <p class="text-center"></p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                       
                        <div class="content">
                            <div class="main">
							<?php
							$data1=$data['extra']['gir_data_extended'];
		                    foreach($data1['reviews'] as $k=>$review)
		                               {  if($review['content']!=""){
		                                             if($maxR<3){
												echo '<h4 class="text-center">';	 
			                                    print_r($review['fn']." ".$review['ln']."<br>");
												starshow($review['rating']);
                                                echo '</h4>';
											   
                                echo '<p class="text-center">';
								print_r($review['content']."<br>");
								$maxR++;
								echo '</p>';
								 }}
		   }
			   
		   
		  
	}

                             ?>
                            </div>
                        </div>
                       
           
      
                       
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col-sm-3 -->
		
        </div> <!-- end col-sm-10 -->
		<?php
	}
		?>
    </div> <!-- end row -->
	
	
    <div class="space-200"></div>
</div>




<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46172202-4', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
