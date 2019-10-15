<?php 

class Mahasiswa extends CI_Controller{

	public function index(){

		// $data['mahasiswa']=[

		// 	[

		// 	'nama'=>'Rangga Adi Permana',
		// 	'nrp'=>'163040073',
		// 	'email'=>'Rangga.163040073@mail.unpas.ac.id',
		// 	'jurusan'=>'Teknik Informatika',
		// ],

		// [

		// 	'nama'=>'Sultan Abdi Kusumo',
		// 	'nrp'=>'163040111',
		// 	'email'=>'sultan@mail.unpas.ac.id',
		// 	'jurusan'=>'Teknik Informatika',
		// ],

		// [

		// 	'nama'=>'Muzani Ahmad',
		// 	'nrp'=>'163040082',
		// 	'email'=>'muzani@mail.unpas.ac.id',
		// 	'jurusan'=>'Teknik Informatika',
		// ]



		// ];

		$this->load->model('Mahasiswa_model','mhs');

		$data['mahasiswa']=$this->mhs->getAllMahasiwa();

		$this->load->view('mahasiswa/index',$data);
	}

}
