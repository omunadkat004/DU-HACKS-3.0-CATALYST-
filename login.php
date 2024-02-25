<?php
session_start();  // creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie. 

// check if the user is already logged in
// if(isset($_SESSION['username']))
// {
//     header("location: welcome.php");

//     exit;
// }

require_once "config.php";//embed php code another file

$username= $password= "";
$err= "";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err="please enter your name + passowrd";
    }
    else{
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);

    }
    if(empty($err)){
        $sql = "SELECT id,username,password FROM users WHERE username = ? ";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt,"s",$param_username);
        $param_username = $username;

        //try  to execute statment
       if(mysqli_stmt_execute($stmt)) {
        
            mysqli_stmt_store_result($stmt);  //store it

            if(mysqli_stmt_num_rows($stmt) == 1){ 

                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);  // organized it 
                
                if(mysqli_stmt_fetch($stmt))  //pull out
                {
                    if(password_verify($password, $hashed_password))
                    {
                        //allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //redirect to welcome page
                        header("location: welcome.php");                        
                    }
                }  
           }   
       } 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8ce713fd95.js" crossorigin="anonymous"></script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  <!-- understand for bowser -->
        
    <script src="lognin.js"></script>
    
</head>
<body>
    

    <div class="container">
        <div class="form-box">
            <h1 id="title"><i class="fa-solid fa-user-plus"></i>   Sign Up</h1>
            <form action="" method="post">
                <div class="input-group">

                    <div class="input-field"  id="namefield">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" placeholder="Email" name="email">
                    </div>

                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" name="username" placeholder="username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                   <p>Forgot Password <a href="#">click here</a></p> 
                </div>
                <div class="btn-field">
                    <button type="button" id="signinBtn">Sign in</button>
                    <button type="button" id="loginBtn" class="disable">Log in</button>
                </div>
                
                <div class="submit">
                    <button type="submit" id="submit" value="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>

        let signinBtn=document.getElementById("signinBtn");
        let loginBtn=document.getElementById("loginBtn");
        let namefield=document.getElementById("namefield");
        let title=document.getElementById("title");

        loginBtn.onclick = function(){
            namefield.style.maxHeight="0";
            title.innerHTML= "Log in"
            signinBtn.classList.add("disable");
            loginBtn.classList.remove("disable");
        }

        signinBtn.onclick = function(){
            namefield.style.maxHeight="65px"
            title.innerHTML= "Sign in"
            signinBtn.classList.remove("disable");
            loginBtn.classList.add("disable");
        }
    </script>
</body>
</html>  