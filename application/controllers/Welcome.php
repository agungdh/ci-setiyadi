<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data_nilai_mahasiswa = [
			'nama_kelas' => '4SI-M1',
			'nama_dosen' => 'M. Nur Ikhsanto, S.Kom,M.TI',
			'nama_matakuliah' => 'Pemograman Web Dinamis',
			'keterangan' => 'Mata kuliah ini mempelajari bagaimana cara membuat sebuah web yang dapat berinteraksi dengan pengguna'
		];

		$data_nilai_mahasiswa['nilai'] = [
			[
				'npm' => '19029002',
				'nama' => 'Sandri Setiyadi',
				'nilai' => '100',
				'mutu' => 'A'
			], [
				'npm' => '17029001',
				'nama' => 'Muhammad Wisnu Aji Saputra',
				'nilai' => '50',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'RAMA ALMAQRIBI',
				'nilai' => '51',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'Oviletta Aurellia',
				'nilai' => '52',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'Vanessa Marcelli',
				'nilai' => '53',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'fika mirantika',
				'nilai' => '54',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'Saskia Noviditia',
				'nilai' => '55',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'Siti Nurjanah',
				'nilai' => '56',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'Febri Yani',
				'nilai' => '57',
				'mutu' => 'C'
			], [
				'npm' => '17029001',
				'nama' => 'Gregorius Yosua',
				'nilai' => '58',
				'mutu' => 'C'
			]
		];

		$this->load->view('welcome_message', compact(['data_nilai_mahasiswa']));
	}
}
