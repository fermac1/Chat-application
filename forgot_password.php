<?php
    // include('session.php');
    include ('test.php');

    $msg = "";

    if(isset($_POST['password_recovery'])){
        $Email = mysqli_real_escape_string($conn, $_POST['email']);
        $sql = "SELECT * FROM users WHERE email='$Email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $db_email = $row['email'];
            $db_id = $row['id'];
            $token = uniqid(md5(time()));

            $sql = "INSERT INTO password_reset (id, email, token) VALUES(NULL, '$Email', '$token')";
            if(mysqli_query($conn, $sql)){
     			//ini_set('SMTP','localhost');
					// ini_set('smtp_port',25);
                $send_to = $db_email;
                $subject = "password reset link";
                $message = "click <a href='https://localhost/FedEx/forgot_password.php?token=$token'>here</a>to reset your password";
                $headers = "MIME-Version: 1.0" . "\r\n";
			   	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


                $headers .= 'From: pfermac@gmail.com'."\r\n" ;

                echo $subject;
                echo $send_to;
                echo $message;
                
                // mail($send_to, $subject,$message, $headers);
                mail($send_to, $subject, $message);

                $msg="<div class='alert alert-success'>password reset link has been sent to the email.</div>";
            //     // $to = $email;
            //     // $subject = "Reset your password on examplesite.com";
            //     // $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
            //     // $msg = wordwrap($msg,70);
            //     // $headers = "From: info@examplesite.com";
            //     // mail($to, $subject, $msg, $headers);
            //     // header('location: pending.php?email=' . $email);
            // }
        }

    }else{
            $msg="<div class='alert alert-danger'>user not found.</div>";
        }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
</head>
<body>
<div class="container">
<div class="flex-wrap">
<h4>Forgot password</h4>
<form action="" method="post">
<div class="row">
	<?php echo $msg; ?>
    <div class="input-field">
        <input id="email" type="email" class="validate" name="email">
        <label for="input_text">Email</label>
        <span class="helper-text" data-error="wrong" data-success="right"></span>    
    </div>
</div>
    <button class="btn waves-effect waves-light" type="submit" name="password_recovery" id="password_recovery">submit</button>
    
    </form>
</div>
</div>
</body>
</html>