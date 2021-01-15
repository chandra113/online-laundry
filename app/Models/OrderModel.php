<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pelanggan', 'nomor_invoice', 'nomor_ponsel', 'layanan', 'kecepatan', 'tanggal_masuk', 'jam_masuk', 'alamat', 'penjemputan', 'catatan', 'total_harga'];

    public function getOrder($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
