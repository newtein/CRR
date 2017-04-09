<?php

$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://developers.zomato.com/api/v2.1/locations?query=mumbai',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER=>array('Accept: application/json','user-key: a3192a240dfea4c3fbd10a6ada31606d')

        ));
        $json = curl_exec($curl);
        curl_close($curl);
        
		$json=json_decode($json,true);
	
	    print_r( $json['location_suggestions']);
		/*
		foreach ($json['location_suggestions'] as $key){

         print_r( $key['entity_type']);

                }*/


?>