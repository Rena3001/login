<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['status'])){
        if($_GET['status']=='empty'){
 '<h2>xahis olunur butun xanalai dolurasiniz</h2>';
        }
    }
    ?>
    <form method="POST" action="http://localhost/login/server.php">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <button>Login</button>
    </form>
</body>
</html>