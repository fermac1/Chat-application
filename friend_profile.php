<?php
    include ('session.php');
    $uid = $_SESSION['id'];

    $username = ''; $pin  = ''; $email = ''; $cover_image =''; $profile_image =''; 

    if (!empty($_GET['id'])) {
    include ('test.php');
        # code...
        $id =  $_GET['id'];
        // echo $id;
    
    $sql = "SELECT * FROM users WHERE id=".$id;
    $result = $conn->query($sql);
    $default_profile_image = "<img src= 'images/user-icon.png' width=100/>";
    $default_cover_image = "<img src= 'images/cover_default.jpg' />";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {   
           $username = $row["username"];
           $email = $row["email"];
        //    $pin = $row["pin"];
           $cover_image = $row["cover_image"];
           $profile_image = $row["profile_image"];
        }
    } else {
        echo "0 results";
    }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    
   
</head>

<body>

    <div class="profile">

        <!-- background profile image -->
        <div class="cover-image">
        <?php
              if(!empty($cover_image)){
               echo "<img src=".$cover_image." alt='cover image' style='width: 100%; height: 120%;' />";
                
            }else{
                // echo "<img src=".$default_cover_image." alt='default_cover image' style='width: 100%; height: 120%;' />";
                echo "<img src='images/cover-default.jpg.' alt='default cover image' style='width: 100%; height: 120%;'/>";
            }
            ?> 
        </div><!--/cover-image-->
        
           <!-- the main profile image in circle -->
           <div class="p-imgDiv">
           <div class="profile_image">
            <?php
              if(!empty($profile_image)){
                
                echo "<img src=".$profile_image." alt='profile image' />";
            }else{
                echo $default_profile_image;
            }
            ?> 
         </div><!--/profile-image-->
            <!-- <button class="changeImg" id="changeImg">
            <i class="material-icons">add_a_photo</i>
        </button> -->
        
        </div><!--/p-imgDiv-->
        
 
        
        
        <!-- details on the profile -->
        <div class="details">
            <div class="pin">    
                <div class="name" name="username">
                    <p><?php
                         echo $username;
                    ?></p>
                </div>
                <div class="email" name="email">
                    <p><?php
                        echo $email;
                    ?></p>
                </div>
                <!-- <div class="key" name="pin">
                    <p></p>
                </div> -->
                
            </div>

            <!-- counter -->
            <div  class="notify">
                <div class="connects">    
                    <span>Connects</span>
                    <p class="badge">3</p>
                </div>
                <div class="notifications">
                    <span>notification</span>
                    <p class="badge">3</p>
                </div>

                <div class="archive">
                    <span>archive</span>
                    <p class="badge">3</p>
                </div>
            </div>


        </div><!-- /details -->
    </div><!-- /profile -->

  <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js "></script>
    <script src="profile.js"></script>
</body>
</html>