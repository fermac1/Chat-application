<?php
    include ('session.php');

    $id = $_SESSION['id'];
    $message='';

if(isset($_POST['change'])){
    include ('test.php');

        $old_password = $_POST['old_password'];
        $old_pass = md5($old_password);
        $new_password = $_POST['new_password'];
        $new_pass = md5($new_password);
        $confirm_newPassword = $_POST['confirm_newPassword'];
        $confirm_newPass = md5($confirm_newPassword);

if ($new_pass == $confirm_newPass){

    if (count($_POST) > 0){
        $sql = "SELECT * FROM users WHERE id='$id' and password = '$old_pass'";
        $result = mysqli_query($conn, $sql);
        $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if ($count == 1){
            mysqli_query($conn, "UPDATE users SET password='$new_pass' WHERE id='$id' ");
            $message = 'changed successfully!';
            header("location: profile.php?id=".$user_data["id"]);
        }
        else {
            $message = 'old password is wrong!';
        }
        
    }
}else{
    echo 'new password does not match!';
}
mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      .flex-wrap{
        height: 100vh;
      }
    </style>  
</head>
<body>
<div class="container">
    <div class="flex-wrap">
    <form action="./change_password.php" method="post" onsubmit="return validation();">
    <div class="row">
        <div id="errorAlert" role="alert" >
            <i class="material-icons icon">error</i>
        </div>
    </div><!-- /error row -->
    <div class="row">
    <div class="input-field">
        <input id="old_password" type="password" class="required" name="old_password">
        <label for="input_text">Old Password</label>
    </div>
    </div>
    <div class="row">
    <div class="input-field">
        <input id="new_password" type="password" class="required" name="new_password">
        <label for="input_text">New Password</label>
        </div> 
    </div>
    <div class="row">
    <div class="input-field">
        <input id="confirm_newPassword" type="password" class="required" name="confirm_newPassword">
        <label for="input_text">Confirm New Password</label>
    </div> 
        <span id="error2" class="error">
        <?php 
        echo $message;?></span>
    </div>
            <button class="btn waves-effect waves-light" type="submit" name="change" id="change">Change</button>
    </form>
    </div><!-- /flex-wrap-->
    </div><!-- /container-->

    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js "></script>
    <script src="js/newPassword.js"></script>
</body>
</html>