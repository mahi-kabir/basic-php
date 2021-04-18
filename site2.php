<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action = "site2.php" method = "post">
        Pasword: <input type="password" name="password"> <br>
        <input type="submit">
    <?php
        echo $_POST["password"];

    
    ?>
</body>
</html>