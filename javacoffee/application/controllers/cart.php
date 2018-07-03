<?php
class cart extends CI_Controller{
	public function cartdata(){
		$this->load->library('cart');


		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => 1,
			'price'   => $this->input->post('cost1'),
			'name'    => $this->input->post('desc1')
		);

		$this->cart->insert($data);
		$this->load->view('templates/header');
		$this->load->view('pages/cart');
		$this->load->view('templates/footer');
	}
}