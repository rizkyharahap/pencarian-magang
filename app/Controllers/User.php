<?php

namespace App\Controllers;

/**
 * THIS CONTROLER CODEIGNITER 4
 * Codeigniter Version 4.x
 * Generated by LigatCode
 **/

use App\Models\UserModel;
use App\Models\KandidatModel;
use App\Models\PerusahaanModel;

class User extends BaseController
{
	/**
	 * Class constructor.
	 */
	protected $UserModel; //Default Models Of this Controler
	protected $KandidatModel;
	protected $PerusahaanModel;

	public function __construct()
	{
		$this->UserModel = new UserModel();
		$this->KandidatModel = new KandidatModel();
		$this->PerusahaanModel = new PerusahaanModel();
	}

	//INDEX
	public function login()
	{
		$data = [
			'content' => 'Login',
			'action' => site_url('user/login_action'),
			'data' =>   [
				'email' => set_value('email'),
				'password' => set_value('password'),
			]
		];
		return view('user/form_login', $data);
	}

	//ACTION LOGIN
	public function login_action()
	{
		if (!$this->validate([
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => '{field} harus diisi',
					'valid_email' => 'Format Email harus Valid'
				]
			],
			'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
				]
			],
		])) {
			session()->setFlashdata('error_form', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		$validate = $this->UserModel->validateLogin($email, $password);

		if ($validate != null) {
			if ($validate['role'] == 'Admin') {
				$sessionData = [
					'id' => $validate['id'],
					'email' => $validate['email'],
					'role' => $validate['role'],
				];
			} else {
				if ($validate['role'] == 'Perusahaan')
					$data = $this->PerusahaanModel->where('email', $validate['email'])->get()->getRow();
				else
					$data =	$this->KandidatModel->where('email', $validate['email'])->get()->getRow();

				$sessionData = [
					'id' => $data->id,
					'userId' => $validate['id'],
					'nama' => $data->nama,
					'email' => $data->email,
					'role' => $validate['role'],
				];
			}

			session()->set($sessionData);
			if ($validate['role'] == "Admin")
				return redirect()->to(base_url('iklan/admin'));
			if ($validate['role'] == "Perusahaan")
				return redirect()->to(base_url('iklan'));
			else
				return redirect()->to(base_url('home'));
		}

		session()->setFlashdata('error', 'Email atau Password salah');
		return redirect()->back()->withInput();
	}

	//REGISTER
	public function register()
	{
		$data = [
			'content' => 'Register',
			'action' => site_url('User/register_action'),
		];
		return view('user/form_register', $data);
	}

	//ACTION REGISTER
	public function register_action()
	{
		$userData = [
			'email' => $this->request->getVar('email'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
			'role' => $this->request->getVar('role'),
		];

		$roleData = [
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'alamat' => $this->request->getVar('alamat'),
			'deskripsi' => $this->request->getVar('deskripsi'),
		];

		$this->UserModel->save($userData);

		if ($userData['role'] == 'Perusahaan')
			$this->PerusahaanModel->save($roleData);
		else
			$this->KandidatModel->save($roleData);

		session()->setFlashdata('message', 'Pendaftaran sukses');
		return redirect()->to(base_url('/user/login'));
	}

	function logout()
	{
		$data = array('id', 'email', 'role');
		session()->remove($data);
		session()->destroy();
		return redirect()->to(base_url('home'));
	}
}

/* End of file User.php */
 /* Location: ./app/controllers/User.php */
 /* Please DO NOT modify this information : */
 /* Generated by Ligatcode Codeigniter 4 CRUD Generator 2020-12-09 00:29:11 */