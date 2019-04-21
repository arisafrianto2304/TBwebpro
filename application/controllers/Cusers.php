<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusers extends CI_Controller {
	function __construct() {
    parent::__construct();
		$this->load->helper('html');
		$this->load->model('Musers');
	}

	public function index()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		$this->load->view('template/corousel');

		$this->load->view('pages-pbn/bestseller');// yang gonta ganti

		$this->load->view('template/newsoc');
		$this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function bestseller()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		$this->load->view('template/corousel');

		$this->load->view('pages-pbn/promo');// yang gonta ganti

		$this->load->view('template/newsoc');
		$this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function newitem()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		$this->load->view('template/corousel');

		$this->load->view('pages-pbn/newitem');// yang gonta ganti

		$this->load->view('template/newsoc');
		$this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function about()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		// $this->load->view('template/corousel');

		$this->load->view('pages/about');// yang gonta ganti

		// $this->load->view('template/newsoc');
		// $this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function partnership()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		// $this->load->view('template/corousel');

		$this->load->view('pages/Partnership');// yang gonta ganti

		// $this->load->view('template/newsoc');
		// $this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function termcondition()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		// $this->load->view('template/corousel');

		$this->load->view('pages/termcondition');// yang gonta ganti

		// $this->load->view('template/newsoc');
		// $this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function registrasi()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		// $this->load->view('template/corousel');

		$this->load->view('pages/cararegistrasi');// yang gonta ganti

		// $this->load->view('template/newsoc');
		// $this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function member()
	{
		$data = array(
			// 'favicon' => base_url('assets/img/favicon.png'),
			'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
		);
		$this->load->view('template/header',$data);//yang digunain terus
		// $this->load->view('template/corousel');

		$this->load->view('pages/member');// yang gonta ganti

		// $this->load->view('template/newsoc');
		// $this->load->view('template/testimoni');
		$this->load->view('template/footer'); //yang digunain terus
	}

	public function aksi_tambah_member(){
			$member_input = array();
			$datamember_input = array();
			$member_input['email'] = $this->input->post('email');
			$member_input['password'] = $this->input->post('password');
			$member_input['pin'] = $this->input->post('pin');
			$datamember_input['nama_depan'] = $this->input->post('nama_depan');
			$datamember_input['nama_belakang'] = $this->input->post('nama_belakang');
			$datamember_input['handphone'] = $this->input->post('handphone');
			// $tanggal_lahir => $this->input->post('tanggal_lahir');
			// $jenis_kelamin => $this->input->post('jenis_kelamin');
			$datamember_input['alamat'] = $this->input->post('alamat');
			$datamember_input['provinsi'] = $this->input->post('provinsi');
			$datamember_input['kota'] = $this->input->post('kota');
			$datamember_input['kodepos'] = $this->input->post('kodepos');

		$this->Musers->action_signup($member_input,$datamember_input);
		redirect('Cusers/member');
	}

	public function login(){
		// $email = $this->input->post('email');
		// $password = $this->input->post('password');
		//
		// $cek = $this->Musers->cek($email,$password);
		// if($cek->num_rows() == 1){
		// 	foreach ($$cek->result() as $data) {
		// 		$sess_data['id_member'] = $data->id_user;
		// 		$sess_data['email'] = $data->email;
		// 		$this->session->set_userdata($sess_data);
		// 	}
		// 	redirect('Cusers');
		// }else{
		// 	$this->session->set_flashdata('pesan','Ada kesalahan pada Username atau Password');
		// 	redirect('member');
		// }
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->Musers->cek("member",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'email' => $email,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			$data = array(
				// 'favicon' => base_url('assets/img/favicon.png'),
				'title' => 'Juragan Cash Voucher Game Termurah &amp; Terlengkap di Indonesia',
			);
			$this->load->view('template/headerr',$data);//yang digunain terus
			$this->load->view('template/corousel');

			$this->load->view('pages-pbn/bestseller');// yang gonta ganti

			$this->load->view('template/newsoc');
			$this->load->view('template/testimoni');
			$this->load->view('template/footer'); //yang digunain terus

		}else{
			echo "email dan password salah !";
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Cusers/member');
	}
}
