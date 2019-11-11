<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table      = ['users', 'users_complement'];
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['user_name', 'user_password'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function addcomplements($user_cpmplement)
    {
        $db = \Config\Database::connect();
        $db->table('users_complement')->insert($user_cpmplement);
    }
}
