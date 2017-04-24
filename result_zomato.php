<?php


if(isset($_GET['q'])&&isset($_GET['pn'])){
$pn=$_GET['pn'];
$q=$_GET['q'];

$index=strpos($q,",");

$q=substr($q,0,$index);

$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://developers.zomato.com/api/v2.1/locations?query='.$q,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER=>array('Accept: application/json','user-key: a3192a240dfea4c3fbd10a6ada31606d')

        ));
        $json = curl_exec($curl);
        curl_close($curl);
        
		$json=json_decode($json,true);
	  
	    
	    @$entity_type=$json['location_suggestions'][0]['entity_type'];
		@$entity_id=$json['location_suggestions'][0]['entity_id'];
		@$city_name=$json['location_suggestions'][0]['city_name'];
		https://developers.zomato.com/api/v2.1/search?entity_id=1&entity_type=city&start=0&count=20
		
		$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://developers.zomato.com/api/v2.1/search?entity_id='.$entity_id.'&entity_type='.$entity_type.'&start='.$pn.'&count=14',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER=>array('Accept: application/json','user-key: a3192a240dfea4c3fbd10a6ada31606d')

        ));
        $json = curl_exec($curl);
        curl_close($curl);
        
		$json=json_decode($json,true);
		
		include 'displayzomato.php';
		include 'stardel.php';
		include 'modal_zomato.php';
		
		include 'com_header.php';
		
		
	?>

	
<div class="page-header">
 <h2><center><?php echo "Results for ".ucfirst($q)?></center> </h2>
 </div>
 <div class="row">
	<?php
		//print_r($json);
		$ptr=0;
		$total_page=$json['results_found'];
		$curr_page=$json['results_start'];
		foreach($json['restaurants'] as $key){
			 @$id=$key['restaurant']['id'];
			@$name=$key['restaurant']['name'];
			 @$url=$key['restaurant']['url'];
			 @$location=$key['restaurant']['location']['locality'];
			 @$price_range=$key['restaurant']['price_range'];
			@$rating=$key['restaurant']['user_rating']['aggregate_rating'];
			@$photo=$key['restaurant']['featured_image'];
			@$menu=$key['restaurant']['menu_url'];
		
			@$phone=$key['restaurant']['phone_numbers'];
			@$review1=$key['restaurant']['all_reviews']['reviews'][0]['review']['review_text'];
			@$rating1=$key['restaurant']['all_reviews']['reviews'][0]['review']['rating'];
			@$name1=$key['restaurant']['all_reviews']['reviews'][0]['review']['user']['name'];
			@$img1=$key['restaurant']['all_reviews']['reviews'][0]['review']['user']['profile_image'];
			
			@$review2=$key['restaurant']['all_reviews']['reviews'][1]['review']['review_text'];
			@$rating2=$key['restaurant']['all_reviews']['reviews'][1]['review']['rating'];
			@$name2=$key['restaurant']['all_reviews']['reviews'][1]['review']['user']['name'];
			@$img2=$key['restaurant']['all_reviews']['reviews'][1]['review']['user']['profile_image'];
			
			
			@$review3=$key['restaurant']['all_reviews']['reviews'][2]['review']['review_text'];
			@$rating3=$key['restaurant']['all_reviews']['reviews'][2]['review']['rating'];
			
			@$name3=$key['restaurant']['all_reviews']['reviews'][2]['review']['user']['name'];
			@$img3=$key['restaurant']['all_reviews']['reviews'][2]['review']['user']['profile_image'];
			
			displayzomato($ptr,$id,$name,$url,$location,$price_range,$rating,$photo,$menu,$phone,$review1,$rating1,$name1,$review2,$rating2,$name2,$review3,$rating3,$name3,$img1,$img2,$img3);
			
			 $ptr++;
		}
		
		
	if($pn==0) 
	$prev="previous disabled";
else {
	$prev="previous";
	$cn=$pn-14;
	$purl=str_replace("&pn=".$pn,"&pn=".$cn,$_SERVER['REQUEST_URI']);
}
if(@$curr_page==$total_page) 
	$next="next disabled";
else {
	$next="next";
	$cn=$pn+14;
	
	$nurl=str_replace("&pn=".$pn,"&pn=".$cn,$_SERVER['REQUEST_URI']);
}

?>

<div class='container'>

<ul class="pager">
    <li class='<?php echo $prev; ?>'><a href='<?php echo $purl; ?>' style='margin-left:30%;'>&larr; Previous</a></li>
    <li class='<?php echo $next; ?>'><a href='<?php echo $nurl; ?>' style='margin-right:30%;'>Next &rarr;</a></li>
</ul>

</div>	
		
		
		<?php
}
else echo "Supply valid location and page number";

?>

