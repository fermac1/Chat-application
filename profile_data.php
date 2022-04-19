<?php

  if(!empty($_POST['id'])){
    $id = $_POST['id'];
    echo $id;

    include('test.php');
  
        //read from database
        $sql = "SELECT id, username, email, pin FROM users WHERE id =".$id;
        _
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " - username: " . $row["username"]. " " . $row["pin"]. "<br>";
            }
         } else{
                echo "0 results";
            }
        
        mysqli_close($conn);}
        // else {
        //         # code...
        //         echo "failed";
        //         header("location: login.php");
        //     }
?>
