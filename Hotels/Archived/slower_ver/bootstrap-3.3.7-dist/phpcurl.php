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


foreach($json['data'] as $key=>$value)
{
	foreach($value as $data)
	print_r($data['name']."</br>");
	
}
?>




