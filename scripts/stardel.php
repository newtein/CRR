<?php

function starshow($num){
if($num>0 && $num<=5){

	for($i=0;$i<$num;$i++){
	echo "<img src='star-on.svg' height=20 width=20>";
	}
}
else{
	for($i=0;$i<3;$i++){
	echo "<img src='star-on.svg' height=20 width=20>";
	}
}

}

?>
