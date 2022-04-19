<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

<body>
    <div class="container">
        <div class="flex-wrap">
            <h4>Sign Up</h4>
            <p>Already Registered?
                <a href="login.php">Login</a>
            </p>
            <form method="POST" action="add_data.php" onsubmit="return validation();">
            <div class="row">
            <div id="errorAlert" role="alert" >
            <i class="material-icons icon">error</i>
            </div>
            </div><!-- /error row -->
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="input_text">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>    
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                     <input id="username" type="text" class="form" name="username">
                    <label for="input_text">Username</label>
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="form" name="password">
                    <label for="input_text">Password</label>
                    <i class="material-icons open_eye" id="icon">visibility</i>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="confirm_password" type="password" class=" form" name="confirm_password">
                    <label for="input_text">Confirm Password</label>
                    <i class="material-icons open_eye" id="confirm_icon">visibility</i>
                </div> 
                <span id="error2" class="error"></span>
            </div>
                <p>
                    <label>
                      <input class="filled-in checkbox-style" type="checkbox" id="checkbox" />
                       <span>I agree to the following 
                      <a class="terms" target="_blank" href="terms_page.html">Terms and conditions</a></span>
                    </label><br>
                    <span id="cError" class="error"></span>
                </p>

                <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit">Submit
                </button>
            </form>

    </div><!--/flex-wrap-->
    
     </div><!--container -->

    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js "></script>
    <script src="js/script.js"></script>
</body>

</html>