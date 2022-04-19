<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
      .flex-wrap{
        height: 100vh;
      }
 
    </style>
</head>
<body>

<!-- The splash modal -->
     <!-- <div class="container_modal" id="container_modal">
        <div class="content">  
            <div class="logo" id="logo">
                <span><i>Peng</i></span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg" id="svg">
                <path fill="rgb(7, 0, 10)" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,117.3C384,160,480,224,576,218.7C672,213,768,139,864,122.7C960,107,1056,149,1152,170.7C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>   -->

    <div class="container">
    <div class="flex-wrap">
    <h4>Welcome Back!!</h4>
    <p>Not yet Registered? <a class="signup" href="signup.php">Sign up</a></p>
    
    <form action="login_data.php" method="POST" onsubmit = "return validation();" name= "form">
        <div class="row">
            <div class="input-field ">
                <input id="username" class="form" type="text" name="username">
                <label for="input_text">Username</label>
            
            </div>
        </div>
        <div class="row">
            <div class="input-field" id="passwordDiv">
                <input id="password" type="password" name="password">
                <label for="input_text">Password</label>
                <i class="material-icons open_eye" id="icon">visibility</i>
            </div>
        </div>
        <p><a href="forgot_password.php"> Forgotten password?</a></p>
        <div class="Button">
        <button type="submit" class="btn" name = "submit">Login</button>
        </div>

    </form>
    
    </div>
    </div><!--/ container-->

    <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>