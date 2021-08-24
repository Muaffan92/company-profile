<?php

namespace App\Controllers;

use App\Models\ServerSideModels;
use App\Models\TableModels;

class Camp extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');

        // MODAL
        $this->TableModels = new TableModels();
        $this->ServerSideModels = new ServerSideModels();
    }

    public function index()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'dashboard',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/index');
        echo view('admin/Layouts/footer');
    }

    public function bank()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'bank',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getBank' => $this->TableModels->setData('bank', '*')->getResultArray(),
        ];

        echo view('admin/bank', $data);
    }

    public function center()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'center',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getCenter' => $this->TableModels->setData('center', '*')->getResultArray(),
        ];

        echo view('admin/center', $data);
    }

    public function help()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'help',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getHelp' => $this->TableModels->setData('help', '*')->getResultArray(),
        ];

        echo view('admin/help', $data);
        echo view('admin/Layouts/footer');
    }

    public function cabang()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'cabang',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getCabang' => $this->TableModels->setData('cabang', '*')->getResultArray(),
        ];

        echo view('admin/cabang', $data);
        echo view('admin/Layouts/footer');
    }

    public function info()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getInfo' => $this->TableModels->setData('info', '*')->getResultArray(),
            'getInfoHeader' => $this->TableModels->setData('info_header', '*')->getResultArray(),
        ];

        echo view('admin/info', $data);
        echo view('admin/Layouts/footer');
    }

    public function jenis()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getJenis' => $this->TableModels->setData('jenis', '*')->getResultArray(),
        ];

        echo view('admin/jenis', $data);
        echo view('admin/Layouts/footer');
    }

    public function keunggulan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getKeunggulan' => $this->TableModels->setData('keunggulan', '*')->getResultArray(),
        ];

        echo view('admin/keunggulan', $data);
        echo view('admin/Layouts/footer');
    }

    public function list_tipe()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getListTipe' => $this->TableModels->setData('list_tipe', '*')->getResultArray(),
        ];

        echo view('admin/list_tipe', $data);
        echo view('admin/Layouts/footer');
    }

    public function menu()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getMenu' => $this->TableModels->setData('menu', '*')->getResultArray(),
        ];

        echo view('admin/menu', $data);
        echo view('admin/Layouts/footer');
    }

    public function sosmed()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getSosmed' => $this->TableModels->setData('sosmed', '*')->getResultArray(),
        ];

        echo view('admin/sosmed', $data);
        echo view('admin/Layouts/footer');
    }

    public function support()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getSupport' => $this->TableModels->setData('support', '*')->getResultArray(),
        ];

        echo view('admin/support', $data);
        echo view('admin/Layouts/footer');
    }

    public function operator()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'operator',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getOperator' => $this->TableModels->setData('operator', '*')->getResultArray(),
        ];

        echo view('admin/operator', $data);
        echo view('admin/Layouts/footer');
    }

    public function kegiatan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'kegiatan',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getKegiatan' => $this->TableModels->setData('kegiatan', '*')->getResultArray(),
        ];

        echo view('admin/kegiatan', $data);
        echo view('admin/Layouts/footer');
    }

    public function mitra()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'mitra',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getMitra' => $this->TableModels->setData('mitra', '*')->getResultArray(),
        ];

        echo view('admin/mitra', $data);
        echo view('admin/Layouts/footer');
    }

    public function profesi()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'profesi',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getProfesi' => $this->TableModels->setData('profesi', '*')->getResultArray(),
        ];

        echo view('admin/profesi', $data);
        echo view('admin/Layouts/footer');
    }

    public function akun()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'akun',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getUser' => $this->TableModels->setData('user', '*', ['username !=' => session()->get('username')])->getResultArray(),
        ];

        echo view('admin/akun', $data);
        echo view('admin/Layouts/footer');
    }

    public function aktifitas()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'aktifitas',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/aktifitas');
    }

    // BANK
    public function add_bank()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'bank',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_bank');
        echo view('admin/Layouts/footer');
    }

    public function insert_bank()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'no_rek' => ['label' => 'No_rek', 'rules' => 'is_natural']
        ]);

        if ($validation->withRequest($this->request)->run() == false) {
            session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
                <label class="font-weight-bold"><b>Warning!!</b></label>
                <p>No. Rekening yang anda masukan bukan angka.</p>
              </div>');

            return redirect()->to(base_url('Basecam/add_bank'));
        } else {
            $nm_bank = $this->request->getPost('nama_bank');
            $atas_nama = $this->request->getPost('atas_nama');
            $no_rek = $this->request->getPost('no_rek');

            $data = [
                'bank' => $nm_bank,
                'atas_nama' => $atas_nama,
                'no_rek' => $no_rek,
                'ket_status' => 'Open'
            ];

            $data_aktifitas = [
                'date' => date('Y-m-d H:i:s'),
                'username' => session()->get('username'),
                'ket' => 'Menambahkan bank ' . $nm_bank . ' dengan atas nama ' . $atas_nama
            ];

            // MELAKUKAN TAMBAH AKTIFITAS
            if ($this->TableModels->getInsert('bank', $data)) {
                if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                    return redirect()->to(base_url('Camp/bank'));
                }
            }
        }
    }

    public function edit_bank($bank = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'bank',
        ];

        echo view('admin/Layouts/header', $header);

        // DATA
        $data = $this->TableModels->setData('bank', '*', ['bank' => $bank])->getRowArray();

        echo view('admin/Update/edit_bank', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_bank()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'no_rek' => ['label' => 'No_rek', 'rules' => 'is_natural']
        ]);

        if ($validation->withRequest($this->request)->run() == false) {
            session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
                <label class="font-weight-bold"><b>Warning!!</b></label>
                <p>No. Rekening yang anda masukan bukan angka!.</p>
              </div>');

            return redirect()->to(base_url('Camp/edit_bank'));
        } else {
            $bank_lama = $this->request->getPost('bank_lama');
            $bank = $this->request->getPost('nama_bank');
            $atas_nama = $this->request->getPost('atas_nama');
            $no_rek = $this->request->getPost('no_rek');

            $data = [
                'bank' => $bank,
                'atas_nama' => $atas_nama,
                'no_rek' => $no_rek,
            ];

            $data_aktifitas = [
                'date' => date('Y-m-d H:i:s'),
                'username' => session()->get('username'),
                'ket' => 'Merubah bank ' . $bank_lama . ' menjadi bank ' . $bank
            ];

            // MELAKUKAN TAMBAH AKTIFITAS
            if ($this->TableModels->getUpdate('bank', $data, ['bank' => $bank_lama])) {
                if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                    return redirect()->to(base_url('Camp/Bank'));
                }
            }
        }
    }

    public function status_bank($ket = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // MENGAMBIL DATA DARI LINK
        $bank = $this->request->getGet('bank');

        if (!empty($ket)) {
            $status = '2';
            $ket_status = 'Gangguan';
        } else {
            $tmp_bank = $this->TableModels->setData('bank', '*', ['bank' => $bank])->getRowArray();

            if (($tmp_bank['status'] == 1) || ($tmp_bank['status'] == 2)) {
                $status = '0';
                $ket_status = 'Open';
            } elseif ($tmp_bank['status'] == 0) {
                $status = '1';
                $ket_status = 'Kosong';
            }
        }

        $data = [
            'status' => $status,
            'ket_status' => $ket_status,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah status bank ' . $bank . ' menjadi ' . $ket_status
        ];

        // MELAKUAN TAMBAH KEGIATAN
        if ($this->TableModels->getUpdate('bank', $data, ['bank' => $bank])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/bank'));
            }
        }
    }

    public function delete_bank($bank = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus bank ' . $bank
        ];

        // MELAKUKAN TAMBAH AKTIFITAS
        if ($this->TableModels->getDelete('bank', ['bank' => $bank])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/bank'));
            }
        }
    }
    // END BANK

    // CENTER
    public function add_center()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'center',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getListTipe' => $this->TableModels->setData('list_tipe', '*')->getResultArray(),
        ];

        echo view('admin/Add/tambah_center', $data);
    }

    public function select_senter_ajax()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // MENGAMBIL VALUE
        $nomor_modem = $this->request->getPost('nomor_modem');
        $tipe = $this->request->getPost('tipe');

        // DATA
        $data = $this->TableModels->setData('center', '*', ['nomor_modem' => $nomor_modem, 'tipe' => $tipe])->getRowArray();

        echo json_encode($data);
    }

    public function insert_center()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN DATA
        $nomor_modem = $this->request->getPost('nomor_modem');
        $center = $this->request->getPost('center');
        $tipe = $this->request->getPost('tipe');

        // MENGAMBIL DATA PADA DATABASE
        $tmp_center = $this->TableModels->setData('center', '*', ['nomor_modem' => $nomor_modem, 'tipe' => $tipe])->getRowArray();

        // VALIDASI NOMOR MODEM
        if (!empty($tmp_center)) {
            session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
                <label class="font-weight-bold"><b>Warning!!</b></label>
                <p>Modem sudah ada, silahkan masukan yang lain!.</p>
              </div>');

            return redirect()->to(base_url('Camp/add_center'));
        } else {
            // PENGECEKAN ANGKA
            if (!is_numeric($nomor_modem)) {
                session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
                <label class="font-weight-bold"><b>Warning!!</b></label>
                <p>Harap gunakan angka saat memasukan nomor modem!.</p>
              </div>');

                return redirect()->to(base_url('Camp/add_center'));
            } else {
                // DATA
                $data = [
                    'nomor_modem' => $nomor_modem,
                    'id_senter' => $center,
                    'tipe' => $tipe,
                    'status' => '1'
                ];

                $data_aktifitas = [
                    'date' => date('Y-m-d H:i:s'),
                    'username' => session()->get('username'),
                    'ket' => 'Menambahkan center baru dengan modem ' . $nomor_modem
                ];

                // PROSES QUERY
                if ($this->TableModels->getInsert('center', $data)) {
                    if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                        return redirect()->to(base_url('Camp/center'));
                    }
                }
            }
        }
    }

    public function edit_center($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'center',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getCenter' => $this->TableModels->setData('center', '*', ['id_modem' => $id])->getRowArray(),
            'getListTipe' => $this->TableModels->setData('list_tipe', '*')->getResultArray(),
        ];

        echo view('admin/Update/edit_center', $data);
    }

    public function select_not_senter_js()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // MENGAMBIL VALUE
        $id = $this->request->getPost('id');

        $tmp_center = $this->TableModels->setData('center', '*', ['id_modem' => $id], '', '', '', '')->getRowArray();

        // DATA
        $data = [
            'getCenter' => $this->TableModels->setData('center', '*', ['id_modem !=' => $id], '', '', '', '')->getResultArray(),
            'tipe' => $tmp_center['tipe'],
        ];

        echo json_encode($data);
    }

    public function update_center()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN DATA
        $id = $this->request->getPost('id');
        $nomor_modem = $this->request->getPost('nomor_modem');
        $center = $this->request->getPost('center');

        // MENGAMBIL DATA PADA DATABASE
        $tipe = $this->TableModels->setData('center', '*', ['id_modem' => $id])->getRowArray();
        $tmp_center = $this->TableModels->setData('center', '*', ['nomor_modem' => $nomor_modem, 'tipe' => $tipe['tipe']])->getRowArray();

        // VALIDASI NOMOR MODEM
        if (!empty($tmp_center)) {
            session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
                <label class="font-weight-bold"><b>Warning!!</b></label>
                <p>Modem sudah ada, silahkan masukan yang lain!.</p>
              </div>');

            return redirect()->to(base_url('Camp/add_center'));
        } else {
            // PENGECEKAN ANGKA
            if (!is_numeric($nomor_modem)) {
                session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
                <label class="font-weight-bold"><b>Warning!!</b></label>
                <p>Harap gunakan angka saat memasukan nomor modem!.</p>
              </div>');

                return redirect()->to(base_url('Camp/add_center'));
            } else {
                // DATA
                $data = [
                    'nomor_modem' => $nomor_modem,
                    'id_senter' => $center,
                ];

                $data_aktifitas = [
                    'date' => date('Y-m-d H:i:s'),
                    'username' => session()->get('username'),
                    'ket' => 'Merubah center pada modem ' . $nomor_modem
                ];

                // PROSES QUERY
                if ($this->TableModels->getUpdate('center', $data, ['id_modem' => $id])) {
                    if ($this->TableModels->setDdata('aktifitas', $data_aktifitas)) {
                        return redirect()->to(base_url('Camp/center'));
                    }
                }
            }
        }
    }

    public function update_status()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // MENGAMBIL VALUE
        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');

        $tmp_center = $this->TableModels->setData('center', 'id_modem,nomor_modem', ['id_modem' => $id])->getRowArray();

        // DATA
        $data_center = [
            'status' => $status,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah status modem ' . $tmp_center['nomor_modem'],
        ];

        // PROSES
        if ($this->TableModels->getUpdate('center', $data_center, ['id_modem' => $id])) {
            $this->TableModels->getInsert('aktifitas', $data_aktifitas);
        }
    }

    public function delete_center($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $tmp_center = $this->TableModels->setData('center', 'id_modem,nomor_modem', ['id_modem' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus modem ' . $tmp_center['nomor_modem'],
        ];

        // PROSES
        if ($this->TableModels->getDelete('center', ['id_modem' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/center'));
            }
        }
    }
    // END CENTER

    // HELP
    public function add_help()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'help',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_help');
    }

    public function insert_help()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $help = $this->request->getPost('help');
        $solusi = $this->request->getPost('solusi');

        $data = [
            'help' => $help,
            'solusi' => $solusi,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan solusi',
        ];

        // MELAKUKAN TAMBAH AKTIFITAS
        if ($this->TableModels->getInsert('help', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/help'));
            }
        }
    }

    public function edit_help($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'help',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('help', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_help', $data);
    }

    public function update_help()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $id = $this->request->getPost('id');
        $help = $this->request->getPost('help');
        $solusi = $this->request->getPost('solusi');

        $data = [
            'help' => $help,
            'solusi' => $solusi,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah solusi',
        ];

        // MELAKUKAN TAMBAH AKTIFITAS
        if ($this->TableModels->getUpdate('help', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/help'));
            }
        }
    }

    public function delete_help($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus solusi',
        ];

        // MELAKUKAN TAMBAH AKTIFITAS
        if ($this->TableModels->getDelete('help', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/help'));
            }
        }
    }
    // END HELP

    // CABANG
    public function add_cabang()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'cabang',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getCabang' => $this->TableModels->setData('cabang', '*', ['kategori' => 'utama'])->getRowArray(),
        ];

        echo view('admin/Add/tambah_cabang', $data);
    }

    public function insert_cabang()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // VARIABLE
        $data_utama = [];

        // INPUTAN VALUE
        $nama_cabang = $this->request->getPost('nama_cabang');
        $kategori = $this->request->getPost('kategori');
        $alamat = $this->request->getPost('alamat');
        $ket = $this->request->getPost('ket');
        $nomor_telepon = $this->request->getPost('nomor_telepon');
        $location = $this->request->getPost('location');

        // MENGAMBIL DATA PADA DATABASE
        $tmp_cabang = $this->TableModels->setData('cabang', '*', ['kategori' => 'utama'])->getRowArray();

        // PENGECEKAN DATA KOSONG
        if (empty($tmp_cabang)) {
            // PENGECEKAN KATEGORI
            if ($kategori != 'cabang') {
                $data_utama = [
                    'ket' => $ket,
                    'location' => $location,
                ];
            }
        }

        $data_default = [
            'nama' => $nama_cabang,
            'kategori' => $kategori,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon,
        ];

        // DATA
        $data = array_merge($data_default, $data_utama);

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan cabang dengan nama ' . $nama_cabang . ' dan dengan kategori ' . $kategori,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('cabang', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/cabang'));
            }
        }
    }

    public function edit_cabang($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'cabang',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getKategori' => $this->TableModels->setData('cabang', '*', ['kategori' => 'utama'])->getRowArray(),
            'getCabang' => $this->TableModels->setData('cabang', '*', ['id' => $id])->getRowArray(),
        ];

        echo view('admin/Update/edit_cabang', $data);
    }

    public function update_cabang()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // VARIABLE
        $data_utama = [];

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $nama_cabang = $this->request->getPost('nama_cabang');
        $kategori = $this->request->getPost('kategori');
        $alamat = $this->request->getPost('alamat');
        $ket = $this->request->getPost('ket');
        $nomor_telepon = $this->request->getPost('nomor_telepon');
        $location = $this->request->getPost('location');

        // MEMANGGIL DATA PADA DATABASE
        $tmp_cabang = $this->TableModels->setData('cabang', '*', ['id' => $id])->getRowArray();

        // PENGECEKAN KATEGORI
        if ($kategori != 'cabang') {
            $data_utama = [
                'ket' => $ket,
                'location' => $location,
            ];
        }

        $data_default = [
            'nama' => $nama_cabang,
            'kategori' => $kategori,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon,
        ];

        // DATA
        $data = array_merge($data_default, $data_utama);

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah cabang ' . $tmp_cabang['nama'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('cabang', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/cabang'));
            }
        }
    }

    public function delete_cabang($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // MEMANGGIL DATA PADA DATABASE
        $tmp_cabang = $this->TableModels->setData('cabang', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus cabang ' . $tmp_cabang['nama'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('cabang', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/cabang'));
            }
        }
    }
    // END CABANG

    // JENIS
    public function add_jenis()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getOperator' => $this->TableModels->setData('operator', '*')->getResultArray(),
        ];

        echo view('admin/Add/tambah_jenis', $data);
        echo view('admin/Layouts/footer');
    }

    public function insert_jenis()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $jenis = $this->request->getPost('jenis');
        $operator = $this->request->getPost('operator');

        // DATA
        $data = [
            'jenis' => $jenis,
            'operator' => $operator,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan jenis ' . $jenis . ' pada operator ' . $operator,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('jenis', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/jenis'));
            }
        }
    }

    public function edit_jenis($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getOperator' => $this->TableModels->setData('operator', '*')->getResultArray(),
            'getJenis' => $this->TableModels->setData('jenis', '*', ['id' => $id])->getRowArray(),
        ];

        echo view('admin/Update/edit_jenis', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_jenis()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $jenis = $this->request->getPost('jenis');
        $operator = $this->request->getPost('operator');

        $tmp_jenis = $this->TableModels->setData('jenis', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'jenis' => $jenis,
            'operator' => $operator,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah jenis ' . $tmp_jenis['jenis'] . ' pada operator ' . $tmp_jenis['operator'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('jenis', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/jenis'));
            }
        }
    }

    public function delete_jenis($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_jenis = $this->TableModels->setData('jenis', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus jenis ' . $tmp_jenis['jenis'] . ' dengan operator ' . $tmp_jenis['operator'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('jenis', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/jenis'));
            }
        }
    }
    // END JENIS

    // KEUNGGULAN
    public function add_keunggulan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_keunggulan');
        echo view('admin/Layouts/footer');
    }

    public function insert_keunggulan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $ket = $this->request->getPost('ket');

        // DATA
        $data = [
            'ket' => $ket,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan keunggulan',
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('keunggulan', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/keunggulan'));
            }
        }
    }

    public function edit_keunggulan($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('keunggulan', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_keunggulan', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_keunggulan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $ket = $this->request->getPost('ket');

        // DATA
        $data = [
            'ket' => $ket,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah keunggulan',
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('keunggulan', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/keunggulan'));
            }
        }
    }

    public function delete_keunggulan($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus keunggulan',
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('keunggulan', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/keunggulan'));
            }
        }
    }
    // END KEUNGGULAN

    // LIST TIPE
    public function add_tipe()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_tipe');
        echo view('admin/Layouts/footer');
    }

    public function insert_tipe()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $tipe = $this->request->getPost('tipe');

        // DATA
        $data = [
            'nama_tipe' => $tipe,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan tipe ' . $tipe,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('list_tipe', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/list_tipe'));
            }
        }
    }

    public function edit_tipe($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('list_tipe', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_tipe', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_tipe()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $tipe = $this->request->getPost('tipe');

        $tmp_tipe = $this->TableModels->setData('list_tipe', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'nama_tipe' => $tipe,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah tipe ' . $tmp_tipe['nama_tipe'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('list_tipe', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/list_tipe'));
            }
        }
    }

    public function delete_tipe($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_tipe = $this->TableModels->setData('list_tipe', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus tipe ' . $tmp_tipe['nama_tipe'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('list_tipe', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/list_tipe'));
            }
        }
    }
    // END LIST TIPE

    // MENU
    public function add_menu()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_menu');
        echo view('admin/Layouts/footer');
    }

    public function insert_menu()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $menu = $this->request->getPost('menu');
        $kategori = $this->request->getPost('kategori');
        $link = $this->request->getPost('link');
        $position = $this->request->getPost('position');

        // DATA
        $data = [
            'menu' => $menu,
            'kategori' => $kategori,
            'link' => $link,
            'position' => $position,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan menu ' . $menu,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('menu', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/menu'));
            }
        }
    }

    public function edit_menu($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('menu', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_menu', $data);
    }

    public function update_menu()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $menu = $this->request->getPost('menu');
        $kategori = $this->request->getPost('kategori');
        $link = $this->request->getPost('link');
        $position = $this->request->getPost('position');

        $tmp_menu = $this->TableModels->setData('menu', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'menu' => $menu,
            'kategori' => $kategori,
            'link' => $link,
            'position' => $position,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah menu ' . $tmp_menu['menu'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('menu', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/menu'));
            }
        }
    }

    public function delete_menu($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_menu = $this->TableModels->setData('menu', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus menu ' . $tmp_menu['menu'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('menu', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/menu'));
            }
        }
    }
    // END MENU

    // SOSISAL MEDIA
    public function add_sosmed()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_sosmed');
        echo view('admin/Layouts/footer');
    }

    public function insert_sosmed()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $nama = $this->request->getPost('nama_sosmed');
        $icon = $this->request->getPost('icon');
        $link = $this->request->getPost('link');
        $color = substr($this->request->getPost('color'), 1);

        // DATA
        $data = [
            'icon' => $icon,
            'nama' => $nama,
            'link' => $link,
            'color' => $color,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan sosial media ' . $nama,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('sosmed', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/sosmed'));
            }
        }
    }

    public function edit_sosmed($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('sosmed', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_sosmed', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_sosmed()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $nama = $this->request->getPost('nama_sosmed');
        $icon = $this->request->getPost('icon');
        $link = $this->request->getPost('link');
        $color = substr($this->request->getPost('color'), 1);

        $tmp_sosmed = $this->TableModels->setData('sosmed', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'icon' => $icon,
            'nama' => $nama,
            'link' => $link,
            'color' => $color,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah sosial media ' . $tmp_sosmed['nama'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('sosmed', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('akfitias', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/sosmed'));
            }
        }
    }

    public function delete_sosmed($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_sosmed = $this->TableModels->setData('sosmed', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus sosial media ' . $tmp_sosmed['nama'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('sosmed', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/sosmed'));
            }
        }
    }
    // END SOSISAL MEDIA

    // SUPPORT
    public function add_support()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getOperator' => $this->TableModels->setData('operator', '*')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        echo view('admin/Add/tambah_support', $data);
        echo view('admin/Layouts/footer');
    }

    public function insert_support()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        helper('form');

        // INPUTAN VALUE
        $operator = $this->request->getPost('operator');
        $image = $this->request->getFile('gambar_operator');

        // MEMINDAHKAN GAMBAR
        $image->move('img', $_FILES['gambar_operator']['name']);

        // DATA
        $data = [
            'operator' => $operator,
            'image' => $image->getName(),
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan support ' . $operator,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('support', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/support'));
            }
        }
    }

    public function edit_support($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'setting',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getSupport' => $this->TableModels->setData('support', '*', ['id' => $id])->getRowArray(),
            'getOperator' => $this->TableModels->setData('operator', '*')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        echo view('admin/Update/edit_support', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_support()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        helper('form');

        // PENGECEKAN DATA KOSONG
        if (empty($_FILES['gambar_operator']['name'])) {
            $image = $this->request->getPost('image_old');
        } else {
            $upload_image = $this->request->getFile('gambar_operator');

            // MEMINDAHKAN GAMBAR
            $upload_image->move('img', $_FILES['gambar_operator']['name']);

            $image = $upload_image->getClientName();

            unlink('img/' . $this->request->getPost('image_old'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $operator = $this->request->getPost('operator');

        $tmp_support = $this->TableModels->setData('support', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'operator' => $operator,
            'image' => $image,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah support ' . $tmp_support['operator'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('support', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/support'));
            }
        }
    }

    public function delete_support($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $tmp_support = $this->TableModels->setData('support', '*', ['id' => $id])->getRowArray();

        unlink('img/' . $tmp_support['image']);

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus support ' . $tmp_support['operator'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('support', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/support'));
            }
        }
    }
    // END SUPPORT

    // OPERATOR
    public function add_operator()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'operator',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_operator');
        echo view('admin/Layouts/footer');
    }

    public function insert_operator()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $operator = $this->request->getPost('operator');

        // DATA
        $data = [
            'operator' => $operator,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan operator ' . $operator,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('operator', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/operator'));
            }
        }
    }

    public function edit_operator($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'operator',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('operator', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_operator', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_operator()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $operator = $this->request->getPost('operator');

        $tmp_operator = $this->TableModels->setData('operator', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'operator' => $operator,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah operator ' . $tmp_operator['operator'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('operator', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/operator'));
            }
        }
    }

    public function delete_operator($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_operator = $this->TableModels->setData('operator', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus operator ' . $tmp_operator['operator'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('operator', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/operator'));
            }
        }
    }
    // END OPERATOR

    // KEGIATAN
    public function add_kegiatan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'kegiatan',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_kegiatan');
        echo view('admin/Layouts/footer');
    }

    public function insert_kegiatan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        helper('form');

        // INPUTAN VALUE
        $image = $this->request->getFile('image');
        $ket = $this->request->getPost('ket');

        // MEMINDAHKAN GAMBAR
        $image->move('img', $_FILES['image']['name']);

        // DATA
        $data = [
            'image' => $image->getName(),
            'ket' => $ket,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan kegiatan',
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('kegiatan', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/kegiatan'));
            }
        }
    }

    public function edit_kegiatan($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'kegiatan',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('kegiatan', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_kegiatan', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_kegiatan()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        helper('form');

        // PENGECEKAN DATA KOSONG
        if (empty($_FILES['image']['name'])) {
            $image = $this->request->getPost('image_old');
        } else {
            $upload_image = $this->request->getFile('image');

            // MEMINDAHKAN GAMBAR
            $upload_image->move('img', $_FILES['image']['name']);

            $image = $upload_image->getClientName();

            // MENGHAPUS GAMBAR
            unlink('img/' . $this->request->getPost('image_old'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $ket = $this->request->getPost('ket');

        // DATA
        $data = [
            'image' => $image,
            'ket' => $ket,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah kegiatan',
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('kegiatan', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/kegiatan'));
            }
        }
    }

    public function delete_kegiatan($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $tmp_kegiatan = $this->TableModels->setData('kegiatan', 'id,image', ['id' => $id])->getRowArray();

        // MENGHAPUS GAMBAR
        unlink('img/' . $tmp_kegiatan['image']);

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus kegiatan',
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('kegiatan', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/kegiatan'));
            }
        }
    }
    // END KEGIATAN

    // MITRA
    public function add_mitra()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'mitra',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_mitra');
        echo view('admin/Layouts/footer');
    }

    public function insert_mitra()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        helper('form');

        // INPUTAN VALUE
        $title = $this->request->getPost('title');
        $ket = $this->request->getPost('ket');
        $image = $this->request->getFile('image');
        $link = $this->request->getPost('link');

        // MEMINDAHKAN GAMBAR
        $image->move('img', $_FILES['image']['name']);

        // DATA
        $data = [
            'title' => $title,
            'ket' => $ket,
            'image' => $image->getName(),
            'link' => $link,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan mitra',
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('mitra', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/mitra'));
            }
        }
    }

    public function edit_mitra($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'mitra',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('mitra', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_mitra', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_mitra()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        helper('form');

        // PENGECEKAN DATA KOSONG
        if (empty($_FILES['image']['name'])) {
            $image = $this->request->getPost('image_old');
        } else {
            $upload_image = $this->request->getFile('image');

            // MEMINDAHKAN GAMBAR
            $upload_image->move('img', $_FILES['image']['name']);

            $image = $upload_image->getClientName();

            // MENGHAPUS GAMBAR
            unlink('img/' . $this->request->getPost('image_old'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $ket = $this->request->getPost('ket');
        $link = $this->request->getPost('link');

        // DATA
        $data = [
            'title' => $title,
            'ket' => $ket,
            'image' => $image,
            'link' => $link,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus mitra',
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('mitra', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/mitra'));
            }
        }
    }

    public function delete_mitra($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $tmp_mitra = $this->TableModels->setData('mitra', 'id,image', ['id' => $id])->getRowArray();

        // MENGHAPUS GAMBAR
        unlink('img/' . $tmp_mitra['image']);

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus mitra',
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('mitra', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/mitra'));
            }
        }
    }
    // END MITRA

    // PROFESI
    public function add_profesi()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'profesi',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/Add/tambah_profesi');
        echo view('admin/Layouts/footer');
    }

    public function insert_profesi()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $icon = $this->request->getPost('icon');
        $agenid = $this->request->getPost('agenid');
        $ket = $this->request->getPost('ket');

        // DATA
        $data = [
            'icon' => $icon,
            'agenid' => $agenid,
            'ket' => $ket,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan profesi ' . $agenid,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('profesi', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/profesi'));
            }
        }
    }

    public function edit_profesi($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'profesi',
        ];

        echo view('admin/Layouts/header', $header);

        $data = $this->TableModels->setData('profesi', '*', ['id' => $id])->getRowArray();

        echo view('admin/Update/edit_profesi', $data);
        echo view('admin/Layouts/footer');
    }

    public function update_profesi()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $id = $this->request->getPost('id');
        $icon = $this->request->getPost('icon');
        $agenid = $this->request->getPost('agenid');
        $ket = $this->request->getPost('ket');

        $tmp_profesi = $this->TableModels->setData('profesi', '*', ['id' => $id])->getRowArray();

        // DATA
        $data = [
            'icon' => $icon,
            'agenid' => $agenid,
            'ket' => $ket,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah profesi ' . $tmp_profesi['agenid'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('profesi', $data, ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/profesi'));
            }
        }
    }

    public function delete_profesi($id = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_profesi = $this->TableModels->setData('profesi', '*', ['id' => $id])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus profesi ' . $tmp_profesi['agenid'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('profesi', ['id' => $id])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/profesi'));
            }
        }
    }
    // END PROFESI

    // AKUN
    public function select_user()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $username = $this->request->getPost('username');

        $tmp_user = $this->TableModels->setData('user', 'username', '', '', ['username' => $username])->getRowArray();

        echo json_encode($tmp_user);
    }

    public function add_akun()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'akun',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getUsers' => $this->TableModels->setData('user', 'tipe', ['tipe' => 'administrator'])->getResultArray(),
        ];

        echo view('admin/Add/tambah_akun', $data);
    }

    public function insert_akun()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $username = $this->request->getPost('username');
        $name = $this->request->getPost('name');
        $tipe = $this->request->getPost('tipe');
        $password = $this->request->getPost('password');

        // DATA
        $data = [
            'username' => $username,
            'name' => $name,
            'tipe' => $tipe,
            'password' => $password,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menambahkan user ' . $username,
        ];

        // PROSES QUERY
        if ($this->TableModels->getInsert('user', $data)) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/akun'));
            }
        }
    }

    public function edit_akun($username = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        $header = [
            'menu' => 'akun',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getTipe' => $this->TableModels->setData('user', 'tipe', ['tipe' => 'administrator'])->getResultArray(),
            'getUsers' => $this->TableModels->setData('user', '*', ['username' => $username])->getRowArray(),
        ];

        echo view('admin/Update/edit_akun', $data);
    }

    public function update_user()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $username = $this->request->getPost('username');
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        $tmp_user = $this->TableModels->setData('user', '*', ['username' => session()->get('username')])->getRowArray();

        // PENGECEKAN DATA
        if (!empty($password)) {
            // DATA
        $data = [
            'username' => $username,
            'name' => $name,
            'password' => $password,
        ];
        }else {
            // DATA
            $data = [
                'username' => $username,
                'name' => $name,
            ];
        }

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'User ' . $tmp_user['username'] . ' merubah data dirinya',
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('user', $data, ['username' => session()->get('username')])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('BaseCamp/logout'));
            }
        }
    }

    public function update_akun()
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }

        // INPUTAN VALUE
        $username_old = $this->request->getPost('username_old');
        $username = $this->request->getPost('username');
        $name = $this->request->getPost('name');
        $tipe = $this->request->getPost('tipe');
        $password = $this->request->getPost('password');

        $tmp_user = $this->TableModels->setData('user', '*', ['username' => $username_old])->getRowArray();

        // DATA
        $data = [
            'username' => $username,
            'name' => $name,
            'tipe' => $tipe,
            'password' => $password,
        ];

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Merubah user ' . $tmp_user['username'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getUpdate('user', $data, ['username' => $username_old])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/akun'));
            }
        }
    }

    public function delete_akun($username = '')
    {
        // VALIDASI LOGIN
        if ((!session()->get('username')) || (!session()->get('name'))) {
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

            return redirect()->to(base_url('BaseCamp'));
        }
        $tmp_user = $this->TableModels->setData('user', '*', ['username' => $username])->getRowArray();

        $data_aktifitas = [
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
            'ket' => 'Menghapus user ' . $tmp_user['username'],
        ];

        // PROSES QUERY
        if ($this->TableModels->getDelete('user', ['username' => $username])) {
            if ($this->TableModels->getInsert('aktifitas', $data_aktifitas)) {
                return redirect()->to(base_url('Camp/akun'));
            }
        }
    }
    // END AKUN

    // AKTIFITAS
    public function select_aktifitas()
    {
        if (
            !session()->get('name') && !session()->get('user')
        ) {
            session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<i class="fas fa-exclamation-triangle"></i> <b>Warning!!</b>
						<br>
						Anda masih belum login! Harap login terlebih dahulu.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					  </div>');

            return redirect()->to(base_url('Home'));
        }

        $column_order   = ['date', 'username', 'page', 'ket', 'history'];
        $column_search  = ['date', 'username', 'page', 'ket', 'history'];
        $order = ['date' => 'ASC'];

        $tmp_aktifitas = $this->ServerSideModels->get_datatables('aktifitas', $column_order, $column_search, $order);

        $data = array();
        $no = $_POST['start'];

        foreach ($tmp_aktifitas as $aktifitas) {
            $no++;
            $row = array();

            $row[] = '<td>' . $aktifitas->date . '</td>';
            $row[] = '<td>' . $aktifitas->username . '</td>';
            $row[] = '<td>' . $aktifitas->ket . '</td>';

            $data[] = $row;
        }

        $output = array(
            "draw" => @$_POST['draw'],
            "recordsTotal" => $this->ServerSideModels->count_all('aktifitas'),
            "recordsFiltered" => $this->ServerSideModels->count_filtered('aktifitas', $column_order, $column_search, $order),
            "data" => $data,
        );

        echo json_encode($output);
    }
    // END AKTIFITAS
}
