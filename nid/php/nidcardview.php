<?php 
require_once("nid_cardviewbackendwork.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID CARD</title>
    <link rel="stylesheet" href="../css/nidcardview.css">
    <link rel="stylesheet" href="../css/printable.css">
</head>
<body>
    <div class="container">
        <div class="front">
        
        
            <img src="../images/gv.png" id="image1">
            <br> <strong><span id="govermentline1">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span></strong>
          <p id="govermentline2">Government of the People`s Republic of Bangladesh</p>
          <p id="nidcard1">জাতীয় পরিচয়পত্র /  </p><p id="nidcard2"> National ID Card</p><hr>
          <?php if($data>0){
					
                    ($recShow = mysqli_fetch_object($qryShow))
                                    
            ?>
          <p id = "sm_image" >  <?php echo '<img src="data:image;base64,'.base64_encode($recShow->Image).'" alt="Uploaded Image" > ' ; ?></p>
          <p id = "dt_image" > <?php echo $recShow->Date; ?></p>
          
            
          


         
            
           <p id = "php_image" >  <?php echo '<img src="data:image;base64,'.base64_encode($recShow->Image).'" alt="Uploaded Image" > ' ; ?></p>
           <div class = "mid_content">
           <p id="para2">নাম</p> <p id="insidepara1"><?php echo $recShow->English_Name; ?></p>
            <p id="para3">Name</p><p id="insidepara2"><?php echo $recShow->Bangla_Name; ?></p>
            <p id="para4">পিতা </p><p id="insidepara3"><?php echo $recShow->Father_Name; ?></p>
            <p id="para5">মাতা</p><p id="insidepara4"><?php echo $recShow->Mother_Name; ?></p>
           <p id="para6">Date of Birth :&nbsp<span id="insidepara5"> <?php echo $recShow->Date; ?></span></p>
            <p id="para7">NID No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp<span id="insidepara6"><?php echo $recShow->NID_No; ?></span></p> 
            <p id = "signature_image" >  <?php echo '<img src="data:image;base64,'.base64_encode($recShow->Signature).'" alt="Uploaded Image" > ' ; ?></p>
          
                
          
            <img src="../images/sim.jpg" id ="image4">
           
           
            
            



            </div>

            

            
           
            
         

        </div>
        
       
        <div class="back">
           
        <p id = "barcode_image" >  <?php echo '<img src="data:image;base64,'.base64_encode($recShow->Barcode).'" alt="Uploaded Image" > ' ; ?></p>

       
        <span id="address">ঠিকানা:</span>
        <span id="address2">বাসা/হোল্ডিং:   <?php echo $recShow->House_Holding; ?>,</span> 
        <span id="address3">গ্রাম/রাস্তা:     <?php echo $recShow-> Village_Road; ?>, </span> <br>
        <span id="address4">ডাকঘর:  <?php echo $recShow-> Post_Office; ?> </span>
        
   <p id = "bgroup"> Blood Group :  <strong>
    
   <span id = "bgroup2"><?php echo $recShow-> Blood_Group; ?></span></p></strong>
    <p id = "pcb"> Place of Birth : <strong>
    <span id = "pcb2"><?php echo $recShow-> Place_of_Birth; ?></span></p></strong>


    <p id = "isdate"> Issue Date : <strong>
    <span id = "isdate2"><?php echo $recShow-> Issue_Date; ?></span></p></strong>
</div>
    <button onclick = "window.print();" >Print</button>
    </div>
    
    <?php }?>
   
</body>
