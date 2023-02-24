<?php
session_start();


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
                            <li><a href="myBookings.php">MY BOOKINGS</a></li>
                        </ul>
                    </div>    
             </nav>
             
                  <div class="text-box">
                <h1>WELCOME USER!</h1>
                <p> IF YOU ARE ON THIS PAGE, THAT MEANS YOU HAVE BEEN ABLE TO SIGN AND LOGIN SUCCESSFULLY.<br>
                    ON THIS PAGE, YOU CAN UPLOAD THE HOSTEL YOU WANT VIEWERS TO SEE AND CHECK YOUR RESERVATIONS<br>
                    AND MAKE EDITS IF NECESSARY TO WHAT YOU HAVE UPLOADED.</p>
                <a href="upload_hostel.php"class="hero-btn">Upload Hostel</a>
                </div>
                        
            
             </section>
      
    </body>
</html>