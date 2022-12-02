<?php
require_once '../models/User.php';
class UserDaoMySql implements UserDao{
    private $pdo;
    private $base;

    public function __construct(PDO $pdo, string $base){
        $this->pdo = $pdo;
        $this->base = $base;
    }

    public function getUserById(int $id){
        
    }

    public function generateUser(User $u){

    }
}