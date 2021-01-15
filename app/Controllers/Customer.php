<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Customer extends BaseController
{
	protected $orderModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }
	public function index()
	{
		//tampilan utama (pilihan layanan)

		$data = [
			'title' => 'Beranda - LAundryKU'
		];

		return view('customer/index', $data);
	}

	public function cuci()
	{
		//tampilan pilihan cuci saja

		$data = [
			'title' => 'Cuci - LAundryKU'
		];

		session()->set('layanan', 'Cuci');

		return view('customer/cuci', $data);
	}

	public function setrika()
	{
		//tampilan pilihan setrika saja

		$data = [
			'title' => 'Setrika - LAundryKU'
		];

		session()->set('layanan', 'Setrika');

		return view('customer/setrika', $data);
	}

	public function cuci_setrika()
	{
		//tampilan pilihan laundry komplit

		$data = [
			'title' => 'Komplit - LAundryKU'
		];

		session()->set('layanan', 'Cuci Setrika');

		return view('customer/cuci-setrika', $data);
	}

	public function checkout()
	{
		//tampilan checkout

		if (session()->get('checkout') == FALSE) {
			return redirect()->to('/');
		}

		switch (session()->get('layanan')) {
			case "Setrika":
				if (session()->get('kecepatan') == 'Kilat (1-2 Hari)') {
					$harga = 20000;
				} else {
					$harga = 10000;
				}
				break;

			case "Cuci":
				if (session()->get('kecepatan') == 'Kilat (1-2 Hari)') {
					$harga = 25000;
				} else {
					$harga = 15000;
				}
				break;

			case "Cuci Setrika":
				if (session()->get('kecepatan') == 'Kilat (1-2 Hari)') {
					$harga = 30000;
				} else {
					$harga = 20000;
				}
				break;
		}

		$data = [
			'title' => 'Checkout - LAundryKU',
			'harga' => $harga
		];

		return view('customer/checkout', $data);
	}

	public function redirectCheckout()
	{
		//Method untuk memproses form layanan

		$data = [
			'checkout' => TRUE,
			'kecepatan' => $this->request->getVar('kecepatan'),
			'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
			'jam_masuk' => $this->request->getVar('jam_masuk'),
			'alamat' => $this->request->getVar('alamat')
		];

		session()->set($data);
		return redirect()->to('/laundry/checkout');
	}

	public function saveLayanan()
	{
		//Method untuk create pesanan ke dalam database
		
		session()->set('checkout', FALSE); //wajib tambahin biar ga bisa ke checkout lg
		$this->orderModel->insert([
			'nama_pelanggan'=>session()->get('fullname'),
			'nomor_ponsel'=>session()->get('phone_number'),
			'layanan'=> session()->get('layanan'),
			'kecepatan' => session()->get('kecepatan'),
			'tanggal_masuk' => session()->get('tanggal_masuk'),
			'jam_masuk' => session()->get('jam_masuk'),
			'alamat' => session()->get('alamat'),
			'penjemputan'=> $this->request->getVar('penjemputan'),
			'catatan'=>$this->request->getVar('catatan'),
			'total_harga'=>$this->request->getVar('harga'),
		]);

		session()->setFlashdata('msg', 'Data berhasil di save');

		return redirect()->to('/laundry/invoice');
	}

	public function invoice()
	{
		//tampilan invoice

		$data = [
			'title' => 'Invoice - LAundryKU'
		];

		return view('customer/invoice', $data);
	}
}
