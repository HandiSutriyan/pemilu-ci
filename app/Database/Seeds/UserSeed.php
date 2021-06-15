<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeed extends Seeder
{
	public function run()
	{
		$data = [
<<<<<<< HEAD
			'user_name' => 'Admin',
=======
			'username' => 'Admin',
>>>>>>> dev
			'user_email'    => 'pemilu@fmkk.web.id',
			'user_role' => 'admin',
			'user_password' => password_hash('admin', PASSWORD_DEFAULT),
			'created_at' => Time::now(),
			'updated_at' => Time::now()
		];

		// Using Query Builder
		$this->db->table('user')->insert($data);
	}
}
