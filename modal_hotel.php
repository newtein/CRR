<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  div.modal div.modal-backdrop {
    z-index: 0;
}
body.modal-open div.modal-backdrop { 
    z-index: 0; 
}
  
  </style>
</head>
<body>
<?php

function modal($hid,$hname){

?>




<!-- Modal -->
<div id='myModal<?php echo $hid; ?>' class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reviews for <?php echo $hname;?></h4>
      </div>
      <div class="modal-body" style="height:70%;overflow-y:scroll;">
     <?php



$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://ugc.goibibo.com/api/HotelReviews/forWeb?app_id=ac6fb24e&app_key=136821c3c9318718e9967e6c1f2b9d70&vid='.$hid.'&limit=10&offset=0',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);

foreach($json as $key=>$value){
      $rating=$value['totalRating'];
	  $firstname=$value['firstName'];
	  $lastname=$value['lastName'];
	  $name=$firstname." ".$lastname;
	  $content=$value['reviewContent'];
	 
		  echo "<div class='well' style='margin-top:0px;margin-bottom:0px;'>";
	  echo '<h3 class="name">'.$name.'<br></h3>';
	  echo '<center>'.starshow($rating).'</center>';
	

	  echo '  <p class="text">'.$content.'</p>';
	  echo "</div>";
	  
	
	  
}


?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php

}



?>
</body>