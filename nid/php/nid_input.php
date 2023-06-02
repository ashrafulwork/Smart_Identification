<?php session_start(); ?>
<h1>NID FORM</h1>


<head>

<link rel="stylesheet" href="../css/nid_input.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID INPUT</title>
    
</head>
<body>

<?php 
				if(@$_SESSION['msg']!=""){
					echo $_SESSION['msg']; 
					echo $_SESSION['msg']="";
				}
			?>


<div class="div1">
    <div class="div2">
<form action="/si/nid/php/nid_input_backendwork.php" method="POST" enctype="multipart/form-data">
<span class="english_name_label"><label>Name</label></span>
<span class="name_input"><input type="text" name="English_Name" required /></span>
<span class="bangla_name_input"><label>নাম</label></span>
<span class="name_input"><input type="text" name="Bangla_Name" required  /></span><br><br><br><br>
<span class="father_name_label"><label>পিতা </label></span>
<span class="name_input"><input type="text" name="Father_Name" required  /></span>
<span class="mother_name_label"><label>মাতা </label></span>
<span class="name_input"><input type="text" name="Mother_Name" required  /></span><br><br><br><br>
<span class="dateofbirth_label"><label>Date of Birth</label></span>
<span class="dateofbirth_input"><input type="date" name="validity"    required  /></span>
<span class="blood_group_label"><label for="blood">Blood Group:</label></span>
<span class="name_input"><select name="Blood_Group" required >
	<option value="">--- Choose a color ---</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    
</select>
</span><br><br><br><br>
<div>
<span class="nid_label"><label>NID No</label></span>
<span class="name_input"><input type="text" name="NID_No" required /></span><br><br><br><br>
<br><br>
<span class="image_label"><label>Upload your NID Image</label></span>
<input type="file" name="Image" id="Image" required  />


<span class="signature_label"><label>Upload your Signature</label></span>
<input type="file" name="Signature" id="Signature" required  /><br><br><br><br>

<span class="barcode_label"><label>Upload your Barcode</label></span>
<input type="file" name="Barcode" id="Barcode" required  /><br><br><br><br>

<br>


<div class="newly">

<label>বাসা/হোল্ডিং: </label>
<input type="text" name="House_Holding" required  />

&nbsp;&nbsp;
<label>গ্রাম/রাস্তা: </label>
<input type="text" name="Village_Road" required  />

&nbsp;&nbsp;
<label>ডাকঘর: </label>
<input type="text" name="Post_Office" required  />

&nbsp;&nbsp;

<span class=""><label for="Place_of_Birth">Place of Birth::</label></span>
<span class=""><select name="Place_of_Birth" required >
	<option value="">--- Choose Location ---</option>
	<option value="Dhaka">Dhaka</option>
	<option value="Rangpur">Rangpur</option>
	<option value="Chitagong">Chitagong</option>
    <option value="Mymensingh">Mymensingh</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Comilla">Comilla</option>
    <option value="Khulna">Khulna</option>
    <option value="Rajshahi">Rajshahi</option>

    </select>
    </span>
    &nbsp;&nbsp;
<label>Issue Date: </label>
<input type="date" name="Issue_Date" required  />


</div>



<br><br><br>
<span class="submit_output"><input type="submit" name="submit" value = "Submit"></span>
<br><br><br><br>
<p class="fill_info_message">Please fill out the information</p>



<span > <a href="/si/nid/php/nid_show.php" id="home_show_database">Show NID DATABASE</a></span><br><br><br>
    <span><a href="/si/services.php"  id="home_show_database"> GO BACK TO HOME</a></span>
</body>






