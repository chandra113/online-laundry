<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{

		$this->forge->addField([

			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'fullname' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 15
			],
			'number' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'role' => [
				'type' => 'INT',
				'constraint' => 1,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			]
		]);


		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}


	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
