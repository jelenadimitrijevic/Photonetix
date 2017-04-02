<?php

include 'functions.php';

if (!islogedIn()) {
    header('Location: index.php?msg=noPermissions');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User page</title>
</head>
<body>


</body>
</html>