<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Đăng nhập</h2>
                    </div>
                    <div class="card-body">
                        <?php if(isset($data['error']) && $data['error'] != ''): ?>
                            <div class="alert alert-danger">
                                <?= $data['error'] ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="username">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="username" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="pass" required>
                            </div>
                            <input type="submit" name="login" value="Đăng nhập" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">Nếu chưa có tài khoản. Hãy bấm <a href="http://form.test/home/register">Đăng ký</a></p>
</body>
</html>