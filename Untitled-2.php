<?php 
include ('session.php');
include('test.php');
$messages=''; $message_input='';

include('logged_in_user_details.php');

$id = $_GET['id'];//friend
$userID = $_GET['userID']; //logged in user  

$combine = $userID.$id;
$_combine = $id.$userID;


?>

<?php
//inserting message into database
if(isset($_POST['send'])){
    if($_POST['message'] !=''){
    $message_input = $_POST['message'];
    $time_created = echo time();

    // echo 'QWERTY';
    // echo $message_input;


    $message_insert = "INSERT INTO messages(senderID, receiverID, message, combinedID, time_created) VALUES('$userID', '$id', '$message_input', '$combine', '$time_created')";
    mysqli_query($conn, $message_insert);
    // echo $message_input;
    }
}


    //get message from database
    $chat = "SELECT * FROM messages WHERE combinedID='$combine' OR  combinedID='$_combine.' ORDER BY time_created ASC";
    $chat_result = mysqli_query($conn, $chat);


    if(mysqli_num_rows($chat_result) > 0){
        while($data = mysqli_fetch_assoc($chat_result)){
            $receiver = $data['receiverID'];
            $logged_in_user = $data['senderID'];
            // echo $logged_in_user;
            // echo "</br>";
            // echo $receiver;

            if($combine == $_combine){
                
            }
            $messages .= "  <ul class='mlist'>
                            <li class='mBox'>
                            <p class='para'>{$data['message']}</p>
                            </li>
                            </ul>";
        }

    }
?>

<?php


?>
