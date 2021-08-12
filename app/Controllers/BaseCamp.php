<?php

namespace App\Controllers;

use App\Models\TableModels;

class BaseCamp extends BaseController
{
    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        echo view('admin/login');
    }

    public function login()
    {
        // MENGAMBIL VALUE
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // MENGAMBIL DATA PADA DATABASE
        $tmp_user = $this->TableModels->setData('user', '*', ['username' => $username, ''])->getRowArray();

        // PENGECEKAN VALUE KOSONG
        if ((empty($username)) && (empty($password))) {
            // MEMUNCULKAN PESAN
            session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                    <div class="d-flex justify-content-center">
                        <h5 class="fw-bold">Data Kosong</h3>
                    </div>
                    <hr class="mt-1 mb-1">
                    <div class="text-wrap fs-7 mt-2">
                        Harap masukan data yang di butuhkan.
                    </div>
                </div>');

            return view('admin/login');
        } elseif ((!empty($username)) && (!empty($password))) {
            // PENGECEKAN DATA KOSONG
            if (empty($tmp_user)) {
                // MEMUNCULKAN PESAN
                session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                    <div class="d-flex justify-content-center">
                        <h5 class="fw-bold">Username Salah</h3>
                    </div>
                    <hr class="mt-1 mb-1">
                    <div class="text-wrap fs-7 mt-2">
                        Harap periksa kembali username anda.
                    </div>
                </div>');

                return view('admin/login');
            } elseif (!empty($tmp_user)) {
                // PENGECEKAN PASSWORD
                if ($password != $tmp_user['password']) {
                    // MEMUNCULKAN PESAN
                    session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                    <div class="d-flex justify-content-center">
                        <h5 class="fw-bold">Password Salah</h3>
                    </div>
                    <hr class="mt-1 mb-1">
                    <div class="text-wrap fs-7 mt-2">
                        Pastikan password anda benar.
                    </div>
                </div>');

                    return view('admin/login');
                } elseif ($password == $tmp_user['password']) {
                    $data = [
                        'username' => $tmp_user['username'],
                        'name' => $tmp_user['name'],
                    ];

                    session()->set($data);
                    return redirect()->to(base_url('Camp'));
                }
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Home'));
    }
}
