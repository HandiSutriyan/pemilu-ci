<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Eventsseed extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'Simulasi Pemilu',
			'desc'     => 'Pemilunya Simulasi',
			'event_start'  => Time::now(),
			'event_stop' => Time::tomorrow(),
			'created_by'  => 'admin',
			'created_at' => Time::now(),
			'updated_at' => Time::now()
		];

		// Using Query Builder
		$this->db->table('events')->insert($data);
	}
}
