<?php 
class Report extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_t_admin');
		if (empty($this->session->userdata('id'))) {
			redirect('auth/login');
		}
	}

	function index()
	{
		$data['page'] = "PDF";
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		if (!empty($start_date) || !empty($end_date)) {
			$data['presence'] = $this->Model_t_admin->filter($start_date, $end_date);
		}else{
			$data['presence'] = $this->Model_t_admin->nofilter();
		}
		
		$this->load->view('pdf/index', $data);
	}

	function download($start_date, $end_date)
	{
		$data['page'] = "PDF";
		$data['presence'] = $this->Model_t_admin->filter($start_date, $end_date);
		$this->load->view('pdf/index', $data);
	}

	function user($start_date, $end_date,$id)
	{
		$data['page'] = "PDF";
		$data['presence'] = $this->Model_t_admin->filteruser($start_date, $end_date,$id);
		$this->load->view('pdf/index', $data);
	}

	function lagi()
	{
		$data['page'] = "Download PDF";
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		if (!empty($start_date) || !empty($end_date)) {
			$data['presence'] = $this->Model_t_admin->filter($start_date, $end_date);
		}else{
			$data['presence'] = $this->Model_t_admin->nofilter();
		}
		
		$this->load->view('pdf/download',$data);
	 
	}
}