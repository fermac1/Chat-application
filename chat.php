<?php
    include ('chat_data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/chat.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
    <div class="container">

    <!-- it holds the username Box and the search box -->
    <div class="header" id="header">

   <!-- the username and the user image Box -->
   <div class="name_pics" id="name_pics">
            <div class="profile_image">
                
            <?php
              if(!empty($profile_image)){
                
                echo "<img src=".$profile_image." alt='profile image' width=50/>";
            }else{
                echo $default_profile_image;
            }
            ?>
            </div><!--/profile_image-->

            <a href="<?php echo "$friend_profile_link" ?>" class="name_pics">
                <span class="pname" id="pname"><?php echo $username; ?></span>
            </a>
                
    </div><!--/name_pics-->
        <!-- The search Button at the top with username..... onclick it runs a javascript code -->
        <div class="topBtn">
                <!-- Dropdown Trigger -->
            <a class='dropdown-trigger more' href='#' data-target='dropdown1'>
                <i class="material-icons" id="more_vert">more_vert</i></a>
        </div>  <!--/topBtn-->
       
    </div><!--/header-->
    <form method="post">
        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="<?php echo "$profile_link" ?>">Profile</a></li>
            <li><a href="#!">Search</a></li>
            <li class="divider" tabindex="-2"></li>
            <li><a href="#!">Help</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
       
   </form>   

   <div class='mcontent'>   
        <div class='messages' id='messages'>
        <?php echo $messages; ?>
        
        </div>
   </div>


<form action="" method="post">
        <div class="bottom">
            <div class="inputDiv">
                <input type="text" name="message" class="mtype" id="mtype" placeholder="Type a message here...">
            </div>
            <div class="send">
                <button type='submit' name='send' class="sendBtn" id="sendBtn">
                <i class="material-icons">send</i>
                </button>
            </div> 
            
        </div><!--/bottom-->
</form>

    </div><!--/container-- onclick="sending()" -->

 <!--Compiled and minified JavaScript -->
 <script src="js/materialize.min.js "></script>
 
</body>
</html>