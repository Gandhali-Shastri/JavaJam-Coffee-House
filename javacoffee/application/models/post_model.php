<?php
	class Post_model extends CI_Model{
		public function _construct(){
			$this->load->database();
		}

		public function get_posts(){
			
			$query = $this->db->query("Select * from perfomance p, musician m where p.musicianid = m.musicianid order by MonthYear");
			return $query->result_array();
		}

		public function get_products($productId = FALSE){
			if($productId === FALSE){
				$query = $this->db->get('products');
				return $query->result_array();
			}

			$query = $this->db->get_where('products', array('ProductId' => $productId));
			return $query->row_array();
		}

		public function create_post(){
		
			$data = array(
				'Name' => $this->input->post('name'),
				'Email' => $this->input->post('email'),
				'Experience' => $this->input->post('experience')
			
			);

			return $this->db->insert('jobs', $data);
		}

		public function placeorder(){

			$data = array(
				'Name' => $this->input->post('name'),
				'Email' => $this->input->post('email'),
				'Address' => $this->input->post('address'),
				'City' => $this->input->post('city'),
				'State' => $this->input->post('state'),
				'Zip' => $this->input->post('zip'),
				'Credit_Card' => $this->input->post('cc'),
				'Month' => $this->input->post('month'),
				'Year' => $this->input->post('yr')
			
			);

			return $this->db->insert('orders', $data);
		}


}