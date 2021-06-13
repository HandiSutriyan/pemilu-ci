<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableEvents extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'event_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'desc'       => [
				'type' => 'TEXT',
				'null' => true
			],
			'event_start'       => [
				'type' => 'DATETIME',
			],
			'event_stop' => [
				'type' => 'DATETIME',
			],
			'created_by' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
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
		$this->forge->addKey('event_id', true);
		$this->forge->createTable('events');
	}

	public function down()
	{
		$this->forge->dropTable('events');
	}
}
