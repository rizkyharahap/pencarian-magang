<?php

namespace App\Controllers;

/**
 * THIS CONTROLER CODEIGNITER 4
 * Codeigniter Version 4.x
 * Generated by LigatCode
 **/

use App\Models\IklanModel;
use App\Models\PerusahaanModel;

class Perusahaan extends BaseController
{
	/**
	 * Class constructor.
	 */
	protected $Perusahaan;
	protected $Iklan; //Default Models Of this Controler
	protected $pager;
	public function __construct()
	{
		$this->Perusahaan = new PerusahaanModel(); //Set Default Models Of this Controler
		$this->Iklan = new IklanModel();
		$pager = \Config\Services::pager();
	}

	//INDEX
	public function index()
	{
		$data = [
			'content' => 'Perusahaan',
			'data' => $this->Perusahaan->paginate(6, 'paging'),
			'pager' => $this->Perusahaan->pager
		];
		return view('perusahaan/index_perusahaan', $data);
	}

	public function admin()
	{
		$data = [
			'content' => 'Perusahaan',
			'data' => $this->Perusahaan->paginate(6, 'paging'),
			'pager' => $this->Perusahaan->pager
		];
		return view('perusahaan/admin_perusahaan', $data);
	}

	//READ
	public function read($id)
	{
		$perusahaan = $this->Perusahaan->find($id);
		$iklan = $this->Iklan->where('status_pembayaran', 'Terbayar')->where('id_perusahaan', $id)->orderBy('tanggal', 'desc')->findAll();

		$data = [
			'data' => $perusahaan, //find on data
			'iklan' => $iklan
		];
		return view('perusahaan/read_perusahaan', $data);
	}
}

/* End of file Perusahaan.php */
 /* Location: ./app/controllers/Perusahaan.php */
 /* Please DO NOT modify this information : */
 /* Generated by Ligatcode Codeigniter 4 CRUD Generator 2020-12-09 04:56:42 */