<?php

if (isset($_POST['user_name'])) 
{ 
    $user_name = $_POST['user_name']; 
    if ($user_name == '')
    { 
        unset($user_name);
    } 
}

if (isset($_POST['comment'])) 
{ 
    $comment = $_POST['comment']; 
    if ($comment == '') 
    { 
        unset($comment);
    } 
}

$user_name = stripslashes($user_name);
$user_name = htmlspecialchars($user_name);
$user_name = trim($user_name);

$comment = stripslashes($comment);
$comment = htmlspecialchars($comment);
$comment = trim($comment);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include ("connection_bd.php");
$result = mysqli_query ($con, "INSERT INTO Users (user_name, dt, comment) VALUES ('$user_name', NOW(), '$comment')");
?>
<?php if ($result == true):?>
<!--     <script>
        alert('Комментарий успешно добавлен!');
    </script> -->
    <meta http-equiv="refresh" content="0; url = http://FutureTest/index.php">
<?php else: ?>
<!--     <script>
        alert('Ошибка! Проверьте введенные данные!');
    </script> -->
    <meta http-equiv="refresh" content="0; url=http://FutureTest/index.php">
<?php endif; ?>

