<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PembayaranModel;
use App\Models\UsersModel;
use CodeIgniter\Validation\Rules;

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

		session()->set('admin_mode', TRUE);

		return view('administrator/transaksi', $data);
	}

	public function detail($id)
	{
		//tampilan detail transaksi

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
			'validation' => \config\services::validation(),
			'order' => $this->orderModel->findDetail($id)
		];

		return view('administrator/edit_transaksi', $data);
	}

	public function saveEdit($id)
	{
		//Method untuk save edit transaksi
		$rules = [
			'status_pembayaran' => 'required',
			'total_harga' => 'required'
		];

		if ($this->validate($rules)) {
			$this->orderModel->save([
				'id' => $id,
				'status_pembayaran' => $this->request->getVar('status_pembayaran'),
				'total_harga' => $this->request->getVar('total_harga')
			]);

			return redirect()->to('/admin/transaksi');
		} else {
			$validator = \Config\Services::validation();
			return redirect()->to('/admin/edit/' . $id)->withInput()->with('validation', $validator);
		}
	}

	public function edit_user($id)
	{
		//tampilan edit user

		$data = [
			'title' => 'Administrator - LAundryKU',
			'validation' => \config\services::validation(),
			'user' => $this->usersModel->findDetail($id)
		];

		return view('administrator/edit_user', $data);
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

	public function saveEditUser($id)
	{
		//Method untuk save edit userlist
		$rules = [
			'fullname' => 'required',
			'username' => 'required',
			'role' => 'required'
		];

		if ($this->validate($rules)) {
			$this->usersModel->save([
				'id' => $id,
				'fullname' => $this->request->getVar('fullname'),
				'username' => $this->request->getVar('username'),
				'role' => $this->request->getVar('role')
			]);

			return redirect()->to('/admin/userlist');
		} else {
			$validator = \Config\Services::validation();
			return redirect()->to('/admin/edit-user/' . $id)->withInput()->with('validation', $validator);
		}
	}

	public function delete($id)
	{
		if (session()->get('role') == 2) {
			return redirect()->to('/');
		}

		$this->orderModel->delete($id);
		return redirect()->to('/admin/transaksi');
	}

	public function deleteUser($id)
	{
		if (session()->get('role') == 2) {
			return redirect()->to('/');
		}

		$this->usersModel->delete($id);
		return redirect()->to('/admin/userlist');
	}
}
