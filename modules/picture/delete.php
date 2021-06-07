<?php
$pid = $_GET['image'];

// echo $pid;
// die;
if($pid){
	$dbobj->delete('picture', $pid);
	
	header("Location:" . BASEURL . "picture/$id");
	exit;
}