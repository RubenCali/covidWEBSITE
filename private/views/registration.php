<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php echo site_url( '/css/registerlogin.css' ) ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<title>StayActive Login</title>
</head>
<body>
    <header class="v-header container">
        <div class="fullscreen-video-wrap">
            <video src="vid/Running_09_Videvo.mov" autoplay="true" loop="true"></video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content">
        <div class="form"><img src="img/logo.png"><br><br>
            <span class="login">Register</span>
            <form name="registration" action="login" method="get">
                <input type="text" name="username" placeholder="&#xF007; Username" required style="font-family:'Montserrat', sans-serif, FontAwesome" />
                <input type="email" name="email" placeholder="&#xF0E0; Email" required style="font-family:'Montserrat', sans-serif, FontAwesome" />
                <input type="password" name="password" placeholder="&#xF084; Password" required style="font-family:'Montserrat', sans-serif, FontAwesome" />
                <input type="submit" name="submit" value="Register" />
            </form>
            <p><a href='login' class="darkColor">Go back to the login</a></p>
        </div>
        </div>
    </header>
</body>
</html>
