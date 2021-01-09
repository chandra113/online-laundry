<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'username', 'phone_number', 'email', 'password', 'role'];

    public function getLogin($username)
    {
        return $this->table('users')->where('username', $username)->get()->getRow();
    }
}
