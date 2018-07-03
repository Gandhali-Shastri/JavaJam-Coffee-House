<?php
	//Music is a controller
	class music extends CI_Controller{

		//view is a function of that controller
			public function musicdata(){
			
			$data['posts'] = $this->music_model->get_posts();
			
			$this->load->view('templates/header');
			$this->load->view('pages/music',$data);
			$this->load->view('templates/footer');

	}
}