<?php

class jobs extends CI_Controller{
	public function jobsdata()
	{		

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[1]|max_length[50]|xss_clean|xss_clean|callback_alpha_dash_space',
			array(
				'required'      =>		'You must provide a %s.',
				'min_length'	=>		'%s has Invalid length',
        		'max_length'	=>		'%s has Invalid length',
        	
        	));

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[3]|max_length[50]|xss_clean',
			array(
				'required'		=>		'You must provide an %s.',
				'min_length'	=>		'%s has Invalid length',
        		'max_length'	=>		'%s has Invalid length'
				));

		$this->form_validation->set_rules('experience', 'Experience','required|min_length[1]|max_length[50]|xss_clean',
			array(
				'required'		=>		'You must provide a %s.',
				'min_length'	=>		'%s has Invalid length',
        		'max_length'	=>		'%s has Invalid length'
        		));

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('pages/jobs');
			$this->load->view('templates/footer');
		} 
		else
		{

			$this->jobs_model->create_post();
			redirect('jobs');

		}

		function validate($str) {
        if (!preg_match('~/d~', $str))
            return true;
        else
        	$this->form_validation->set_message('validate_name','%s must have characters only.');
            return false;
   	}

	}

		function alpha_dash_space($name){
			 $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
	    if (! preg_match('/^[a-zA-Z\s]+$/', $name)) {
		       
		        return False;
		    } else {
		    	
		        return true;
		    }
		}
}