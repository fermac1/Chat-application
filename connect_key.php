<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];

        //read from database
        $sql = "SELECT pin FROM users WHERE pin ='$pin' limit 1 ";
        $result = mysqli_query($conn, $sql);
        $user_data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generate Key</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<!-- <script>

</script> -->

    <style>
      .flex-wrap{
        height: 100vh;
      }
      p{
          color: black;
      }
    </style>
</head>

<body>
    <div class="container">
        <div class="flex-wrap">

            <h4 class="text_header display-6">Connect and Chat</h4>
            <form>
                <div class="input-field">
                    <input class="validate input_connect" id="input_connect" type="text" />
                    <label for="input_connect">Type in key to connect</label>
                    
                </div>
                <div class="Button">
                    <!-- <button class="btn-connect btn" type="submit" id="connect" onclick="connectBtn();">Connect</button> -->

        <!-- Modal Trigger -->
        <button data-target="modal1" class="btn modal-trigger" type="submit" id="connect" name="submit">Connect</button>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
            <div class="modal-content">
                
                <p>Request has been sent successfully!</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
            </div><!-- /modal structure -->
                </div><!-- /class Button-->

            </form>

        </div>
    </div>

        <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/connect.js"></script>
</body>

</html>