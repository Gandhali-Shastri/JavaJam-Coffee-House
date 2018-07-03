<?php
class order_model extends CI_Model{
		
		public function _construct(){
			$this->load->database();
		}

		public function placeorder(){
			
			$data = array(

				'Name' => $this->input->post('name'),
				'EmailId' => $this->input->post('email'),
				'Address' => $this->input->post('address'),
				'City' => $this->input->post('city'),
				'State' => $this->input->post('state'),
				'Zip' => $this->input->post('zip'),
				'Credit_Card' => $this->input->post('cc'),
				'Month' => $this->input->post('month'),
				'Year' => $this->input->post('year')
			
			);

			$this->db->insert('orders', $data);

			$orderId= $this->db->insert_id();

			foreach ($this->cart->contents() as $items):
					$this->db->select('ProductId');
					$this->db->from('products');
					$this->db->where('Name',$items['name']);

					$query= $this->db->get();
					$row['products'] = $query->result_array();
					$ProductId = current($row);
					$id = current($ProductId);
					$data = array(
					'OrderId' => $orderId,
					'ProductId' => current($id),
					'Qty' => $items['qty'],
					'Price' => $items['subtotal']
				);	

				    $this->db->insert('orderitems',$data);
			
				endforeach;		
		
			$this->cart->destroy();
		}

	}