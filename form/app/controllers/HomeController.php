<?php 
class HomeController extends Controller {
    public function index(){
        $error='';
        if(isset($_SESSION['username'])) {
            header('Location: http://form.test/home/complete');
            exit;
        }
        if(isset($_POST['login'])){
            $username=$_POST['name'];
            $password=$_POST['pass'];
            if($username == '' || $password == ''){
                $error="Bạn chưa nhập đầy đủ thông tin";
          }else {
                $userModel= $this->model('UserModel');
                $user=$userModel->findUser($username);
                if($user && $user['password'] == $password){
                    $_SESSION['username']= $username;
                    header('Location: http://form.test/home/complete');
                    exit;

                }else{
                    $error='Ten tai khoản hoặc mật khẩu không chính xác';
                    
                }
            }
        }

    $this->view('home',[
        'error' => $error
    ]);  
    }
    public function register(){

        $error ='';

        if(isset($_POST['register'])){
            $username = $_POST['name'];
            $password= $_POST['pass'];
            $repassword =$_POST['confirm_pass'];
            if($username == '' || $password == '' || $repassword == ''){
                $error="Bạn cần nhập đầy đủ thông tin";
            }elseif($password!=$repassword){
                $error="Mật khẩu nhập lai không trùng khớp";

            }else {
                $userModel= $this->model('UserModel');
                 $result = $userModel->createUser($username,$password);
                 if($result) {
                    header('Location: http://form.test/home');
                    exit();
                 }
                 $error= "Tên tai khoan đã tồn tai";

            }
        }
        $this->view('register', [
            'error' => $error
        ]);
    }
    public function complete(){
      
        if(isset($_SESSION['username'])){
            
            $this->view('complete');

        }
        header('Location: http://form.test/home');
        exit();
    }
    public function logout(){
        $_SESSION['username']=null;
        header('Location: http://form.test/home');
        exit();
    }
 
}