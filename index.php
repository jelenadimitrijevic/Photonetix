<?php

include 'functions.php';

if (isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Početna strana</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    logIn($_POST['username'], $_POST['password']);
}

if (islogedIn()) {
    header('Location: user.php');
}

if (isset($_GET['msg']) && strlen($_GET['msg']) > 0) {
    echo '<h1 style="color:red;text-align:center;margin-top:50px;">Brate zeznuo si se opasno! <br> Sad kupuj lubenicu po skupljoj ceni. ;)</h1>';
}
?>
<form action="" method="post">
    <input type="text" name="username" placeholder="Korisnicko ime" required> <br>
    <input type="password" name="password" placeholder="Lozinka" required> <br>
    <input type="submit" name="save" value="Potvrdi">
</form>
</body>
</html>