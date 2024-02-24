<?php

require_once "config.php";     // used to embed php code from anotheer file, if file not found than shows fatal error 
$username = $password = $confirm_password = "" ;
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){
   //check if username is empty
   if(empty(trim($_POST["username"])))    //trim remove whitespaces & empty checks var
{
   $username_err = "username cannot be blank";
}
else
{
   $sql ="SELECT id FROM users WHERE username = ?";  //query for use multiple time(prepared statment)
   $stmt =  mysqli_prepare($conn, $sql);

   if($stmt){
       mysqli_stmt_bind_param($stmt,"s",$param_username);  //parameter bind with stmt & string bind with param_username
       
       //set value of param_username
       $param_username = trim($_POST['username']);  //bind with username

       //try  to execute statment
       if(mysqli_stmt_execute($stmt))    //execute prepared statement
       {
           mysqli_stmt_store_result($stmt);    // store the  result locally
       
           if(mysqli_stmt_num_rows($stmt) == 1){    

               $username_err ="This username is already taken";
               
           }   //if username taken
           else{
               $username = trim($_POST['username']);
           }
       }
       else{
           echo "Something went wrong";
       }
   }  
}
mysqli_stmt_close($stmt);  //accepts stmt as para and close it


// check for password

if(empty(trim($_POST['password']))){
   $password_err = "Password cannot be blank";
}
else if(strlen(trim($_POST['password'])) < 5){

   $password_err ="password cannot be less than 5 characters";
}
else{
   $password = trim($_POST['password']);
}

//if no errors,than go for insert into database

if(empty($username_err) && empty($password_err)){

   $sql ="INSERT INTO users (username, password) VALUES (?,?)";
   $stmt = mysqli_prepare($conn,$sql);

   if($stmt)
   {
       mysqli_stmt_bind_param($stmt,"ss", $param_username, $param_password);

       // set para
       $param_username = $username;
       $param_password = password_hash($password, PASSWORD_DEFAULT);  //for security store in hash(hash is one way function) use default algo

       // try to execute query
       if(mysqli_stmt_execute($stmt))
       {
           header("location: login.php");  //send raw http header to client & go to login.php
       }
       else{
           echo "something went wrong ... can not redirect!";
       }
   }
   mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >register</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8ce713fd95.js" crossorigin="anonymous"></script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  <!-- understand for bowser -->
        
    <script src="signin.js"></script>
    
</head>
<body>
    

    <div class="container">
        <div class="form-box">
            <h1 id="title"><i class="fa-solid fa-user-plus"></i>   Sign Up</h1>
            <form action="" method="post">
                <div class="input-group">

                    <div class="input-field"  id="namefield">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" placeholder="Name" name="username">
                    </div>

                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" placeholder="Email">
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