<?php
    include('test.php');

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirm_password'];

        $pass = md5($password);
        $cpass = md5($cpassword);

        //generate pin
        function random_key($string_length){
            $string_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
            return substr(str_shuffle($string_result),0, $string_length);   
        }
        
            $pin = random_key(8);
        

        //add user data
        $sql = "INSERT INTO users ( email, username, password, pin)
         VALUES ('$email', '$username', '$pass', '$pin')";
        

        if (mysqli_query($conn, $sql)){
            header("location: login.php");
             die;
        }else{
            echo "error:". $sql. "" .mysqli_error($conn);
        }

        //read from database
        $sql = "SELECT pin FROM users WHERE pin = '$pin' limit 1";
    
        $result = mysqli_query($conn, $sql);
        $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        mysqli_close($conn);

    // }
    }
?>