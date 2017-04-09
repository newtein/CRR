<?php

$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.tripadvisor.in/AirlineTips?d=8729090&inline=true',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$html=curl_exec($curl);
curl_close($curl);

$dom = new DOMDocument();
$dom->loadHTML($html);

$xpath = new DOMXpath($dom);
$title = $xpath->query('//div[@class="tipText"]');
$img=$xpath->query('//img[@class="rsImg"]');
$review_link=$xpath->query('//div[@class="tipText"]/a');

/*
foreach($anchors as $a)
{ 
    print $a->nodeValue." - ".$a->getAttribute("href")."<br/>";
}*/

for($i=0;$i<$title->length;$i++) {
    echo str_replace("| Read review","",$title->item($i)->nodeValue);
	echo "<br>";
	echo substr($img->item($i)->getAttribute('src'),-7,-6);
	echo "<br>";
	echo substr($review_link->item($i)->getAttribute("href"),30,9);
	echo "<br>";
}

echo $i;

?>