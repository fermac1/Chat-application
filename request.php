<?php
    include ('session.php');
    $uid = $_SESSION['id'];

    $username = ''; $pin=''; $request_html='';
            
    if (!empty($_GET['id'])) {
    include ('test.php');
        # code...
        $requesterid =  $_GET['id'];

        if(isset($_POST['connect'])){
            if($_POST['connectInput'] !=''){

                $pin = $_POST['connectInput'];
            
                        //read from users database to check if pin exists
            $sql = "SELECT * FROM users WHERE pin='$pin'";
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { 
                        $username = $row["username"];
                        $pin = $row["pin"];
                        $requesteeid = $row["id"];
                    }
                   
                    //read from request database
                    $select = "SELECT * FROM request WHERE requester ='$requesterid'AND requestee='$requesteeid'";
                    $result_check=mysqli_query($conn,$select);
                      
                    //check if request already exists
                     if(mysqli_num_rows($result_check) == 0){
                         //insert into database
                    $insert = "INSERT INTO request (requester, requestee) VALUES ('$requesterid','$requesteeid')";
                    mysqli_query($conn, $insert);
                   
                    // echo "request sent successfully";

                    // $request_html.="<form action={$request_link} method='post'>
                    //                     <div class='connectmodal' id='connectmodal'>
                    //                     <div class='modal_content'>
                    //                     <label for='connectInput'>type In a Key</Label>
                    //                         <input type='text' class='validate connectInput' id='connectInput' name='connectInput' >
                                            
                    //                         <button type='submit' name='connect'><a class='waves-effect waves-light btn'>Connect</a></button>
                    //                     </div>
                    //                 </div>
                    //                 </form>";
                                                
                     }
                     else{
                        echo "Request has already been sent to this user";
                        
                     }
                }else{
                    echo "invalid user key";
                }
            }else{
                echo 'empty request';
            }
        }
    }
?>