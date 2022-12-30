<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

class User extends CI_Controller
{
	function __construct()
	{
		$this->model = new \Application\Models\user();
	}
	public function hapus($id)
	{
		$this->model->delete($id);
		return redirect()->to('users');
	}
	public function edit($id)
	{
		return json_encode($this->model->find($id));
	}

	public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'username' => [
				'label' => 'Username',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'email' => [
				'label' => 'Email',
				'rules' => 'required|min_length[5]|valid_email',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
					'valid_email' => 'Email yang kamu masukkan tidak valid'
				]
			],
			'password' => [
				'label' => 'Password',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$id = $this->request->getPost('id');
			$nama = $this->request->getPost('username');
			$email = $this->request->getPost('email');
			$bidang = $this->request->getPost('password');
			$alamat = $this->request->getPost('tanggal');

			$data = [
				'id' => $id,
				'username' => $username,
				'email' => $email,
				'password' => $bpasswordidang,
				'tanggal' => $tanggal
			];

			$this->model->save($data);

			$hasil['sukses'] = "Berhasil memasukkan data";
			$hasil['error'] = true;
		} else {
			$hasil['sukses'] = false;
			$hasil['error'] = $validasi->listErrors();
		}


		return json_encode($hasil);
	}
	public function index()
	{
		$jumlahBaris = 5;
		$katakunci = $this->request->getGet('katakunci');
		if ($katakunci) {
			$pencarian = $this->model->cari($katakunci);
		} else {
			$pencarian = $this->model;
		}
		$data['katakunci'] = $katakunci;
		$data['dataUser'] = $pencarian->orderBy('id', 'desc')->paginate($jumlahBaris);
		$data['pager'] = $this->model->pager;
		$data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
		return view('user', $data);
	}
}