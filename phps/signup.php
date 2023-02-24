<?php
include("connections.php");
include("function.php");

session_start();


    if(isset($_POST['submit'])){
        $id = isset($_POST['id'])  ? $_POST['id']  :   "";
        $username = isset($_POST['user_name'])  ? $_POST['user_name']   :   "";
        $email = isset($_POST['email'])  ? $_POST['email']   :   "";
        $password = isset($_POST['password'])  ? $_POST['password']   :   "";
        //$date = isset($_POST['date'])  ? $_POST['password']   :   "";
        
        $user_id = random_num(20);
        
        $query = "INSERT INTO admin_login (id, user_id, username, email, password)
                  VALUES ('$id', '$user_id', '$username', '$email', '$password')";
        $result = mysqli_query($con, $query);
        
        if($result > 0){
            header("Location: login.php");
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
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="admin.php">BACK</a></li>
                </ul>
                    </div>
                </nav>
             
              <div class="text-box">
                <h1>SIGN UP</h1>
                <p>Wlecome Admin.<br> If you have an  </p>
<!--                <a href="hostel.php"class="hero-btn">Make Reservation</a>-->
                
                <form method="post">
                    <!--<div class="username"> 
                        <label>Username:</label>-->
                        <input type="hidden" name="id" placeholder="Enter Your User Name(i.e. your hostel name)" />
                    <!--</div>-->
                    <div class="username"> 
                        <label>Username:</label>
                        <input type="text" name="user_name" placeholder="Enter Your User Name(i.e. your hostel name)" />
                    </div>
<!--                 <div class="phone"> 
                        <input type="number" name="phone" placeholder="Enter Your Phone Number" />
                    </div>-->
<br>
                    <div class="email"> 
                        <label>Email:</label>
                        <input type="text" name="email" placeholder="Enter Your Email" />
                    </div>
<br>
                    <div class="form_input">
                        <label>Password:</label>
                        <input type="password" name="password" placeholder="Enter Your Password"/>
                    </div>
<br>

                 <div class="signup">
                    <input type="submit" name="submit" value="SIGNUP" />
                    <!--<a href="login.php" class="btn-signup">SIGNUP</a>-->
                    </div>
                </form>
                    
                </div>
         </section>
                
            
    </body>
</html>
