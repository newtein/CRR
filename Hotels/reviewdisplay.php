<?php
include 'stardel.php';
$hid=$_POST['postid'];

$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://ugc.goibibo.com/api/HotelReviews/forWeb?app_id=ac6fb24e&app_key=136821c3c9318718e9967e6c1f2b9d70&vid='.$hid.'&limit=6&offset=0',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);
$maxR=0;
foreach($json as $key=>$value){
      $rating=$value['totalRating'];
	  $firstname=$value['firstName'];
	  $lastname=$value['lastName'];
	  $name=$firstname." ".$lastname;
	  $content=$value['reviewContent'];
	  if($content!='' && $maxR<3){
		  echo "<div class='well' style='margin-top:0px;margin-bottom:0px;'>";
	  echo '<h3 class="name">'.$name.'<br></h3>';
	  echo '<center>'.starshow($rating).'</center>';
	
	    //echo '  <center>'.starshow($rating).'</center>';
	  echo '  <p class="text-center">'.$content.'</p>';
	  echo "</div>";
	  
	  $maxR++;
	  }
}


?>