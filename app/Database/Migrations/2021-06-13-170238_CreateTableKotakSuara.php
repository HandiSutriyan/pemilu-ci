<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableKotakSuara extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'vote_id'          => [
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
			'calon_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
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
		$this->forge->addKey('vote_id', true);
		$this->forge->createTable('kotak_suara');
	}

	public function down()
	{
		$this->forge->dropTable('kotak_suara');
	}
}
