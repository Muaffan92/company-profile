<?php

namespace App\Controllers;

use App\Models\TableModels;

class Stockiest extends BaseController
{
    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        $layouts = [
            'menu' => 'agen',
            'header'=>'Agen',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', '')->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
            'getIklan' => $this->TableModels->setData('iklan', '*')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        $data = [
			'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']], '', '', '', '')->getRowArray(),
            'getProfesi' => $this->TableModels->setData('profesi', '*', '', '', '', '', '')->getResultArray(),
            'getKeunggulan' => $this->TableModels->setData('keunggulan', '*', '', '', '', '', '')->getResultArray(),
        ];

        echo view('company_profile/Layouts/header', $layouts);
        echo view('company_profile/Stockiest/index', $data);
        echo view('company_profile/Layouts/footer');
    }
}
