<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
		$this->load->model('dosen_model', 'dsn');

		

		//simpan objek kedalam array
		$list_dsn = $this->dsn->getAll();

		//menyiapkan data untuk dikirim ke view
		$data["list_dsn"] = $list_dsn;

		//untuk mengirim data + menampilkan ke view
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dosen/index', $data);
		$this->load->view('layout/footer');
	}
}
