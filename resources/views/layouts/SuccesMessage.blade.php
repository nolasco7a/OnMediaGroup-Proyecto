<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5; /">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/a185bc43d4.js" crossorigin="anonymous"></script>

    <title>Success Message</title>
</head>
<body>
    <style>
       *{
        box-sizing: border-box;
       }

       body,html{
           height: 100%;
           margin: 0;
           padding:0;
           font-family:'arial';
       }

       .banner-img{
           background-image: url('/assets/images/Backgrounds/fondo-5.jpg');
           -webkit-background-size: cover;
           background-size:cover;
           background-repeat: no-repeat;
           background-position: center center;
           height:100%;
           filter: blur(3px);
       }

       /*h1{
           font-size:70px;
           text-transform: uppercase;
           margin: 0;
       }*/

       .banner-text{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                z-index: 5;
                width: 45%;
                padding: 50px 0;
                text-align: center;
                background-color: rgba(0, 0, 0, 0.3);
                color: #fff;
                font-weight: bold;
                border: 7px solid #fff;
                border-radius: 38px;
       }
    </style>

    <div class="banner-img"></div>
    <div class="col-md-6 banner-text">
         <div class="row">
         <div class="col-md-5">
           <div class="row justify-content-center">
           <img src="./assets/images/Logos/Logos-Grupo-Onmedia-.png" alt="" style="width:200px;">
           </div>
         </div>
          <div class="col-md-6">
             <div class="row justify-content-center" style="padding-top: 30px;">
                <h4>MENSAJE ENVIADO CON ÉXITO <i class="fas fa-check"></i></h4><br>
                <h5>Tu mensaje fue recibido, pronto nos contactaremos contigo.</h5>
                
             </div>
          </div>
         </div>
    </div>
</body>
</html>