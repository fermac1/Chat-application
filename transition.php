<?php
    include ('transition_data.php');
    $request_html='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transition page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/transition.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
    <form action="<?php echo "$request_link" ?>" method="post">
    <div class="connectmodal" id="connectmodal">
        <div class="modal_content">
         <label for="connectInput">type In a Key</Label>
             <input type="text" class="validate connectInput" id="connectInput" name="connectInput" >
            
            <button type="submit" name="connect"><a class="waves-effect waves-light btn">Connect</a></button>
        </div>
    </div>
    </form>

    <div class="container">

        
        <!-- it holds the username Box and the search box -->
        <div class="header" id="header">

            <!-- the username and the user image Box -->
            <div class="name_pics" id="name_pics">
            <div class="profile_image">
                
                <?php
              if(!empty($profile_image)){
                
                echo "<img src=".$profile_image." alt='profile image' />";
            }else{
                echo $default_profile_image;
            }
            ?>
            </div><!--/profile_image-->
            <a href="<?php echo "$profile_link" ?>" class="name_pics">
                    <span class="pname" id="pname"><?php echo $username; ?></span>
                </a>
                
            </div><!--/name_pics-->
            <!-- The search Button at the top with username..... onclick it runs a javascript code -->
            <div class="topBtn">
                <button  class="searchBtn" id="searchBtn">
                    <a href="search_page.html"><i class="material-icons" >search</i></a>
                </button>
                    <!-- Dropdown Trigger -->
                <a class='dropdown-trigger more' href='#' data-target='dropdown1' id="dropBtn">
                    <i class="material-icons">more_vert</i></a>
            </div>  <!--/topBtn-->      
        </div><!--/header-->
        
        
      
        <div class="content" id="content">
            <form method="post">
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                 <li><a href=<?php echo "$profile_link" ?>>Profile</a></li>
                    <li><a href="#!" onclick="connect_func()">Connect</a></li>
                    <li class="divider" tabindex="-2"></li>
                    <li><a href="<?php echo "$notification_link"?>">notification</a></li>
                    <li><a href="#!">Help</a></li>
                    <li><a href="logout.php">LogOut</a></li>
                </ul>
           </form>
            
            <!-- display on initialization before adding users -->
            <!-- <div class="svg" id="svg">
                <img src="images/icons8-paper-plane-purple.png" alt="THis is at the center" class="svg_img">
                <p class="svg_text">Keep Being <br> In Touch</p>
            </div>/svg -->
         <?php
         echo $initialization;
         ?>
        </div><!--/content-->

    </div><!--/container-->

    <!-- Div Holding the button to start  meesaging -->
    <a class="btn-floating btn-large cyan pulse addBtn" id="addBtn" onclick="connect_func()"><i class="material-icons">person_add</i></a>

    
                    
    <script src="js/materialize.js"></script>
    <script src="js/transition.js"></script>
</body>
</html>