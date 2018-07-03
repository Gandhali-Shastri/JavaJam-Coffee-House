<?php

class gear_model extends CI_Model{
		public function _construct(){
			$this->load->database();
		}

public function get_products($productId = FALSE){
			if($productId === FALSE){
				$query = $this->db->get('products');
				return $query->result_array();
			}

			$query = $this->db->get_where('products', array('ProductId' => $productId));
			return $query->row_array();
		}
	}