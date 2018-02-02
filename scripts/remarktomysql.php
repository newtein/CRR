<?php
include 'sqlconnect.php';
if($_POST){
	$taskid=$_POST['taskid'];
	$pid=$_POST['pid'];
	$remark=$_POST['remark'];
	$by=$_POST['by'];
	$date=$_POST['date'];
	$time=$_POST['time'];

	$query="insert into comment_history values ('$pid','$taskid','$remark','by','date','time')";
	if($query_run=mysqli_query($query,$c)){
		echo "success";
	}
}

?>