<?php 
	session_start();
	require_once('../../databaseconnection.php');
	$updtID=$_GET['updtID']; 
	$sqlUpdtShow = "SELECT * FROM nid WHERE NID_No='$updtID'";
	$qryUpdtShow = mysqli_query($dbCon,$sqlUpdtShow);
	$recUpdtShow = mysqli_fetch_object($qryUpdtShow);	
?>

<head>
<link rel="stylesheet" href="../css/nid_updateform.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID Update Form</title>
</head>
<body>
	<h1>NID Update Form</h1>
		<?php 
		if(@$_SESSION['msg']!=""){
			echo @$_SESSION['msg']; echo @$_SESSION['msg']="";
		}
		?>

		</span>
		<form action="/si/nid/php/nid_updateabackendwork.php" method="post" enctype="multipart">
		<table border="1" align="center" cellspacing="15">
			<tr>
					
                <td>
					<label>NAME:: </label>
					<input type="text" name="English_Name" value="<?php echo $recUpdtShow->English_Name; ?>" />
				</td>
                <td>
					<label>নাম:: </label>
					<input type="text" name="Bangla_Name" value="<?php echo $recUpdtShow->Bangla_Name; ?>" />
				</td>
                <td>
					<label>পিতা:: </label>
					<input type="text" name="Father_Name" value="<?php echo $recUpdtShow->Father_Name; ?>" />
				</td>
                <td>
					<label>মাতা:: </label>
					<input type="text" name="Mother_Name" value="<?php echo $recUpdtShow->Mother_Name; ?>" />
				</td>
                <td>
					<label>Date of Birth: </label>
					<input type="text" name="validity" value="<?php echo $recUpdtShow->Date; ?>" />
				</td>
                <td> 
					<label>NID:: </label>
					<input disabled="disabled" type="text" value="<?php echo $recUpdtShow->NID_No;?>" />
					<input type="hidden" name="NID_No" value="<?php echo $updtID; ?>">

				</td>


				<td id="php_image">
    			<label>Image: </label>
    		<br><br>
   				 <?php
       	 		if ($recUpdtShow->Image) {
           	 echo '<img src="data:image;base64,'.base64_encode($recUpdtShow->Image).'" alt="Uploaded Image" />';
        		}
    				?>
    			<input type="file" name="Image" id="Image" accept="image/*" />
			</td>

				
					
				
				<td id="php_image">
    			<label>Signature: </label>
    		<br><br>
   				 <?php
       	 		if ($recUpdtShow->Signature) {
           	 echo '<img src="data:image;base64,'.base64_encode($recUpdtShow->Signature).'" alt="Uploaded Image" />';
        		}
    				?>
    			<input type="file" name="Image" id="Image" accept="image/*" />
			</td>


			<td id="php_image">
    			<label>Barcode: </label>
    		<br><br>
   				 <?php
       	 		if ($recUpdtShow->Image) {
           	 echo '<img src="data:image;base64,'.base64_encode($recUpdtShow->Barcode).'" alt="Uploaded Image" />';
        		}
    				?>
    			<input type="file" name="Image" id="Image" accept="image/*" />
			</td>
				
					
					
					
			</tr>
			
			<tr>
				<td> 
					<label>BLOOD:: </label>
					<select name="Blood_Group"  required  />
						<option value="null">Select Blood Group</option>
						<option <?php if($recUpdtShow->Blood_Group=="A+"){echo "selected";}?> value="A+">A+</option>
						<option <?php if($recUpdtShow->Blood_Group=="A-"){echo "selected";}?> value="A-">A-</option>
						<option <?php if($recUpdtShow->Blood_Group=="B+"){echo "selected";}?> value="B+">B+</option>
						<option <?php if($recUpdtShow->Blood_Group=="B-"){echo "selected";}?> value="B-">B-</option>
						<option <?php if($recUpdtShow->Blood_Group=="AB+"){echo "selected";}?> value="AB+">AB+</option>
						<option <?php if($recUpdtShow->Blood_Group=="AB-"){echo "selected";}?> value="AB-">AB-</option>
						<option <?php if($recUpdtShow->Blood_Group=="O+"){echo "selected";}?> value="O+">O+</option>
						<option <?php if($recUpdtShow->Blood_Group=="O-"){echo "selected";}?> value="O-">O-</option>
						
					
					</select>
				</td>
				
			

			
				
<div class="newly">

<td><label>বাসা/হোল্ডিং: </label>
<input type="text" name="House_Holding" value="<?php echo $recUpdtShow->House_Holding; ?>"  />
</td>

<td><label>গ্রাম/রাস্তা: </label>
<input type="text" name="Village_Road" value="<?php echo $recUpdtShow->Village_Road; ?>"   />
</td>

<td><label>ডাকঘর: </label>
<input type="text" name="Post_Office" value="<?php echo $recUpdtShow->Post_Office; ?>"   />
</td>

<td> 
					<label>Place of Birth:: </label>
					<select name="Place_of_Birth"  required  />
						<option value="null">Select Blood Group</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Dhaka"){echo "selected";}?> value="Dhaka">Dhaka</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Rangpur"){echo "selected";}?> value="Rangpur">Rangpur</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Chitagong"){echo "selected";}?> value="Chitagong">Chitagong</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Mymensingh"){echo "selected";}?> value="Mymensingh">Mymensingh</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Sylhet"){echo "selected";}?> value="Sylhet">Sylhet</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Comilla"){echo "selected";}?> value="Comilla">Comilla</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Khulna"){echo "selected";}?> value="Khulna">Khulna</option>
						<option <?php if($recUpdtShow->Place_of_Birth=="Rajshahi"){echo "selected";}?> value="Rajshahi">Rajshahi</option>
						
					
					</select>
				</td>



				
				
<td><label>Issue Date: </label>
<input type="text" name="Issue_Date" value="<?php echo $recUpdtShow->Issue_Date; ?>"  />
</td>

				


			</tr>

</div>

			</tr>
            <br>
		</table>
        <td>
		<br> <br>
					<input type="submit" name="btnUpdt" value="Update" id="updatebutton" /><br><br><br><br>
					<span><a href="/si/nid/php/nid_update.php" id="home_updt_database1">Back</a>
				</td>
		</form>
		</div>
		
	
</body>



