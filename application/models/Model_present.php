<?php 
class Model_present extends CI_Model {
    protected $table = 'present';

    function present() {
        $this->db->select('
			user.name, user.email, user.phone, user.address, user.image, user.sample_image,
			user.status, present.id, present.image as present_image, present.latitude, present.longitude,
			present.created_at, present.updated_at,present.user_id
		');
		$this->db->join('user','present.user_id = user.id');
		$this->db->order_by('present.created_at', 'DESC');
		return $this->db->get($this->table)->result_array();
    }

    function getDetail($id=0) {
        $this->db->select('
			user.name, user.email, user.phone, user.address, user.image, user.sample_image,
			user.status, present.id, present.similiar, present.image as present_image, 
			present.latitude, present.longitude, present.created_at, present.updated_at
        ');
		$this->db->join('user','present.user_id = user.id');
        $this->db->where('present.id', $id);
		$this->db->order_by('present.created_at', 'DESC');
		return $this->db->get($this->table)->row_array();
    }
}
