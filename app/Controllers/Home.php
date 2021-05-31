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
		$layouts = [
			'menu' => 'home',
			'getListTipe' => $this->TableModels->setData('list_tipe', 'nama_tipe', '', '', '', '', '')->getResultArray(),
			'Modals' => $this->TableModels,
		];

		$data = [
			'getListFormat' => $this->TableModels->setData('list_format', '*', ['status' => 1], '', '', '', ['ket' => 'ASC'])->getResultArray(),
			'getBank' => $this->TableModels->setData('bank', '*', ['status' => '0'], '', '', '', '')->getResultArray(),
			'getOperator' => $this->TableModels->setData('operator', '*', '', '', '', '', '')->getResultArray(),
		];

		echo view('Layouts/header', $layouts);
		echo view('index', $data);
		echo view('Layouts/footer');
	}

	public function transaksi()
	{
		$layouts = [
			'menu' => 'transaksi',
			'getListTipe' => $this->TableModels->setData('list_tipe', 'nama_tipe', '', '', '', '', '')->getResultArray(),
			'Modals' => $this->TableModels,
		];

		$data = [
			'getProduct' => $this->TableModels->setData('product', '*', ['status' => 'ada'], '', '', '', '')->getResultArray()
		];

		echo view('Layouts/header', $layouts);
		echo view('transaksi', $data);
		echo view('Layouts/footer');
	}

	public function profile()
	{
		$layouts = [
			'menu' => 'profile',
			'getListTipe' => $this->TableModels->setData('list_tipe', 'nama_tipe', '', '', '', '', '')->getResultArray(),
			'Modals' => $this->TableModels,
		];

		echo view('Layouts/header', $layouts);
		echo view('profile');
		echo view('Layouts/footer');
	}
}
