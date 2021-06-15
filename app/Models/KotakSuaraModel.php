<?php

namespace App\Models;

use CodeIgniter\Model;

class KotakSuaraModel extends Model
{
	protected $table = 'kotak_suara';
	protected $primaryKey = 'vote_id';
	protected $useTimestamps = true;
    protected $allowedFields = ['event_id','calon_id',];
}
