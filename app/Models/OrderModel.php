<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_pelanggan', 'nomor_invoice', 'nomor_ponsel',
        'layanan', 'kecepatan', 'tanggal_masuk',
        'jam_masuk', 'alamat', 'penjemputan',
        'catatan', 'total_harga', 'status_pembayaran'
    ];

    public function getInvoice($nomor_invoice)
    {
        return $this->where(['nomor_invoice' => $nomor_invoice])->first();
    }
    public function findDetail($id)
    {
        return $this->where(['id' => $id])->first();
    }
    public function getDashboard($nomor_ponsel)
    {
        return $this->where(['nomor_ponsel' => $nomor_ponsel])->findAll();
    }
}
