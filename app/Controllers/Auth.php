<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function login()
    {
        //tampilan login

        $data = [
            'title' => 'Login LAundryKU'
        ];
        return view('auth/login', $data);
    }

    public function authLogin()
    {
        //Method untuk validasi login user

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $row = $this->usersModel->getLogin($username);

        if ($row == NULL) {
            return redirect()->to('/auth/login')->withInput()->with('errlog', 'Username tidak terdaftar');
        }
        if ($password == $row->password) {
            $data = [
                'login' => TRUE,
                'id_user' => $row->id,
                'fullname' => $row->fullname,
                'username' => $row->username,
                'phone_number' => $row->phone_number,
                'role' => $row->role
            ];

            session()->set($data);
            return redirect()->to('/');
        }
        return redirect()->to('/auth/login')->withInput()->with('errlog', 'Password Salah');
    }

    public function register()
    {
        //tampilan registrasi

        $data = [
            'title' => 'Pendaftaran Akun LAundryKU',
            'validation' => \config\services::validation()
        ];
        return view('auth/registration', $data);
    }

    public function saveRegister()
    {
        //Method untuk create user pada website

        $rules = [
            //TODO: Tambahkan 'harus angka' yang diisi pada 'number'
            // dan error handling untuk pembatasan karakter di fullname, username
            // dan email
            'fullname' => 'required',
            'phone_number' => [
                'rules' => 'required|is_unique[users.phone_number]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => 'Nomor harus diisi',
                    'is_unique' => 'Nomor sudah terdaftar'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            $this->usersModel->insert([
                'fullname' => $this->request->getVar('fullname'),
                'username' => $this->request->getVar('username'),
                'phone_number' => $this->request->getVar('phone_number'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                //will add hash later, https://youtu.be/ryLg-EhgmJc?t=1860
                'role' => 2
            ]);

            session()->setFlashdata('msg', 'Akun berhasil terdaftar');

            return redirect()->to('/auth/login');
        } else {
            $validator = \Config\Services::validation();
            return redirect()->to('/auth/register')->withInput()->with('validation', $validator);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
