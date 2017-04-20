<body bgcolor='#191919'>


<?php

include "mysqlconnect.php";
include "stardel.php";
include "displayhotels.php";
$city1=$_GET['keyword'];

include "modal.php";
$index=strpos($city1,",");

$city=substr($city1,0,$index);
$query="select cityid from cityids where cityname='".$city."'";

$query_run=mysqli_query($current,$query);
if(mysqli_num_rows($query_run)>0){

while($result=mysqli_fetch_array($query_run)){
	$cityid=$result['cityid'];
		
}

$s=date("Ymd",strtotime("+7 days"));
$t=date("Ymd",strtotime("+8 days"));

$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://hermes.goibibo.com/hotels/v2/search/data/v3/'.$cityid.'/'.$s.'/'.$t.'/1-1_0?s=popularity&cur=INR&f={}&pid=0',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);
?>
 <div class="page-header">
 <h2><center><?php echo "Results for ".ucfirst($city);?></center> </h2>
 </div>
<?php

foreach ($json['data'] as $key=>$value){
	$hotelname= $value['hn'];
	$location=$value['l'];
	$img=$value['t'];
	$link=$img;
	$hotelid=$value['hc'];
	$stars=$value['gr'];
	$review_count=$value['grc'];
	$price=$value['spr'];
	
	$p_one=str_replace(" ","-",strtolower($hotelname));
	$link="https://www.goibibo.com/hotels/".$p_one."-".$hotelid;
	

	displayhotels($hotelname,$stars,$review_count,$location,$img,$hotelid,$price,$link);
	



?>




<?php

}}
else 
	die("City does not exist in database");

?>

