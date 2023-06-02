<?php
require_once ("../../databaseconnection.php");
$sqlShow = "SELECT * FROM nid"; 
$qryShow = mysqli_query($dbCon,$sqlShow);
$data = mysqli_num_rows($qryShow);

#for table user


//



//



/*++Search++++*/
if (isset($_POST['search'])){
	$srchID = $_POST['srchID'];
	$sqlSrch = "SELECT * FROM nid WHERE NID_No='$srchID'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	$recSrch = mysqli_fetch_object($qrySrch);
}



?>