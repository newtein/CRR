<?php
include 'displayflights.php';
include 'stardel.php';
include 'f_mysqlconnect.php';
include 'com_header.php';


if(isset($_GET['fname'])&&!empty($_GET['fname'])){
      $fname=str_replace("+"," ",$_GET['fname']);
	  
	  if($query_run=mysqli_query($c,"select id from flights where name='$fname'")){
      while($result=mysqli_fetch_assoc($query_run)){
		  $fid=$result['id'];
		  
	  }


            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.tripadvisor.in/AirlineTips?d='.$fid.'&inline=true',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

$html=curl_exec($curl);
curl_close($curl);
?>
 <div class="page-header">
 <h2><center><?php echo "Results for ".ucfirst($fname);?></center> </h2>
 </div>
<?php
$dom = new DOMDocument();
$dom->loadHTML($html);

$xpath = new DOMXpath($dom);
$title = $xpath->query('//div[@class="tipText"]');
$img=$xpath->query('//img');
$review_link=$xpath->query('//div[@class="tipText"]/a');
$rating=$xpath->query('//span');

$ptr=0;
for($i=0;$i<$title->length;$i++) {
  $headline=str_replace("| Read review","",$title->item($i)->nodeValue);
	$image=$img->item($i)->getAttribute('src');	
	$id=substr($review_link->item($i)->getAttribute("href"),30,9);
	$ta_link=$review_link->item($i)->getAttribute("href");
	$star=substr($rating->item($i)->getAttribute("alt"),0,1);
	$p1=strpos($headline,'”');
	$p2=strlen($headline)-$p1-strpos(strrev($headline),',');
	
	$name=substr($headline,$p1+3,$p2-4);
	$headline=str_replace($name,"",$headline);
		
	
	if(strlen($name)>2){
	$ptr++;
	displayflights($ptr,$fid,$name,$headline,$image,$id,$star,$ta_link);
	}
	
}
}else echo mysqli_error($c);
}



?>