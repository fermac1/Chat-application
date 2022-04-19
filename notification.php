<?php
    include ('session.php');
    

    include ('logged_in_user_details.php');
    
    //read from database for friend requester
    $sql_check = "SELECT * FROM request WHERE requestee = '$userid' AND accept = '0' ";
    $result_check = mysqli_query($conn, $sql_check);
    
    //Checking if there is a friend request
    if ($result_check->num_rows > 0) {
      
        while($user_data = $result_check->fetch_assoc()) {   
            $requesterid = $user_data["requester"];
            $add_friend_link = "add_friend.php?rowID=".$user_data["id"]."&requesterID=".$requesterid."&requesteeID=".$userid;
            $requesterProfile = "profile.php?id=".$user_data["requester"];


            //Using the data from friend request to query users table
            $sql = "SELECT * FROM users WHERE id='$requesterid'";
            $result = $conn->query($sql);

            //Checking if User exist
            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {   
                   $username = $row["username"];
                   $p_image = $row["profile_image"];
                   $rid = $row["id"];
                //    echo $rid;

                $displayImage = '';

                if(!empty($p_image)){
                    $displayImage = "<img src={$p_image} alt='profile image' width=40px; height=40px; margin-left=10px; />";
                }else{
                    $displayImage = $default_profile_image;
                }
                // echo $username;

                //Outputing Html Template string 
                $html .=  "<form method='post' action={$add_friend_link}>
                <div class='acceptDiv' id='name_pics'>
                    <div class='nameDiv'>
                    <a href={$requesterProfile} class='name_pics'>
                        {$displayImage}
                        <span class='pname' id='pname'> {$username} </span>
                    </a>
                    </div>

                    <div class='buttons'>
                    <button type='submit' name='accept' >Accept</button>
                    <button type='submit' name='reject' >Reject</button>
                    </div>
                </div>
              </form>";

                }

            } // End of IF -- //Checking if User exist
            else{
                    echo "No Such User";
            }
            
            
        } // end while  for friend request  

    }   //end of Checking if there is a friend request
    else
    {
        $html_else.= "<p>you have no pending request</p>";
        
    } 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/transition.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
    <div class="container">
    <h5>Notifications</h5>
    <?php
    echo $html;
    echo $html_else;
    ?>


</body>
</html>