<?php
session_start();
require_once ("../../databaseconnection.php");
if (isset($_POST['btnUpdt']) == "Update") {
	$English_Name = $_POST['English_Name'];	
	$Bangla_Name = $_POST['Bangla_Name'];	
	$Father_Name = $_POST['Father_Name'];	
	$Mother_Name = $_POST['Mother_Name'];	
    $Date = date('d M Y',strtotime($_POST['validity']));
	$Blood_Group = $_POST['Blood_Group'];
    $NID_No = $_POST['NID_No'];

	// $Image = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));
	//newly added inputs
	$House_Holding = $_POST['House_Holding'];
	$Village_Road =  $_POST['Village_Road'];
	$Post_Office =  $_POST['Post_Office'];
	$Place_of_Birth = $_POST['Place_of_Birth'];
    $Issue_Date = date('d M Y',strtotime($_POST['Issue_Date']));

	// if (!empty($_FILES['Image']['tmp_name']) && is_uploaded_file($_FILES['Image']['tmp_name'])) {
    //     $Image = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
    //     $updateFields .= ", Image='$Image'";
    // }
	// Image='$Image',
	/*Update into tbl_info*/
	$updtSQL= "UPDATE nid SET English_Name='$English_Name',Bangla_Name='$Bangla_Name',Father_Name='$Father_Name',Mother_Name='$Mother_Name',Date='$Date',Blood_Group='$Blood_Group',NID_No='$NID_No',House_Holding='$House_Holding',Village_Road='$Village_Road',Post_Office='$Post_Office',Place_of_Birth='$Place_of_Birth',Issue_Date='$Issue_Date' WHERE NID_No='$NID_No'";
	$updtQry = @mysqli_query($dbCon,$updtSQL) or die("Error in Table Info Update: ".mysqli_error($dbCon));
	/*Success or Error Message*/
	if($updtQry){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Updated</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Updated</h4>";
	}
	header('Location: ' . 'http://localhost/si/nid/php/nid_update.php');
}
?>