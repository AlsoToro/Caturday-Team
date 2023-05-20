<?php 
require_once 'include/db.php';
if (isset($_POST['username'])) {
   echo $username =$_POST['username'];
   echo "<br>";
   echo $comment = $_POST['comment'];
   echo $date = date (format: 'Y');
}
?>
<!DOCTYPE HTML>
<html lang="ru">
    <head>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500;1,600&family=Roboto:wght@400;700&family=Rubik:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500;1,600&family=Roboto:wght@400;700&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500;1,600&family=Roboto:wght@400;700&family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta charset="UTF-8">
    <meta name="viewport">
    <content="width=device-width,user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>Catusday: Форум для общения</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="username" placeholder="Ваше имя">
    <textarea name="comment"  cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
    <input type="submit">

</form>
<hr>
<h2>Форум любителей котов</h2>
<p>Здесь пока нет комментариев </p>
</body>
</html>