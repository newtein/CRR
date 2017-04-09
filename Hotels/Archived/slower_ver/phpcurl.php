<?php

$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://developer.goibibo.com/api/voyager/get_hotels_by_cityid/?app_id=fd404eb9&app_key=77e86bf46981a679414a51972c95a7a1&city_id=3877384277955108166',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);
/*
echo "<pre>";
print_r($json);
echo "</pre>";*/
error_reporting(0);
$flag=1;
foreach($json['data'] as $key=>$value)
{   
	foreach($value as $data){
		if($flag==1){
	       print_r($data['name']."</br>");
		   $flag=0;
		}
		else $flag=1;
		  
	}
	foreach($value as $data){
	   $maxR=0;
		   print_r($data['rating']."</br>");
		   $data1=$data['extra']['gir_data_extended'];
		   foreach($data1['reviews'] as $k=>$review)
		   {  if($review['content']!=""){
		      if($maxR<3){
			   print_r("Name: ".$review['fn']." ".$review['ln']." [Rated] ".$review['rating']."<br>");
			  print_r($review['content']."<br>");
			  $maxR++;
		   }}
		   }
			   
		   
		  
	}
	
	
}
?>




