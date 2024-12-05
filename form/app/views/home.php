<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>

</head>
<body>
<?php
    if(isset($data['error']) && $data['error'] != ''){
        echo '<p style="color:red;">'.$data['error'].'</p>';
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="name" require>
        <input type="password" name="pass" require>
        <input type="submit" name="login" value="Đăng nhập">

    </form>
<p>Nếu chưa có tài khoản. Hãy bấm <a href="http://form.test/home/register">Đăng ký</a></p>
</body>
</html>