<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableCalon extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'calon_id'          => [
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
			'picture'       => [
				'type' => 'TEXT',
				'null' => true
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
		$this->forge->addKey('calon_id', true);
		$this->forge->createTable('tbl_calon');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_calon');
	}
}
