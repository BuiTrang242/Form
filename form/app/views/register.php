
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Đăng ký</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($data['error']) && $data['error'] != ''){
                            echo '<div class="alert alert-danger">'.$data['error'].'</div>';
                        }
                        ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="name">Tên đăng ký</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="pass">Mật khẩu</label>
                                <input type="password" class="form-control" id="pass" name="pass" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_pass">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" required>
                            </div>
                            <input type="submit" name="register" value="Đăng ký" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">Nếu đã có tài khoản. Hãy bấm <a href="http://form.test/home">Đăng nhập</a></p>
</body>
</html>