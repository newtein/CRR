<?php
$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://api.glassdoor.com/api/api.htm?t.p=134714&t.k=hpxbAZvB6TG&userip=0.0.0.0&q=wipro&useragent&format=json&v=1&action=employers&l=noida&pn=4',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);

echo "<pre>";
print_r($json);


foreach ($json['response']['employers'] as $key){

print_r( $key['id']);

}
?>