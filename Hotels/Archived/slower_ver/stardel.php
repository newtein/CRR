<?php

function starshow($num){

if($num=="9 stars"){
	$n=9;


}
else if($num=="8 stars"){
	$n=8;
}
else if($num=="7 stars"){
	$n=7;
}
else if($num==3)
	$n=6;
else if($num==5)
	$n=10;
else if($num==4)
	$n=8;
else if($num==2)
	$n=4;
else if($num==1)
	$n=2;
else{
	$n=6;
}
if($n%2!=0)
$n=$n+1;
	for($i=0;$i<$n/2;$i++){
	echo "<img src='star-on.svg'>";
	}
}

?>
