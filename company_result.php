<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
font-family: 'Open Sans', sans-serif;
</style>
</head>
<body>
<?php



if(isset($_GET['company']) || isset($_GET['location'])){
	
@$company=$_GET['company'];
@$loc=$_GET['location'];
$index=strpos($loc,",");

$loc=substr($loc,0,$index);

$pn=$_GET['pn'];
$para1="";
$para2="";
$para3="";
if(strlen($company)>0) 
	$para1="&q=".$company;
if(strlen(@$loc)>0) 
	$para2="&l=".$loc;
if(strlen($pn)>0) 
	$para3="&pn=".$pn;



$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://api.glassdoor.com/api/api.htm?t.p=134714&t.k=hpxbAZvB6TG&userip=0.0.0.0'.$para1.'&useragent&format=json&v=1&action=employers'.$para2.''.$para3.'',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));

		
$json=curl_exec($curl);
curl_close($curl);

$json=json_decode($json,true);

$parent_url=$json['response']['attributionURL'];
$curr_page=$json['response']['currentPageNumber'];
$total_page=$json['response']['totalNumberOfPages'];
@$location=$json['response']['lashedLocation']['longName'];

include "displaycompany.php";
include "stardel.php";
include "modal_comp.php";
include "com_header.php";
?>
 <div class="page-header">
 <h2><center><?php echo "Results for ".ucfirst(@$company)." ".ucfirst(@$loc);?></center> </h2>
 </div>
 <div class='row'>
<?php

$ptr=0;
foreach ($json['response']['employers'] as $key){
//@ because in some reviews no featuredReview or ceo is there

@$com_name=$key['name'];
@$web=$key['website'];
@$type=$key['industry'];
@$logo=$key['squareLogo'];
@$rating=$key['overallRating'];
@$review_pros=$key['featuredReview']['pros'];
@$review_cons=$key['featuredReview']['cons'];
@$job_title=$key['featuredReview']['jobTitle'];
@$location=$key['featuredReview']['location'];
@$glassdoor=$key['featuredReview']['attributionURL'];
@$id=$key['featuredReview']['id'];
@$ceo_name=$key['ceo']['name'];
@$ceo_title=$key['ceo']['title'];
@$ceo_upvotes=$key['ceo']['pctApprove'];
@$ceo_downvotes=$key['ceo']['pctDisapprove'];
@$ceo_img=$key['ceo']['image']['src'];
if(strlen($id)>0){
	if(strlen($ceo_name)>0) $ceo_bool=1;
	else $ceo_bool=0;
	
displaycompany($ptr,@$id,@$com_name,@$web,@$type,@$logo,@$rating,@$review_pros,@$review_cons,@$job_title,@$location,@$ceo_name,@$ceo_title,@$ceo_upvotes,@$ceo_downvotes,@$ceo_img,@$glassdoor,$ceo_bool);
$ptr++;
}}



if($pn==1) 
	$prev="previous disabled";
else {
	$prev="previous";
	$cn=$pn-1;
	$purl=str_replace("&pn=".$pn,"&pn=".$cn,$_SERVER['REQUEST_URI']);
}
if($curr_page==$total_page) 
	$next="next disabled";
else {
	$next="next";
	$cn=$pn+1;
	
	$nurl=str_replace("&pn=".$pn,"&pn=".$cn,$_SERVER['REQUEST_URI']);
}
//if($ptr%2!=0)
	//echo '<div class="col-5-md"></div>';
?>
</div>
<div class='main-footer clearfix'>

<ul class="pager">
    <li class='<?php echo $prev; ?>'><a href='<?php echo $purl; ?>' style='margin-left:30%;'>&larr; Previous</a></li>
    <li class='<?php echo $next; ?>'><a href='<?php echo $nurl; ?>' style='margin-right:30%;'>Next &rarr;</a></li>
</ul>

</div>
<?php


}
?>
</body>
</html>