<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
$cookie_name ='cookie';
$cookie_value = 'user was here';
setcookie($cookie_name, $cookie_name, time() + (86400 *30) ) // 86400 = 1 day
?>

<h1> cookie set </h1>

</body>
</html>