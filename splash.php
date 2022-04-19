<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Great Vibes"/>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: blue;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            color: white;
            font-family: "PT Sans"  "sans-serif";
            align-items: center;
        }

        .container_modal{
        background: white;
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 200;
        overflow: auto;
        top: 0;
        max-height: 100%;
        padding-top: 0%;
    }

    .container_modal.display-none{
        background: white;
        opacity: 0;
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: -10;
        overflow: auto;
        top: 0;
        max-height: 100%;
        padding-top: 0%;
        transition: all 0.1s;
    }

    /* this is the animation of fade in for the  peng text */
    @keyframes fadeIn{
        to{
            opacity:1; 
        }

    }

    .content{
     display: flex;
    background: #5353B4;
    background-repeat: no-repeat;
    background-size: cover;
    max-width: 30rem;
    width: 100%;
    height: 100vh;
    margin: auto;
    flex-direction: column;
    justify-content: space-between;
}

        .logo{
            display: flex;
            background-color: none;
            width: 50%;
            height: 30%;
            margin:35% auto;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }

        .logo span{
            color: rgb(7, 0, 10);
            font-size: 100px;
            font-family: 'Great Vibes';
            opacity: 0.6; /* this is for the animation*/
            animation: fadeIn 1s ease-in forwards;
        }

        .svg{
            display: flex;
            width: 100%;
            
        }
    </style>



</head>
<body>
    <!-- <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum, culpa quae, reiciendis dolores hic atque 
        possimus suscipit perspiciatis similique consectetur cupiditate non sit! Similique suscipit voluptas ipsam accusamus nobis.</span>
   -->

  
        <div class="container_modal" id="container_modal">
        <div class="content">  
            <div class="logo" id="logo">
                <span><i>Peng</i></span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg" id="svg">
                <path fill="rgb(7, 0, 10)" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,117.3C384,160,480,224,576,218.7C672,213,768,139,864,122.7C960,107,1056,149,1152,170.7C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <script>
        const container_modal = document.getElementById('container_modal');
        const logo = document.getElementById('logo');
        const svg = document.getElementById('svg');

        document.addEventListener('DOMContentLoaded', function(e){
            setTimeout(function(){
                container_modal.classList.add('display-none');
            }, 4000)
        })

        document.addEventListener('DOMContentLoaded', function(e){
            setTimeout(function(){
                logo.style.display = "none"
                svg.style.display = "none"

            }, 3500)
        })


    </script>
</body>
</html>