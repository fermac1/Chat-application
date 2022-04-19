<?php
    include ('session.php');
    $initialization=''; $chat_link='';

   include ('logged_in_user_details.php');

    //friends list
    $sql_friend_list = "SELECT * FROM friends WHERE userID='$userid' OR friendID='$userid'";
    $result_friend_list = mysqli_query($conn, $sql_friend_list);

if(mysqli_num_rows($result_friend_list) > 0){

    while($user_data = mysqli_fetch_assoc($result_friend_list)){
            $friendID = $user_data['userID'];
            $userID = $userid;

        if($friendID == $userID){
                $friendID1 = $user_data['friendID'];
            

            //get the friend details from users table
            $sql_friend_data = "SELECT * FROM users WHERE id='$friendID1'";
            $result_friend_data = mysqli_query($conn, $sql_friend_data);
                if(mysqli_num_rows($result_friend_data) > 0){
                    while($data = mysqli_fetch_assoc($result_friend_data)){
                        $friend_username = $data['username'];
                        $p_image = $data['profile_image'];
                        $chat_link = "chat.php?id=".$data['id']."&userID=".$userid;

                        //if condition for profile image display
                            $displayImage = '';

                            if(!empty($p_image)){
                                $displayImage = "<img src={$p_image} alt='profile image' width=40px; height=40px; margin-left=10px; />";
                            }else{
                                $displayImage = $default_profile_image;
                            }


                            //friend info display
                            $initialization .= " <div class='acceptDiv' id='name_pics'>
                                                <div class='nameDiv'>
                                                <a href={$chat_link} class='name_pics'>
                                                    {$displayImage}
                                                    <span class='pname' id='pname'> {$friend_username} </span>
                                                </a>
                                                </div>
                                            </div>";
                        
                    
                    }// while loop for friend data
                }
                else{
                    echo "users does not exist";
                }
        }else{
            $sql_friend_data = "SELECT * FROM users WHERE id='$friendID'";
            $result_friend_data = mysqli_query($conn, $sql_friend_data);

            if(mysqli_num_rows($result_friend_data) > 0){
                while($data = mysqli_fetch_assoc($result_friend_data)){
                    $friend_username = $data['username'];
                    $p_image = $data['profile_image'];
                    $chat_link = "chat.php?id=".$data['id']."&userID=".$userid;

                    //if condition for profile image display
                        $displayImage = '';

                        if(!empty($p_image)){
                            $displayImage = "<img src={$p_image} alt='profile image' width=40px; height=40px; margin-left=10px; />";
                        }else{
                            $displayImage = $default_profile_image;
                        }


                        //friend info display
                        $initialization .= " <div class='acceptDiv' id='name_pics'>
                                            <div class='nameDiv'>
                                            <a href={$chat_link} class='name_pics'>
                                                {$displayImage}
                                                <span class='pname' id='pname'> {$friend_username} </span>
                                            </a>
                                            </div>
                                        </div>";
                    
                   
                }
        }
    }
        }// while loop for result_friend_list

    }
    else{
                // echo "you have no friends";
                $initialization = "  <div class='svg' id='svg'>
            <img src='images/icons8-paper-plane-purple.png' alt='svg icon' class='svg_img'>
            <p class='svg_text'>Keep Being <br> In Touch</p>
        </div>";
    }//result_friend_list


?>