<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
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
			'phone_number' => [
				'type' => 'VARCHAR',
				'constraint' => 15
			],
			'nama_bank' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'nomor_rekening' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'bukti_bayar' => [
				'type' => 'VARCHAR',
				'constraint' => 225
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('pembayaran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
