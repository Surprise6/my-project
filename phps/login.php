<?php
//

include_once ("connections.php");
include_once ("function.php");
session_start();
//$user_data = check_login($con);
    if(isset($_POST['submit'])){
        $user_name = isset($_POST['user_name'])  ? $_POST['user_name']  :   "";
        $password = isset($_POST['password'])  ? $_POST['password']   :   "";
        
        if($user_name != "" && $password != ""){
            $select_query = "SELECT * FROM admin_login WHERE username = '$user_name' AND password = '$password'";
            $result = mysqli_query($con, $select_query);
            
            //echo $select_query;
            
            /*$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            print_r($row['username']);*/
                       
            if(mysqli_num_rows($result) > 0){
                header("Location: admin-login-page.php");
            } else {
                die("There's an error. Please contact developer");
            }die(); 
        }else{
            echo 'Username and Password is empty';
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
                            <li><a href="about.php">LOGIN</a></li>
                            <li><a href="admin.php">BACK</a></li>
                </ul>
                    </div>
                </nav>
                
                 <div class="text-box">
                <h1>LOGIN</h1>
                <p> Enter the details you used to sign up to see your Admin page.</p>
                <form method="POST">
                    <div class="form_input"> 
                        <label>Username:</label>
                        <input type="text" name="user_name" placeholder="Enter Your User Name" />
                    </div>
                    <br>
                    <div class="form_input">
                        <label>Password:</label>
                        <input type="password" name="password" placeholder="Enter Your Password"/>
                    </div>
                    <br>
                    <div class="login">
                    <!--<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
                        <a href="admin-login-page.php" class="btn-signup">LOGIN</a>
                    </div>-->
                    
                    <div class="signup">
                     <input type="submit" name="submit" value="LOGIN" />
                   </div>
                </form>
                
                 
                </div>
                        
                
            </section > 

            
    </body>
</html>
