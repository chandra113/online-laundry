<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PembayaranModel;
use App\Models\UsersModel;

class Admin extends BaseController
{
	protected $orderModel;
	protected $pembayaranModel;
	protected $usersModel;

	public function __construct()
	{
		$this->orderModel = new OrderModel();
		$this->pembayaranModel = new PembayaranModel();
		$this->usersModel = new UsersModel();
	}

	public function index()
	{
		//tampilan utama admin

		$data = [
			'title' => 'Administrator - LAundryKU',
			'order' => $this->orderModel->findAll()
		];

		return view('administrator/transaksi', $data);
    }
    
	public function detail($id)
	{
		//tampilan utama admin

		$data = [
			'title' => 'Administrator - LAundryKU',
			'order' => $this->orderModel->findDetail($id)
		];

		return view('administrator/detail_transaksi', $data);
    }
    
	public function edit($id)
	{
		//tampilan edit transaksi

		$data = [
			'title' => 'Administrator - LAundryKU',
			'order' => $this->orderModel->getInvoice($id)
		];

		return view('administrator/edit_transaksi', $data);
	}

	public function userlist()
	{
		//admin daftar user 

		$data = [
			'title' => 'Administrator - LAundryKU',
			'users' => $this->usersModel->findAll()
		];

		return view('administrator/userlist', $data);
	}
}
