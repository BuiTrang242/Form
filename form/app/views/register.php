<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>

</head>
<body>
    <?php
    if(isset($data['error']) && $data['error'] != ''){
        echo '<p style="color:red;">'.$data['error'].'</p>';
    }
    ?>
    
    <form action="" method="POST">
        <label for="">Tên đăng ký</label>
        <input type="text" name="name" require>
        <label for="">Nhập mật khẩu</label>
        <input type="password" name="pass" require>
        <label for="">Nhập lại mật khẩu</label>
        <input type="password" name="confirm_pass" require>
        <input type="submit" name="register" value="Đăng ký">

    </form>
<p>Nếu đã có tài khoản. Hãy bấm <a href="http://form.test/home">Đăng nhập</a></p>
</body>
</html>