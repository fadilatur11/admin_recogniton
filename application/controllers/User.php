<?php 
class User extends CI_Controller
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

	function add()
	{
		$data['page'] = "Add";
		$this->load->view('user/add', $data);
	}

	function addaction()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$address = $this->input->post('alamat');
		$password = md5($this->input->post('password'));


			$image_name =  str_replace(' ','_',date('Ymdhis').$_FILES['webcam']['name']);
			$config['file_name'] 		= $image_name;
			

		$data = array(
			'name' => $nama,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'image' => $image_name,
			'password' => $password,
			'created_at' => date('d-m-Y H:i:s'),
			'updated_at' => date('d-m-Y H:i:s')
		);

		$this->Model_t_admin->add($data);
		echo 'berhasil';
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

	function delete($id)
	{
		$this->Model_t_admin->delete($id);
		redirect('beranda');
	}

	function edit($id)
	{
		$data['page'] = 'Edit User';
		$data['getdata'] = $this->Model_t_admin->get($id);
		$this->load->view('user/edit',$data);
	}

	function editaction($id)
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$address = $this->input->post('alamat');
		$password = md5($this->input->post('password'));


			$image_name =  str_replace(' ','_',date('Ymdhis').$_FILES['webcam']['name']);
			$config['file_name'] 		= $image_name;
			

		$data = array(
			'name' => $nama,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'image' => $image_name,
			'password' => $password,
			'created_at' => date('d-m-Y H:i:s'),
			'updated_at' => date('d-m-Y H:i:s')
		);

		$this->Model_t_admin->update($id,$data);
		echo 'berhasil';
	}

	function detail($id)
	{
		$data['page'] = "Detail User";
		$data['getdata'] = $this->Model_t_admin->get($id);
		$this->load->view('user/detail',$data);
	}
}