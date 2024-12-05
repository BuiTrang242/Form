<?php 
require_once './config/database.php';
class UserModel {
    private $conn;
    public function __construct(){
        $database = new Database();
        $this->conn = $database->connect();

    }

    public function saveUsers($users) {
        $query = 'INSERT INTO forms ( username, password) VALUES (:username, :password)';
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            'username' => $users['username'],
            'password' => $users['password']
        ]);
    }
    public function findUser($usersname){
       
        $query='SELECT * FROM forms WHERE username= :username';
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['username' => $usersname]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
    public function createUser($usersname, $password){
        $users = [
            'username' => $usersname, 'password' => $password
        ];
        if($this->findUser($usersname)){
            return false;
        }
        $this->saveUsers($users);
        return true;    
    }
    public function verifyUser($usersname, $password){
        $user = $this->findUser($usersname);
        if($user && $user['password'] == $password){
            return $user;
        }
        return null;
    }
}