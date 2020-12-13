<?php

namespace App\Controllers;

use App\Models\IklanModel;

class Home extends BaseController
{
	protected $Model; //Default Models Of this Controler
	protected $pager;

	public function __construct()
	{
		$this->Model = new IklanModel(); //Set Default Models Of this Controler
		$pager = \Config\Services::pager();
	}


	public function index()
	{
		if (session()->get('role') == "Admin")
			return redirect()->to(base_url('iklan/admin'));
		if (session()->get('role') == "Perusahaan")
			return redirect()->to(base_url('iklan'));

		$data = [
			'content' => 'Lowongan Magang Terbaru',
			'data' => $this->Model->where('status_pembayaran', 'Terbayar')->orderBy('tanggal', 'desc')->paginate(6, 'paging'),
			'pager' => $this->Model->pager
		];
		return view('home/index_home', $data);
	}

	//--------------------------------------------------------------------

}
