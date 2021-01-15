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
			'nomor_invoice' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'nama_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'nomor_ponsel' => [
				'type' => 'VARCHAR',
				'constraint' => 15
			],
			'layanan' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'kecepatan' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'tanggal_masuk' => [
				'type' => 'DATE'
			],
			'jam_masuk' => [
				'type' => 'TIME'
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'penjemputan' => [
				'type' => 'VARCHAR',
				'constraint' => 10
			],
			'catatan' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'total_harga' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			],
			'status_pembayaran' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'bukti_bayar'=>[
				'type' => 'VARCHAR',
				'constraint' => 225
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
