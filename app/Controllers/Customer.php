<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PembayaranModel;

class Customer extends BaseController
{
	protected $orderModel;
	protected $pembayaranModel;
	public function __construct()
	{
		$this->orderModel = new OrderModel();
		$this->pembayaranModel = new PembayaranModel();
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

	public function invoice($nomor_invoice)
	{
		//tampilan invoice

		$data = [
			'title' => 'Invoice - LAundryKU',
			'invoice' => $this->orderModel->getInvoice($nomor_invoice)
		];

		return view('customer/invoice', $data);
	}

	public function pembayaran($nomor_invoice)
	{
		//tampilan pembayaran

		$data = [
			'title' => 'Pembayaran - LAundryKU',
			'invoice' => $this->orderModel->getInvoice($nomor_invoice)
		];

		return view('customer/pembayaran', $data);
	}

	public function dashboard($nomor_ponsel)
	{
		$data = [
			'title' => 'Dashboard - LAundryKU',
			'dashboard' => $this->orderModel->getDashboard($nomor_ponsel)
		];

		return view('customer/dashboard', $data);
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

		$slugtanggal = str_replace("-", "", session()->get('tanggal_masuk'));
		$slugjam = url_title(session()->get('jam_masuk'), '', false);
		$sluginvoice = $slugtanggal . $slugjam . session()->get('id_user');

		session()->set('checkout', FALSE);

		$this->orderModel->insert([
			'nomor_invoice' => $sluginvoice,
			'nama_pelanggan' => session()->get('fullname'),
			'nomor_ponsel' => session()->get('phone_number'),
			'layanan' => session()->get('layanan'),
			'kecepatan' => session()->get('kecepatan'),
			'tanggal_masuk' => session()->get('tanggal_masuk'),
			'jam_masuk' => session()->get('jam_masuk'),
			'alamat' => session()->get('alamat'),
			'penjemputan' => $this->request->getVar('penjemputan'),
			'catatan' => $this->request->getVar('catatan'),
			'total_harga' => $this->request->getVar('harga'),
			'status_pembayaran' => 'Belum Dibayar',
			'bukti_bayar' => NULL
		]);
		return redirect()->to('/laundry/invoice/' . $sluginvoice);
	}

	public function savePembayaran($id)
	{
		//Method untuk membayar pesanan

		$fileBuktiBayar = $this->request->getFile('bukti_bayar');
		$fileBuktiBayar->move('img');
		$namaBuktiBayar = $fileBuktiBayar->getName();


		$this->pembayaranModel->insert([
			'nomor_invoice' => $this->request->getVar('nomor_invoice'),
			'phone_number' => $this->request->getVar('phone_number'),
			'nama_bank' => $this->request->getVar('nama_bank'),
			'nomor_rekening' => $this->request->getVar('nomor_rekening'),
			'status_pembayaran' => 'Sedang divalidasi',
			'bukti_bayar' => $namaBuktiBayar
		]);

		$data = [
			'nomor_ponsel' => $this->request->getVar('phone_number'),
			'status_pembayaran' => 'Sedang divalidasi',
			'bukti_bayar' => $namaBuktiBayar
		];

		$this->orderModel->update($id, $data);

		session()->setFlashdata('msg', 'Pembayaran Berhasil');

		return redirect()->to('/laundry/dashboard/' . session()->get('phone_number'));
	}
}
