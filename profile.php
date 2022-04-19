<?php
    include ('session.php');
    $uid = $_SESSION['id'];
    
    // $sql = "SELECT id, username, pin FROM users WHERE id=".$id;
    // $row = mysqli_fetch_array($sql);

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
           $pin = $row["pin"];
           $cover_image = $row["cover_image"];
           $profile_image = $row["profile_image"];
        }
    } else {
        echo "0 results";
    }

    }

    //photo upload
    if(isset($_POST['submit'])){
        
        if($_FILES['input_cover_photo']['name'] != ''){
        
        echo '<br />';
        echo 'input_cover_photo ';
        echo '<br />';
        echo '<br />';

        $filename = $_FILES['input_cover_photo']['name'];
        $target_file = $_FILES['input_cover_photo']['tmp_name'];
        $uploadOk = 1;
        $filepath = "cover-photo/" . $filename;
        $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        echo 'Target File  = '. $target_file;
        echo '<br />';
        echo 'File name = '. $filename;
        echo '<br />';
        echo 'File path = '. $filepath;

        //get the submitted data
        $sql = "UPDATE users SET cover_image='$filepath' WHERE id = '$id'" ;
        //execute query
        mysqli_query($conn, $sql);

        //check file size
        if($_FILES['input_cover_photo']['size'] > 5000000){
                 echo "Sorry your file is too large.";
                 $uploadOk = 0;
            }
                   
        if(move_uploaded_file( $target_file, $filepath))
        {
            // echo <"<img src=".$filepath." width=150 />";
            echo 'uploaded successfuly';
        }
        else {
            echo "Error!!";
        }
        }else{
            echo 'input_profile_photo <br />';
            $filename = $_FILES['input_profile_photo']['name'];
            $target_file = $_FILES['input_profile_photo']['tmp_name'];
            $uploadOk = 1;
            $filePath = "profile-photo/" . $filename;
            $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            echo 'Target File  = '. $target_file;
            echo '<br />';
            echo 'File name = '. $filename;
            echo '<br />';
            echo 'File path = '. $filePath;
    
            //get the submitted data
            $sql = "UPDATE users SET profile_image='$filePath' WHERE id = '$id'" ;
            //execute query
            mysqli_query($conn, $sql);
    
            //check file size
            if($_FILES['input_profile_photo']['size'] > 5000000){
                     echo "Sorry your file is too large.";
                     $uploadOk = 0;
                }
                
                      
        if(move_uploaded_file( $target_file, $filePath))
        {
            // echo <"<img src=".$filepath." width=150 />";
            echo 'uploaded successfully';
        }
        else {
            echo "Error!!";
        }
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
    <form action="" method="post" enctype="multipart/form-data">
 <!-- Modal to change images -->
 <div class="modal" id="modal">
            <div class="modal_content" id="modal_content">
            <input type="file" id="input_cover_photo" name="input_cover_photo">
                <label for="input_cover_photo" class="one" >Edit cover Photo</label>
                   <li class="divider" tabindex="-2"></li>
                 <input type="file" id="input_profile_photo" name="input_profile_photo">
                 <label for="input_profile_photo" class="two" >Edit profile Photo</label>
            </div>
        </div>


<!-- modal preview -->
<div class="preview_modal" id="preview_modal">
        <!-- To preview the image before Upload -->
        <div class="preview_box">
            <div id="preview_content" class="preview_content">
                    <img src="" alt="preview Image" id="cover_photo">
                    <img src="" alt="preview Image" id="profile_photo">
            </div>

            <div class="preview_button"> 
                <button type= "submit" name="submit">Upload</button>
                 <button id="cancel" onclick="cancelFunc()">Cancel</button>
             </div> 
        </div><!--/preview_box -->   
</div><!-- /preview modal-->           
       
</form>

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
            <button class="changeImg" id="changeImg">
            <i class="material-icons">add_a_photo</i>
        </button>
        
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
                <div class="key" name="pin">
                    <p><?php
                        echo $pin;
                    ?></p>
                </div>
                
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

              <!-- butto for the connection page -->
            <p><a class="waves-effect waves-light btn" href="connect_key.php">Click to Connect</a></p>

            <!-- the bottom buttons for change of passwords and logout -->
            <div class="foot">   
                <div class="change_password">
                    <p><a href="change_password.php" style="color: white;" >change password</a></p>
                </div>
                <div class="logout">
                    <p><a href="logout.php" style="color: white;">logout</a></p>
                </div>
            </div> 

        </div><!-- /details -->
    </div><!-- /profile -->

  <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js "></script>
    <script src="profile.js"></script>
</body>
</html>