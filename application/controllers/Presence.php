<?php 
class Presence extends CI_Controller
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
		$data['page'] = "Daftar Hadir";
		$this->load->view('presence/index', $data);
	}

	function ambildata()
	{
		$getdata = $this->Model_t_admin->presence();
		echo json_encode($getdata);
	}
}