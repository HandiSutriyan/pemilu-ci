<?php

namespace App\Models;

use CodeIgniter\Model;

class DptModel extends Model
{
	protected $table = 'tbl_dpt';
	protected $primaryKey = 'pemilih_id';
	protected $useTimestamps = true;
    protected $allowedFields = ['username','name', 'ptk','angkatan','user_password','vote_status'];
}
