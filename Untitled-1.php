// //sending a message
// if(isset($_POST['send'])){
//     $message_input = $_POST['message'];

//     $chat = "SELECT * FROM messages WHERE sender='$userid'";
//     $chat_result =mysqli_query($conn, $chat);
//     if(mysqli_num_rows($chat_result) > 0){
//         while($user_data = mysqli_fetch_assoc($chat_result)){
//             $receiver = $user_data['receiver'];

//             $message .="
//                             <div class='messages' id='messages'>
                        
//                             </div>
//                         ";
//         }
//     }else{
//        echo "no result";
//     }

// }else{
//     $message .="<p> you have no conversation</p>";
// }

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } else{
//     echo "connection stable: ".mysqli_connect_error() ;
// }



// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }



// // get messages from database
// $chat = "SELECT msgID, senderID messages";
// $chat_result = $conn->query($chat);

// echo $chat_result;

// if($chat_result->num_rows > 0){
//     while($row = mysqli_fetch_assoc($chat_result)) {
//                 echo "Message: " . $row["msgID"].  "<br>";
//             }
// }else{echo "No";}

// if (mysqli_num_rows($chat_result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($chat_result)) {
//         echo "Message: " . $row["message"].  "<br>";
//     }
// } else {
//     echo "0 results";
// }
// if(mysqli_num_rows($chat_result) > 0){
//     while($chat_data=mysqli_fetch_assoc($chat_result)){
//         $getMessage = $chat_data['message'];
//         echo $getMessage;
//     }
// }else{
//     echo "no text";
// }