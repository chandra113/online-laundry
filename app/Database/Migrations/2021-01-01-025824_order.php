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
			'nama_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'nomor_ponsel' => [
				'type' => 'VARCHAR',
				'constraint' => 15
			],
			'kecepatan' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'tanggal_masuk' => [
				'type' => 'DATE'
			],
			'jam_masuk' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'alamat' => [
				'type' => 'VARCHAR',
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
