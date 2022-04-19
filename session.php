<?php
session_start();

// echo 'Session.php';
// echo '\n Username: '.$_SESSION['username'];
// echo '\n id: '.$_SESSION['id'];
// echo '\n login_time: '.$_SESSION['login_time'];

//check if user is sessioned in
if(!$_SESSION['username']){
    echo "<script language='javascript'>location.href='login.php';</script>";
    echo $_SESSION['id'];
    exit;
} else{
    if(intval(time() - $_SESSION['login_time']) > 1200){
        echo "<script language='javascript'>location.href='login.php';</script>";
        // echo $_SESSION['login_time'];
        exit;
    } else{
        $_SESSION['login_time'] = time(); 
        //echo $_SESSION['login_time'];
    }
}
?>