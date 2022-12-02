<?php
class User{
    public int $user_id;
    public string $user_name;
    public string $user_email;
    public string $user_password;
    public string $user_borndate;
    public string $user_profession;
    public string $user_status;
    public string $user_permission;
    public string $user_token;
}
interface UserDao{
    public function getUserById(int $id);
    public function generateUser(User $u);
}