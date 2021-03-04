
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/blog/style.css">
<head>
</head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>
<body>
<section class="container">
    <h1>Sign Up</h1>
    <form action="signup.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="cpwd" placeholder="Confirm Password">
        <button type="submit" name="singup-submit">Login</button>
    </form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
</body>
</html>