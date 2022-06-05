<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
		$this->load->model('mahasiswa_model', 'mhs');

		

		//simpan objek kedalam array
		$list_mhs = $this->mhs->getAll();

		//menyiapkan data untuk dikirim ke view
		$data["list_mhs"] = $list_mhs;

		//untuk mengirim data + menampilkan ke view
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('layout/footer');
	}
}
