<?php

namespace App\Controllers;

use App\Models\TableModels;

class Help extends BaseController
{
    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        $layouts = [
            'menu' => 'bantuan',
            'header' => 'FAQ',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', '')->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
        ];

        $data = [
            'getHelp' => $this->TableModels->setData('help', '*')->getResultArray(),
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']], '', '', '', '')->getRowArray(),
        ];

        echo view('company_profile/Layouts/header', $layouts);
        echo view('company_profile/Help/index', $data);
        echo view('company_profile/Layouts/footer');
    }
}
