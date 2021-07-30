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
        $header = [
            'menu' => 'dashboard',
        ];

        echo view('admin/Layouts/header', $header);
        echo view('admin/index');
        echo view('admin/Layouts/footer');
    }

    public function bank()
    {
        $header = [
            'menu' => 'bank',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getBank' => $this->TableModels->setData('bank', '*')->getResultArray(),
        ];

        echo view('admin/bank', $data);
        echo view('admin/Layouts/footer');
    }

    public function center()
    {
        $header = [
            'menu' => 'center',
        ];

        echo view('admin/Layouts/header', $header);

        $data = [
            'getCenter' => $this->TableModels->setData('center', '*')->getResultArray(),
        ];

        echo view('admin/center', $data);
        echo view('admin/Layouts/footer');
    }

    public function help()
    {
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
}
