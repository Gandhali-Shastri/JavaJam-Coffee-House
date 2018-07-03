<?php

class jobs_model extends CI_Model{
		public function _construct(){
			$this->load->database();
		}

		public function create_post(){
		
			$data = array(
				'Name' => $this->input->post('name'),
				'Email' => $this->input->post('email'),
				'Experience' => $this->input->post('experience')
			
			);

			return $this->db->insert('jobs', $data);
		}
}