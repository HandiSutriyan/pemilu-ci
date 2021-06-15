<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'user_id';
	protected $useTimestamps = true;
<<<<<<< HEAD
    protected $allowedFields = ['user_name','user_email','user_password', 'user_role'];
=======
    protected $allowedFields = ['username','user_email','user_password', 'user_role'];
>>>>>>> dev
}
