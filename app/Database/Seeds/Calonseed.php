<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Calonseed extends Seeder
{
	public function run()
	{
		$data = [
			[
				'event_id' => 1,
				'name' => 'Surya',
				'ptk' => 'Politeknik',
				'angkatan' => '2020',
				'picture' => '2.jpg',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'event_id' => 1,
				'name' => 'Karya',
				'ptk' => 'Politeknik',
				'angkatan' => '2019',
				'picture' => '3.jpg',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'event_id' => 1,
				'name' => 'Budi',
				'ptk' => 'Politeknik',
				'angkatan' => '2020',
				'picture' => '4.jpg',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
		];

		// Using Query Builder
		$this->db->table('tbl_calon')->insertBatch($data);
	}
}
