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
            'header'=>'FAQ',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', '')->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
        ];

        $data = [
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']], '', '', '', '')->getRowArray(),
        ];

        echo view('company_profile/Layouts/header', $layouts);
        echo view('company_profile/Help/index',$data);
        echo view('company_profile/Layouts/footer');
    }

    public function contact()
    {
        $layouts = [
            'menu' => 'contact',
            'header' => 'Contact Us',
            'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', ['menu' => 'ASC'])->getResultArray(),
            'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
            'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
            'Modals'=> $this->TableModels,
        ];

        $data = [
            'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $layouts['menu']], '', '', '', '')->getRowArray(),
            'getCabang' => $this->TableModels->setData('cabang', '*', '', '', '', '', '')->getResultArray(),
            'getListTipe' => $this->TableModels->setData('list_tipe', '*', '', '', '', '', '')->getResultArray(),
        ];

        echo view('company_profile/Help/Layouts/header', $layouts);
        echo view('company_profile/Help/Contact/index', $data);
        echo view('company_profile/Help/Layouts/footer');
    }
}
?>