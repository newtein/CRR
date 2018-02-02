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

function modal($rname,$id){

?>




<!-- Modal -->
<div id='myModal<?php echo $id; ?>' class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reviews for <?php echo $rname;?></h4>
      </div>
      <div class="modal-body" style="height:65%;overflow-y:scroll;">
     <?php



	$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://developers.zomato.com/api/v2.1/reviews?res_id='.$id,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER=>array('Accept: application/json','user-key: a3192a240dfea4c3fbd10a6ada31606d')

        ));
        $json = curl_exec($curl);
        curl_close($curl);
        
		$json=json_decode($json,true);

foreach($json['user_reviews'] as $key){
    $rating=$key['review']['rating'];
	$review=$key['review']['review_text'];
	$uname=$key['review']['user']['name'];
	$img=$key['review']['user']['profile_image'];
	?>
	
	                      <div class="well">
						 <center> <img class='img-circle' src='<?php echo $img; ?>' height=100 width=100></center>
						 <center><h5 class='name'> <?php echo $uname; ?></h5></center>
						 <p class='text-center'><?php starshow(round($rating)) ?> </p>
						 <p class='text-center'><?php echo $review; ?> </p>
						 </div>
	
	  
<?php	
	  
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