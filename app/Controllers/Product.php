<?php

namespace App\Controllers;

use App\Models\TableModels;

class Product extends BaseController
{
    public function __construct()
    {
        // MODAL
        $this->TableModels = new TableModels();
    }

    public function index()
    {
        $layouts = [
            'menu' => 'product',
            'header'=>'Product',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', '')->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
            'Modals' => $this->TableModels,
        ];

        $data = [
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']], '', '', '', '')->getRowArray(),
            'getSupport' => $this->TableModels->setData('support', '*', '', '', '', '', '')->getResultArray(),
            'getOperator' => $this->TableModels->setData('operator', '*', '', '', '', '', '')->getResultArray(),
        ];

        echo view('company_profile/Layouts/header', $layouts);
        echo view('company_profile/Product/index', $data);
        echo view('company_profile/Layouts/footer');
    }
}
