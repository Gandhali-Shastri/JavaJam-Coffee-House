<?php
class gear extends CI_Controller{

	public function geardata(){

		$data['posts'] = $this->gear_model->get_products();

		$this->load->view('templates/header');
		$this->load->view('pages/gear',$data);
		$this->load->view('templates/footer');

	}
}