<?php
include('session.php');
include ('test.php');

//         # code...
include ('logged_in_user_details.php');

    
//         $id =  $_GET['id'];
        // echo 'requestee = '.$id;//requester
        // echo '</br>';
        // echo 'requester = '.$uid;//requestee(logged in user)
        $rowID = $_GET["rowID"];
        $requesterID = $_GET["requesterID"];
        $userID = $_GET['requesteeID'];
        echo "</br>";
        // echo $rowID;
        // echo "</br>";
        echo $userID;
        echo "</br>";
        echo   $requesterID;

        
        
        //when the requestee clicks on accept button
        if(isset($_POST['accept'])){
            $sql = "UPDATE request SET accept=TRUE WHERE id=".$rowID;
            $result = $conn->query($sql);
           
            if($result > 0){
                $insert = "INSERT INTO friends(userID, friendID) VALUES('$userID', '$requesterID')";
                mysqli_query($conn, $insert);
                echo "added successfully";
            }

        }else
        if(isset($_POST['reject'])){
            $sql_delete = "DELETE * FROM request requestee = '$userID'";
            $result_delete = mysqli_query($conn, $sql_delete);
            echo $id;
        }else{
            echo "no requests";
        }
// }
?>