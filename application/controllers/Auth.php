<?php 
class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_admin');
		date_default_timezone_set('Asia/Jakarta');
	}

	function login()
	{
		$this->load->view('auth/login');
	}

	function actionlogin()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$login = $this->Model_t_admin->login($email);
		if (!empty($login)) {
			/*echo "email ada";*/
			$akun = $this->Model_t_admin->akun($email,$password);
			if (!empty($akun)) {
				/*echo "email dan password benar";*/
				// change status online
				$online = array('status' => 1);
				$this->Model_t_admin->update($akun['id'],$online);
				$session_akun = array(
					'id' => $akun['id'],
					'name' => $akun['name'],
					'email' => $akun['email']);
				$this->session->set_userdata($session_akun);
				redirect('beranda');
			}else{
				/*echo "email dan password salah";*/
				$this->session->set_flashdata('message', 'Password yang anda masukkan salah');
				redirect('auth/login');
			}
		}else{
			/*echo "email tidak terdaftar";*/
			$this->session->set_flashdata('message', 'Email yang anda masukkan tidak terdaftar');
			redirect('auth/login');
		}
	}

	function logout()
	{
		$online = array('status' => 0);
		$this->Model_t_admin->update($this->session->userdata('id'),$online);
		$this->session->sess_destroy();
		redirect('auth/login');
	}

	function forget()
	{
		$this->load->view('auth/forget');
	}

	function generator($length) { // function ini utk men-generate code
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$randomString = ''; 
	  
		for ($i = 0; $i < $length; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		} 
	  
		return $randomString; 
	}


	function kirim_email($email,$code)
	{
		$data['email'] = $email;
		$data['code'] = $code;
		$html = $this->load->view('auth/newsletter',$data, TRUE);
		//Load email library
		$this->load->library('email');
		//SMTP & mail configuration
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'fadhilatur7@gmail.com',
			'smtp_pass' => 'Juventus12',
			'charset'   => 'utf-8'
		);

		$this->email->initialize($config);
		$this->email->set_mailtype('html');
		$this->email->set_newline("\r\n");
		$this->email->to($email);
		$this->email->from('fadhilatur7@gmail.com');
		$this->email->subject('Reset Password');
		$this->email->message($html);
		//Send email
		$this->email->send();
	}

	function reset($id)
	{
		$data['akun'] = $this->Model_t_admin->get($id);
		$akun = $this->Model_t_admin->get($id);
		$this->kirim_email($akun['email'],$akun['code']); // kirim email konfirmasi
		$this->load->view('auth/reset',$data);
	}

	function actionreset($id)
	{
		$code = $this->input->post('code');
		$akun = $this->Model_t_admin->get($id);
		if ($akun['code'] == $code) {
			redirect('auth/newpassword/'.$id);
		}else{
			$this->session->set_flashdata('message','Kode Konfirmasi Salah,');
			redirect('auth/reset/'.$id);
		}
	}

	function newpassword($id)
	{
		$data['akun'] = $this->Model_t_admin->get($id);
		$this->load->view('auth/newpassword',$data);
	}
	
	function actionnewpassword($id)
	{
		$akun = $this->Model_t_admin->get($id);
		$password = md5($this->input->post('password'));
		$data = array(
			'password' => $password
		);
		$this->Model_t_admin->update($id,$data);
	}
	

	function forgetaction()
	{
		$email = $this->input->post('email');
		$akun = $this->Model_t_admin->login($email);
		if (!empty($akun)) {
			//echo 'email ada';
			$code = array(
				'email' => $email, 
				'code' => $this->generator(4)); // data yg akan dibuat code konfirmasi password
			$this->Model_t_admin->update($akun['id'],$code); // codedikirim berdasarkan email yg di input
			$this->session->set_flashdata('message', 'Silahkan cek email anda untuk mengetahui code konfirmasi');
			redirect('auth/reset/'.$akun['id']);
		}else{
			//echo "email tidak ada";
			$this->session->set_flashdata('message', 'Email yang anda masukkan tidak ada');
		}
	}

}