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
                    <a href="#">Sign Up</a>
                </li>
            </ul>
            <label for="login-input-user" class="login__label" style="margin-top: -40px;">
                Username
            </label>
            <input id=" login-input-user" class="login__input" name="name" type="text" required />
            <label for="login-input-password" class="login__label">
                Email
            </label>
            <input id="login-input-password" class="login__input" type="email" name="email" required />
            <label for="login-input-password" class="login__label">
                Password
            </label>
            <input id="login-input-password" class="login__input" name="password" type="password" required />
            <label for="login-input-password" class="login__label">
                Phone
            </label>
            <input id="login-input-password" class="login__input" name="phone" type="tel" required />
            <label for="login-input-password" class="login__label">
                Address
            </label>
            <input id="login-input-password" class="login__input" name="address" type="text" required />

            <button class="login__submit" type="submit" name="register">Sign Up</button>
        </form>
        <a href="login.php" class="login__forgot">Already Have an Account?Login</a>
    </div>

</body>

</html>