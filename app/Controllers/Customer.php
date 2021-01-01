<?php namespace App\Controllers;

class Customer extends BaseController
{
	public function index()
	{
		//tampilan utama (pilihan layanan)
		return view('customer/index');
	}

    public function masuk()
	{
        //tampilan pilihan waktu masuk laundry
        return view('customer/masuk');
	}
	//--------------------------------------------------------------------
	public function keluar()
	{
        //tampilan pilihan Kecepatan dan Pengambilan laundry
        return view('customer/keluar');
	}
}