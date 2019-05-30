<?php 
class Administrator extends CI_Controller
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
		$data['page'] = "Administrator";
		$this->load->view('administrator/index', $data);
    }

    function delete($id)
	{
		$this->Model_t_admin->deleteadmin($id);
		redirect('administrator');
    }
    
    function edit($id)
	{
		$data['page'] = 'Edit Administrator';
		$data['getdata'] = $this->Model_t_admin->getadmin($id);
		$this->load->view('administrator/edit',$data);
    }
    
    function editaction($id)
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$address = $this->input->post('alamat');
		$password = md5($this->input->post('password'));


		if(!empty($_FILES['webcam']['name'])){
			$image_name =  str_replace(' ','_',date('Ymdhis').$_FILES['webcam']['name']);
			$config['upload_path'] 		= $this->config->item('save_face');
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['file_name'] 		= $image_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('webcam');
		}else{
			$image_name = $this->input->post('webcam');
		}
			

		$data = array(
			'name' => $nama,
			'email' => $email,
			'telepon' => $phone,
			'alamat' => $address,
			'photo' => $image_name,
			'password' => $password,
			'created_at' => date('d-m-Y H:i:s'),
			'updated_at' => date('d-m-Y H:i:s')
		);

		$this->Model_t_admin->updateakun($id,$data);
		redirect('administrator');
    }
    
    function add()
	{
		$data['page'] = "Add";
		$this->load->view('administrator/add', $data);
	}

	function addaction()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$address = $this->input->post('alamat');
		$password = md5($this->input->post('password'));


		if(!empty($_FILES['webcam']['name'])){
			$image_name =  str_replace(' ','_',date('Ymdhis').$_FILES['webcam']['name']);
			$config['upload_path'] 		= $this->config->item('save_face');
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['file_name'] 		= $image_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('webcam');
		}else{
			$image_name = $this->input->post('webcam');
		}
			
		$data = array(
			'name' => $nama,
			'email' => $email,
			'telepon' => $phone,
			'alamat' => $address,
			'photo' => $image_name,
			'password' => $password,
			'created_at' => date('d-m-Y H:i:s'),
			'updated_at' => date('d-m-Y H:i:s')
		);

		$this->Model_t_admin->addadmin($data);
		//echo 'berhasil';
		redirect('administrator');
	}

	function save_snap()
	{
		// new filename
	if(!empty($_FILES['webcam']['name'])){
			$image_name =  str_replace(' ','_',date('Ymdhis').$_FILES['webcam']['name']);
			$config['upload_path'] 		= $this->config->item('save_face');
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['file_name'] 		= $image_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('webcam');
		}else{
			$image_name = $this->input->post('webcam');
		}
	}
}