<?php
if(!empty($profile_image)){
            
            echo "<img src='.$profile_image.' alt='profile image' />";
            }else{
                echo $default_profile_image;
            }
            ?>