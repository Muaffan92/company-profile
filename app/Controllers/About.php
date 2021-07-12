<?php

namespace App\Controllers;

use App\Models\TableModels;

class About extends BaseController
{

    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        $header = [
            'menu' => 'tentang',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', ['menu' => 'ASC'])->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        $data = [
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $header['menu']], '', '', '', '')->getRowArray(),
        ];

        echo view('company_profile/Help/Layouts/header', $header);
        echo view('company_profile/Help/About/index', $data);
        echo view('company_profile/Help/Layouts/footer');
    }
}
