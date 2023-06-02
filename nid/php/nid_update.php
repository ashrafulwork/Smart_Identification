
<head>
<link rel="stylesheet" href="../css/nid_update.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID UDPATE</title>
</head>
<body>




    <?php  
	require_once('../../databaseconnection.php');
	$sqlShow = "SELECT * FROM nid";
	$qryShow = mysqli_query($dbCon,$sqlShow);
	$numData = mysqli_num_rows($qryShow);
?>


<div>
			<span style="text-align: center"><h3>Show List & Update Option for Table Information</h3>
			</span>

			<table border="1" align="center" cellspacing="8">
				<tr style="background: #90EE90;">
					<th>English_Name</th>
					<th>Bangla_Name </th>
					<th>Father_Name</th>
					<th>Mother_Name</th>
					<th>Date</th>
					<th>Blood_Group</th>
                    <th>NID_No</th>
					<th>Image</th>
					<th>Signature</th>
					<th>Barcode</th>
					<th>House Holding</th>
					<th>Village Road</th>
                    <th>Post Office</th>
					<th>Place of Birth</th>
					<th>Issue Date</th>
					<th>ACTIONS</th>
				</tr>
				<?php if($numData>0){
					$i=0;
						while($recShow = mysqli_fetch_object($qryShow)){
							if($i%2==1){ $rowColor='#FDA172';}else{$rowColor='#FDA172';}				
				?>
				<tr align="center" style="background: <?php echo $rowColor;?> ;">
					<td><?php echo $recShow->English_Name; ?></td>
					<td><?php echo $recShow->Bangla_Name; ?></td>
					<td><?php echo $recShow->Father_Name; ?></td>
					<td><?php echo $recShow->Mother_Name; ?></td>
					<td><?php echo $recShow->Date; ?></td>
					<td><?php echo $recShow->Blood_Group; ?></td>
                    <td><?php echo $recShow->NID_No; ?></td>
					<td id="php_image">
    <?php
    if (!empty($recShow->Image)) {
        echo '<img src="data:image;base64,' . base64_encode($recShow->Image) . '" alt="Uploaded Image" />';
    }


    ?>
</td>
<td id="php_image">
<?php
    if (!empty($recShow->Signature)) {
        echo '<img src="data:image;base64,' . base64_encode($recShow->Signature) . '" alt="Uploaded Image" />';
    }

	
    ?>
</td>

<td id="php_image">
<?php
    if (!empty($recShow->Barcode)) {
        echo '<img src="data:image;base64,' . base64_encode($recShow->Barcode) . '" alt="Uploaded Image" />';
    }

	
    ?>
	</td>


					
					<td><?php echo $recShow->House_Holding; ?></td>
					<td><?php echo $recShow->Village_Road; ?></td>
					<td><?php echo $recShow->Post_Office; ?></td>
					<td><?php echo $recShow->Place_of_Birth; ?></td>
					<td><?php echo $recShow->Issue_Date; ?></td>
					<td>


                    
						<a target="_blank" href="/si/nid/php/nid_updateform.php?updtID=<?php echo $recShow->NID_No;?>" id="ggwp1">Update</a><strong>&nbsp;/&nbsp;</strong>
						<a href="/si/nid/php/nid_deletebackendwork.php?dltID=<?php echo $recShow->NID_No;?>"id="ggwp2">Delete</a><strong>&nbsp;/&nbsp;</strong>
						<a target="_blank" href="/si/nid/php/nid.php?updtID=<?php echo $recShow->NID_No;?>" id="ggwp3">Card View</a>
					</td>
				</tr>
				<?php $i++;}}?>
			</table>			
            	
		</div>

 <br><br><br><br>
    <div>
    <span><a href="/si/nid/php/nid_show.php" id="home_updt_database1"> BACK</a>
        

    </div>
</span>

        </body>
