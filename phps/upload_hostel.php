<?php
include("connections.php");
include("function.php");

session_start();


    if(isset($_POST['submit'])){
        $id = isset($_POST['id'])  ? $_POST['id']  :   "";
        $hostel_name = isset($_POST['hostel_name'])  ? $_POST['hostel_name']   :   "";
        $caretaker_name = isset($_POST['caretaker_name'])  ? $_POST['caretaker_name']   :   "";
        $caretaker_phone = isset($_POST['caretaker_phone'])  ? $_POST['caretaker_phone']   :   "";
        $hostel_email = isset($_POST['hostel_email'])  ? $_POST['hostel_email']   :   "";
        $momo_num = isset($_POST['momo_num'])  ? $_POST['momo_num']   :   "";
        $bank_name = isset($_POST['bank_name'])  ? $_POST['bank_name']   :   "";
        $bank_acct = isset($_POST['bank_acct'])  ? $_POST['bank_acct']   :   "";
        $fileToUpload = isset($_POST['fileToUpload'])  ? $_POST['fileToUpload']   :   "";
        $fileToUpload2 = isset($_POST['fileToUpload2'])  ? $_POST['fileToUpload2']   :   "";
        //$date = isset($_POST['date'])  ? $_POST['password']   :   "";
        
      
        
        $query = "INSERT INTO upload_hostel (id, hostel_name, caretaker_name, caretaker_phone, hostel_email, momo_num, bank_name, bank_acct, fileToUpload, fileToUpload2)
                  VALUES ('$id', '$hostel_name', '$caretaker_name', '$caretaker_phone', '$hostel_email','$momo_num','$bank_name','$bank_acct','$fileToUpload','$fileToUpload2')";
        $result = mysqli_query($con, $query);
        
        if($result > 0){
            echo 'Upload Successful';
//            header("Location: login.php");
        }
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       
        <link href="hosteller.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <section class="header">
             <nav>
                 <a href="index.php"><img src="logo.jpg"></a>
        <div class="nav-links">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="admin.php">ADMIN</a></li>
                            <li><a href="admin-login-page.php">BACK</a></li>
                        </ul>
                    </div>    
             </nav>
             
                  <div class="text-box">
                      <br>
                      <br>
                      <br>
                      <br>
                <h1>UPLOAD HOSTEL</h1>
                <br>
                <form method="POST">
                    <div class="form_input"> 
                        <label>Hostel Name:</label>
                        <input type="text" name="hostel_name" placeholder="Enter Your Hostel Name" />
                    </div>
                    <br>
                    <div class="form_input">
                        <label>Caretaker Name:</label>
                        <input type="text" name="caretaker_name" placeholder="Enter Your Full Name"/>
                    </div>
                    <br>
                    <div class="form_input">
                        <label>Caretaker Phone Number:</label>
                        <input type="number" name="caretaker_phone" placeholder="Enter Your Full Name"/>
                    </div>
                    <br>
<!--                    <div class="form_input">
                        <label>Caretaker Phone Number:</label>
                        <input type="number" name="caretaker_phone" placeholder="Enter Your Phone Number"/>
                    </div>
                    <br>-->
                    <div class="form_input">
                        <label>Hostel Email:</label>
                        <input type="text" name="hostel_email" placeholder="Enter Your Hostel Email Address"/>
                    </div>
                    <br>
                    <div class="form_input">
                        <label>Hostel Momo Number:</label>
                        <input type="number" name="momo_num" placeholder="Enter Hostel Momo Number"/>
                    </div>
                    <br>

                    
                    <div class="form_input">
                        <label>Hostel Bank Name:</label>
                        <input type="text" name="bank_name" placeholder="Enter Hostel Bank Name"/>
                    </div>
                    <br>
                    <div class="form_input">
                        <label>Hostel Bank Account Number:</label>
                        <input type="text" name="bank_acct" placeholder="Enter Hostel Account Number"/>
                    </div>

                    <br>

                    <form action="upload.php" method="post" enctype="multipart/form-data">   
                                     <div class="image"> 
                     Select image of Hostel Accreditation License:
                     <input type="file" name="fileToUpload" id="fileToUpload">
                     <br>
<!--                              <input type="submit" value="Upload Image" name="submit" >-->
                              </div>
                        
                        <br>
                        <form action="upload.php" method="post" enctype="multipart/form-data">   
                                     <div class="image"> 
                     Images of Hostel:
                     <input type="file" name="fileToUpload" id="fileToUpload2">
                     <br>
                              <input type="submit" value="Submit" name="submit" >
                              </div>
                    </form>

                  </div>
    </body>
</html>


