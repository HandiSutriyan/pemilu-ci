<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
	protected $table = 'events';
	protected $primaryKey = 'event_id';
	protected $useTimestamps = true;
    protected $allowedFields = ['name','desc','event_start','event_stop','created_by'];
}
