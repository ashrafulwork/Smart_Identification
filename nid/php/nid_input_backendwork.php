<?php
session_start();
require_once("../../databaseconnection.php");


if (isset($_POST['submit'])){
	$English_Name = $_POST['English_Name'];	
	$Bangla_Name = $_POST['Bangla_Name'];	
	$Father_Name = $_POST['Father_Name'];	
	$Mother_Name = $_POST['Mother_Name'];	
	$Date = date('d M Y',strtotime($_POST['validity']));
	$Blood_Group = $_POST['Blood_Group'];
    $NID_No = $_POST['NID_No'];
    $Image = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));
	$Signature = addslashes(file_get_contents($_FILES["Signature"]["tmp_name"]));
	$Barcode= addslashes(file_get_contents($_FILES["Barcode"]["tmp_name"]));
	//newly added inputs
	$House_Holding = $_POST['House_Holding'];
	$Village_Road =  $_POST['Village_Road'];
	$Post_Office =  $_POST['Post_Office'];
	$Place_of_Birth = $_POST['Place_of_Birth'];
	$Issue_Date = date('d M Y',strtotime($_POST['Issue_Date']));


    $insertData1 = "'$English_Name','$Bangla_Name','$Father_Name','$Mother_Name','$Date','$Blood_Group','$NID_No','$Image','$Signature','$Barcode','$House_Holding','$Village_Road','$Post_Office','$Place_of_Birth','$Issue_Date' ";
    $insertSQL1 = "INSERT INTO nid VALUES($insertData1)";
    $insertQuery1 = @mysqli_query($dbCon,$insertSQL1) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));
    if($insertQuery1){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Inserted</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Inserted</h4>";
	}
	header('Location: ' . BASE);
}