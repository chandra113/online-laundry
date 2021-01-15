<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Admin extends BaseController
{
    public function index()
	{
		//tampilan utama admin

		$data = [
			'title' => 'Administrator - LAundryKU'
		];

		return view('administrator/transaksi', $data);
    }
    
    public function create_user()
	{
		//admin create user 

		$data = [
			'title' => 'Administrator - LAundryKU'
		];

		return view('administrator/create_user', $data);
    }


}