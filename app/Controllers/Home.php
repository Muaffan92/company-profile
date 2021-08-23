<?php

namespace App\Controllers;

use App\Models\TableModels;

class Home extends BaseController
{

	public function __construct()
	{
		// MODAL
		$this->TableModels = new TableModels();
	}

	public function index()
	{
		$header = [
			'menu' => 'beranda',
			'getMenu' => $this->TableModels->setData('menu', '*', '', '', '', '', '')->getResultArray(),
			'getKategoriMenu' => $this->TableModels->setData('kategori_menu', '*', '', '', '', '', '')->getResultArray(),
			'getSosmed' => $this->TableModels->setData('sosmed', '*', '', '', '', '', '')->getResultArray(),
			'Modals' => $this->TableModels,
			'getIklan' => $this->TableModels->setData('iklan', '*')->getResultArray(),
		];

		$data = [
			'getInfoHeader' => $this->TableModels->setData('info_header', '*', ['menu' => $header['menu']], '', '', '', '')->getRowArray(),
			'getInfo' => $this->TableModels->setData('info', '*', '', '', '', '', '')->getResultArray(),
			'getMitra' => $this->TableModels->setData('mitra', '*', '', '', '', '', '')->getResultArray(),
			'getSupport' => $this->TableModels->setData('support', '*', '', '', '', '', '')->getResultArray(),
			'getOperator' => $this->TableModels->setData('operator', '*', '', '', '', '', '')->getResultArray(),
			'getKegiatan' => $this->TableModels->setData('kegiatan', '*', '', '', '', '', '')->getResultArray(),
		];

		echo view('company_profile/Layouts/header', $header);
		echo view('company_profile/index', $data);
		echo view('company_profile/Layouts/footer');
	}
}
