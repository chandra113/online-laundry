<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
			'nama_konsumen' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'alamat' => [
				'type' => 'TEXT',
				'constraint' => '100'
			],
			'nama_pakaian' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'jumlah_pakaian' => [
				'type' => 'INT',
				'constraint' => 100
			],
			'penjemputan' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'total_harga' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			]


		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('order');
	}


	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('order');
	}
}
