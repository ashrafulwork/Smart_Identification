<?php
require_once ("../../databaseconnection.php");
/*DELETE*/
$dltID = $_GET['dltID'];
$sqlDelt = "DELETE FROM nid WHERE NID_No='$dltID'";
mysqli_query($dbCon,$sqlDelt);
header('Location: ' . 'http://localhost/si/nid/php/nid_update.php');
?>