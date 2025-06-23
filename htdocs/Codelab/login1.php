<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-container">
        <form action="controller/login.php" method="post" class="form-login">
            <ul class="login-nav">
                <li class="login-nav__item active">
                    <a href="#">Sign In</a>
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
        <a href="register.php" class="login__forgot">Dont Have an Account?Register</a>
    </div>

</body>

</html>