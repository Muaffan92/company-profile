<?php

namespace App\Controllers;

use App\Models\TableModels;

class Contact extends BaseController
{
    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        $layouts = [
            'menu' => 'contact',
            'header' => 'Contact Us',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', ['menu' => 'ASC'])->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        $data = [
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']], '', '', '', '')->getRowArray(),
            'getCabang' => $this->TableModels->setData('cabang', '*', '', '', '', '', '')->getResultArray(),
            'getListTipe' => $this->TableModels->setData('list_tipe', '*', '', '', '', '', '')->getResultArray(),
            'getBank' => $this->TableModels->setData('bank', '*', '', ['status' => ['0']], '', '', '')->getResultArray(),
        ];

        echo view('company_profile/Help/Layouts/header', $layouts);
        echo view('company_profile/Help/Contact/index', $data);
        echo view('company_profile/Help/Layouts/footer');
    }
}
