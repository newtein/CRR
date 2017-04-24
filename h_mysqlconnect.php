<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='goibibo_api';

$c=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
$current=$c;

$current_file=$_SERVER['SCRIPT_NAME'];


if($c){
	  if ( mysqli_select_db($c,$mysql_db)) {
		
	  }
else echo mysqli_error($c);
}

else echo mysqli_error($c);
?>