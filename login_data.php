<?php
    session_start();
    include('test.php');
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pass = md5($password);
    
        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($pass);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $pass);

        //read from database
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$pass' limit 1";
    
   $result = mysqli_query($conn, $sql);
   $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);

   if($count==1){
    $_SESSION['username'] = $user_data['username'];
    $_SESSION['id'] = $user_data['id'];
    $_SESSION['email'] = $user_data['email'];
    $_SESSION['login_time'] = time();

    //  header("location: profile.php?id=".$user_data["id"]); 
    header("location:transition.php?id=".$user_data["id"]);
       die; 
   }else{
      echo "login failed";
   }
       
   mysqli_close($conn);

}

?>