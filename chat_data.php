<?php 
include ('session.php');
include('test.php');
$messages=''; 

include('logged_in_user_details.php');

$id = $_GET['id'];//friend
$userID = $_GET['userID']; //logged in user  

$combine = $userID.$id;
$_combine = $id.$userID;

$timezone ="Africa/Lagos";
date_default_timezone_set($timezone);
$time_date = Date("Y-m-d h:i:s");
// echo date_default_timezone_get();
// 
// date_default_timezone_set($timezone);

// echo date("h:ia", strtotime($time_date));

?>

<?php
//inserting message into database
if(isset($_POST['send'])){
    if($_POST['message'] !=''){
    $message_input = $_POST['message'];


    $message_insert = "INSERT INTO messages(senderID, receiverID, message, combinedID, time_created) VALUES('$userID', '$id', '$message_input', '$combine', '$time_date')";
    mysqli_query($conn, $message_insert);
    // echo $message_input;
    }
}

$message_input='';

    //get message from database
    $chat = "SELECT * FROM messages WHERE combinedID='$combine' OR  combinedID='$_combine.' ORDER BY time_created ASC";
    $chat_result = mysqli_query($conn, $chat);


    if(mysqli_num_rows($chat_result) > 0){
        while($data = mysqli_fetch_assoc($chat_result)){
            $receiver = $data['receiverID'];
            $logged_in_user = $data['senderID'];
            // echo $logged_in_user;
            // echo "</br>";
            // echo $id;

            if($receiver == $id){
                $receiver1 = $data['senderID'];
                // echo $receiver1;
                $send = "SELECT * FROM users WHERE id='$receiver1'";
                $result_send = mysqli_query($conn, $send);
                if(mysqli_num_rows($result_send) > 0){
                    while($msg_data = mysqli_fetch_assoc($result_send)){
                        $username1 = $msg_data['username'];
                        $messages .= "  <ul class='mlist'>
                        <li class='mBox'>
                        <p class='para'>{$data['message']}</p>  
                        </li>
                        </ul>
                        <p class='time'>".date('h:i a', strtotime($data['time_created']))."</p>";
                    }
                }else{
                    echo "error";
                }

            }else{
                $send = "SELECT * FROM users WHERE id='$receiver'";
                $result_send = mysqli_query($conn, $send);
                if(mysqli_num_rows($result_send) > 0){
                    while($msg_data = mysqli_fetch_assoc($result_send)){
                        $messages .= "  <ul class='mlist2'>
                        <li class='incomingmBox'>
                        <p class='para2'>{$data['message']}</p>
                        
                        </li>
                        <p class='time'>".date('h:i a', strtotime($data['time_created']))."</p>
                        </ul>";
                    }
                }
            }
        }

    }
?>