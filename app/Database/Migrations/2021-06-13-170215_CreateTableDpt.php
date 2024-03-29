<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableDpt extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'pemilih_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'event_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'username'       => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'ptk'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'angkatan' => [
				'type' => 'VARCHAR',
				'constraint' => '10',
			],
			'user_password' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'vote_status'          => [
				'type'           => 'BOOLEAN',
				'default'        => false,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('pemilih_id', true);
		$this->forge->createTable('tbl_dpt');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_dpt');
	}
}
