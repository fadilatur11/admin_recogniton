<?php 
class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		if (empty($this->session->userdata('id'))) {
			redirect('auth/login');
		}
	}

	function index()
	{
		$data['page'] = "Dashboard";
		$this->load->view('dashboard/index', $data);
	}
}