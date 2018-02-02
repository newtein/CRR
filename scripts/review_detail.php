<?php

$id=$_POST['postid'];
$fid=$_POST['postfid'];
$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.tripadvisor.in/ExpandedUserReviews-g1-d'.$fid.'?target='.$id.'&context=1&reviews='.$id.'&servlet=Airline_Review&expand=1',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$html=curl_exec($curl);
curl_close($curl);

$dom = new DOMDocument();
@$dom->loadHTML($html);

$xpath = new DOMXpath($dom);
$review = $xpath->query('//div[@class="entry"]');
//$img=$xpath->query('//img[@class="rsImg"]');
$title=$xpath->query('//div[@class="quote"]/a');


for($i=0;$i<$title->length;$i++) {
	
	echo "<br>";
	echo '<h3 class="name">'.$title->item($i)->nodeValue.'</h3>';
		echo "<br>";
    echo $review->item($i)->nodeValue;

	//echo substr($img->item($i)->getAttribute('src'),-7,-6);
	
	
}


?>