<?php 
require_once("nid_show_backendwork.php");
?>
<span id="sp1">


<div>
			<span style="text-align: center"><h3>Search Information from Table NID</h3>
			</span>
			<link rel="stylesheet" href="../css/nid_show.css">
			<table border="1" align="center" cellspacing="15">
				<tr>
					<td colspan="8">
						<form action="" method="post" enctype="multipart/form-data">
							
							
							
                            <input type="submit" name="search" value = "Search">
							<form action="" method="post" enctype="multipart/form-data">
							<input type="text" name="srchID" />
						</form>
					</td>
				</tr>
			<?php if(@$numSrch>0){ ?>
				<tr  style="background: #90EE90;" >
                    <th>English_Name</th>
					<th>Bangla_Name</th>
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
					
				</tr>
				<tr align="center">
                    <td><?php echo $recSrch->English_Name;?></td>
					<td><?php echo $recSrch->Bangla_Name; ?></td>
					<td><?php echo $recSrch->Father_Name; ?></td>
					<td><?php echo $recSrch->Mother_Name; ?></td>
					
					<td><?php echo $recSrch->Date; ?></td>
					<td><?php echo $recSrch->Blood_Group; ?></td>
                    <td><?php echo $recSrch->NID_No; ?></td>



					<td id = "php_image">
					
					<?php echo '<img src="data:image;base64,'.base64_encode($recSrch->Image).'" alt="Uploaded Image" > ' ; ?> 
	
	
	</td>

	<td id = "php_image">
					
					<?php echo '<img src="data:image;base64,'.base64_encode($recSrch->Signature).'" alt="Uploaded Image" > ' ; ?> 
	
	
	</td>



	<td id = "php_image">
					
					<?php echo '<img src="data:image;base64,'.base64_encode($recSrch->Barcode).'" alt="Uploaded Image" > ' ; ?> 
	
	
	</td>


					<td><?php echo $recSrch->House_Holding; ?></td>
					<td><?php echo $recSrch->Village_Road; ?></td>
					<td><?php echo $recSrch->Post_Office; ?></td>
					<td><?php echo $recSrch->Place_of_Birth; ?></td>
					<td><?php echo $recSrch->Issue_Date; ?></td>


					<!-- have to fix this bug -->
					
					
                    
					
				</tr>
				<?php }?>
				
               
			</table>
			</span>
			<br>
			
			<span><a href="/si/nid/php/nid_input.php" id="home_updt_database1">NID Home</a>
			<br><br>
            <span><a href="/si/nid/php/nid_update.php" id="home_updt_database2">Update Database</a>
			
			
		</div>





<div>
	
			<span style="text-align: center"><h3>Show List from Table NID</h3>
			</span>
            
			<link rel="stylesheet" href="../css/php/nid_show.css">
			<table border="4" align="center" cellspacing="8">
			<tr  style="background: #90EE90;" >
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
				<?php if($data>0){
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
				
				
				
			
					<td id = "php_image">
					
					<?php echo '<img src="data:image;base64,'.base64_encode($recShow->Image).'" alt="Uploaded Image" > ' ; ?> </td>

					<td id = "php_image">
					
					<?php echo '<img src="data:image;base64,'.base64_encode($recShow->Signature).'" alt="Uploaded Image" > ' ; ?> </td>


					<td id = "php_image">
					
					<?php echo '<img src="data:image;base64,'.base64_encode($recShow->Barcode).'" alt="Uploaded Image" > ' ; ?> </td>
		
					<td><?php echo $recShow->House_Holding; ?></td>
					<td><?php echo $recShow->Village_Road; ?></td>
					<td><?php echo $recShow->Post_Office; ?></td>
					<td><?php echo $recShow->Place_of_Birth; ?></td>
					<td><?php echo $recShow->Issue_Date; ?></td>
					<!-- have to fix this bug -->
					
					
                   
					
					<td>
					<a target="_blank" href="/si/nid/php/nidcardview.php?updtID=<?php echo $recShow->NID_No;?>" id="ggwp3">Card View</a>
					</td>
				</tr>
				<?php $i++;}}?>
			</table>			
		</div>
							<br><br><br>
		