<?php 
class Presence extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_admin');
		$this->load->model('Model_present');
		date_default_timezone_set('Asia/Jakarta');
		if (empty($this->session->userdata('id'))) {
			redirect('auth/login');
		}
	}

	function index()
	{
		$data['page'] = "Daftar Hadir";
		$this->load->view('presence/index', $data);
	}

	function ambildata()
	{
		$getdata = $this->Model_present->present();
		echo json_encode($getdata);
	}

	function detail($id=0) {
		$data['page'] = "Detail Present";
		$data['getdata'] = $this->Model_present->getDetail($id);
		$this->load->view('presence/detail',$data);
	}
}