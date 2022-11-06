<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Food Bank Login Page</h1>
    <p>Please fill in this form to login</p>

    <form action='' method='post'>
        <label><b>Email:</b><input type="email" placeholder="Enter your email address" name="Eamil" /></label><br>
        <label><b>Password:</b><input type="password" placeholder="Enter your password" name="password" /></label><br>
        <input type="submit" name="action" value="Login" /><br>

    </form>
    <a href="\app\views\Register\foodbankRegister.php">Register</a> <!--change path later on -->

</body>
</html>