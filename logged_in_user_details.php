<?php
// $logged=$_SESSION['id'];

$username = '';  $profile_image =''; $profile_link=''; $friend_profile_link=''; $request_link=''; $notification_link='';
 $p_image=''; $add_friend_link=''; $html='';
    $html_else='';

if (!empty($_GET['id'])) {
include ('test.php');
    # code...
    $userid =  $_GET['id'];
    // echo $id;

$sql = "SELECT * FROM users WHERE id=".$userid;
$result = $conn->query($sql);
$default_profile_image = "<img src= 'images/user-icon.png' width=50/>";
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {   
       $username = $row["username"];
       $requesteeid = $row["id"];
       $profile_image = $row["profile_image"];
       $profile_link ="profile.php?id=".$row["id"];
       $friend_profile_link ="friend_profile.php?id=".$row["id"];
       $request_link ="request.php?id=".$row["id"];
       $notification_link ="notification.php?id=".$row["id"];
    }
} else {
    echo "0 results";
}
}
?>