
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/blog/style.css">
<head>
</head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>
<body>
<section class="container">
    <form action="login.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="signup.php"></a>
    <form action="login.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
</body>
</html>