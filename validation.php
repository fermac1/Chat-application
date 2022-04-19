 <?php
    include('test.php');
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($username) && !empty($email) && !empty($password)){

    }else{
        echo 'all input fields are required!';
    }
?>