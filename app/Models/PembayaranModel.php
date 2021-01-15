<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nomor_invoice', 'phone_number', 'nama_bank',
        'nomor_rekening', 'bukti_bayar'
    ];

    public function getInvoice($nomor_invoice)
    {
        return $this->where(['nomor_invoice' => $nomor_invoice])->first();
    }
}
