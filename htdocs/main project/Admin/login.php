<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="slogin.css">
    <link rel="shortcut icon" href="favicon.png" type="image/jpg">
    <style>
     .background { 
            position: absolute; 
            top: -0;
            height: 100%; 
            width: 100%; 
            
            background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    overflow: hidden;
    filter: blur(3px); 

        } 
   </style>

</head>

<body>
    
    <div class="login-container">
        <form action="controller/login.php" method="post" class="form-login">
            <ul class="login-nav">
                <li class="login-nav__item active">
                    <a href="#">Hello Admin! Lets get Started</a>
                </li>

            </ul>
            <label for="login-input-user" class="login__label">
                Email
            </label>
            <input id="login-input-user" class="login__input" type="text" name="email" required />
            <label for="login-input-password" class="login__label">
                Password
            </label>
            <input id="login-input-password" class="login__input" type="password" name="password" required />

            <button class="login__submit" type="submit" name="login">Sign in</button>
        </form>
       
    </div>

</body>

</html>