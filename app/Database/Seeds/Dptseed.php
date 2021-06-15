<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Dptseed extends Seeder
{
	public function run()
	{
		$data = [
			[
				'event_id' => 1,
				'username' => 'budi@gunawan.com',
				'name' => 'Budi Gunawan',
				'ptk' => 'Politeknik Pertanian',
				'angkatan' => '2018',
				'user_password' => password_hash('budi', PASSWORD_DEFAULT),
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'event_id' => 1,
				'username' => 'ani@gunawan.com',
				'name' => 'Ani Gunawan',
				'ptk' => 'Politeknik Penerbangan',
				'angkatan' => '2019',
				'user_password' => password_hash('ani', PASSWORD_DEFAULT),
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
			[
				'event_id' => 1,
				'username' => 'surya@gunawan.com',
				'name' => 'Surya Gunawan',
				'ptk' => 'Institut Pertanian',
				'angkatan' => '2020',
				'user_password' => password_hash('surya', PASSWORD_DEFAULT),
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],
		];

		// Using Query Builder
		$this->db->table('tbl_dpt')->insertBatch($data);
	}
}
