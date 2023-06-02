<?php 
	// session_start();
	require_once('../../databaseconnection.php');
    $updtID=$_GET['updtID']; 
	$sqlShow = "SELECT * FROM nid WHERE NID_No='$updtID'";
    $qryShow = mysqli_query($dbCon,$sqlShow);
    $data = mysqli_num_rows($qryShow);
	
?>