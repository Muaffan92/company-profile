<?php

namespace App\Controllers;

use App\Models\TableModels;

class Kegiatan extends BaseController
{
    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        $layouts = [
            'menu' => 'kegiatan',
            'header' => 'Kegiatan',
            'getMenu' => $this->TableModels->setData('menu', '*')->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*')->getResultArray(),
            'getIklan' => $this->TableModels->setData('iklan', '*')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        $data = [
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']])->getRowArray(),
            'getKegiatan' => $this->TableModels->setData('kegiatan', '*')->getResultArray(),
        ];

        echo view('company_profile/Layouts/header', $layouts);
        echo view('company_profile/Kegiatan/index', $data);
        echo view('company_profile/Layouts/footer');
    }
}
