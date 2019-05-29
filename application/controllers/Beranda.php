<?php 
class Beranda extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_admin');
		date_default_timezone_set('Asia/Jakarta');
		if (empty($this->session->userdata('id'))) {
			redirect('auth/login');
		}
	}

	function index()
	{
		$data['page'] = "Beranda";
		$this->load->view('beranda/index', $data);
	}

	function ambildata()
	{
		$getdata = $this->Model_t_admin->getuser();
		echo json_encode($getdata);
	}

	function ambiladmin()
	{
		$getdata = $this->Model_t_admin->admin();
		echo json_encode($getdata);
	}
}