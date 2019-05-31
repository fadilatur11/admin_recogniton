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
		$data['getdata'] = $this->Model_t_admin->detail($id);
		$this->load->view('user/detail',$data);
	}

	function search()
	{
		$output = '';
		$query = '';
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->Model_t_admin->fetch_data($query);
		$output .= '
		<ul class="list-unstyled">
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
							<a href="'.site_url('user/detail/').''.$row->id.'">
								<li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="'.$this->config->item('sample').$row->image.'" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong style="color:#86939e">'.$row->name.'</strong>
                                                </div>
                                                <small style="color:#86939e">'.$row->email.'</small>
                                            </div>
                                        </div>
                                    </div>
								</li>
							</a>
				';
			}
		}
		else
		{
			$output .= '<div><b>Data tidak ditemukan</b></div>
						</ul>';
		}
		$output .= '</table>';
		echo $output;
	}
}