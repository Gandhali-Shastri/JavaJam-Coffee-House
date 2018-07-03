<?php
class orders extends CI_Controller{

  public function ordersdata(){

    
    $this->form_validation->set_rules('name', 'Name', 'required|min_length[1]|max_length[50]|xss_clean|callback_alpha_dash_space',
      array(
            'required'    =>    'You must provide a %s.',
            'min_length'  =>    '%s has Invalid length',
            'max_length'  =>    '%s has Invalid length',            
            'alpha'     =>    'characters only'
          ));

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean',
      array(
            'required'    =>    'You have not provided an %s.'));

    $this->form_validation->set_rules('address', 'Address', 'required|min_length[1]|max_length[50]|xss_clean',
      array(
            'required'      =>    'You have not provided a proper %s.',
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length',
          ));

    $this->form_validation->set_rules('city', 'City', 'required|min_length[1]|max_length[50]|xss_clean|callback_alpha_dash_space',
      array(
            'required'      =>    'You have not provided a proper %s.',
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length',
            'alpha'     =>    'characters only'));

    $this->form_validation->set_rules('state', 'State', 'required|min_length[1]|max_length[50]|xss_clean',
      array(
            'required'      =>    'You have not provided a proper %s.',
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length',
            'alpha'         =>    'characters only'
           ));

    $this->form_validation->set_rules('zip', 'Zip', 'required|min_length[1]|max_length[10]|xss_clean|callback_is_digits',
      array(
            'required'      =>    'You have not provided a proper %s.',
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length'));

    $this->form_validation->set_rules('cc', 'Credit Card', 'required|min_length[12]|max_length[16]|xss_clean|callback_is_digits',
      array(
            'required'      =>    'You have not provided a proper %s.',
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length'));

    $this->form_validation->set_rules('month', 'Month', 'required|min_length[2]|max_length[2]|xss_clean|callback_is_digits',
      array(
            'required'      =>    'You have not provided a proper %s.',
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length'));
    $this->form_validation->set_rules('year', 'Year', 'required|min_length[2]|max_length[2]|xss_clean|callback_is_digits',
      array(
            'required'      =>    'You have not provided a proper %s.',  
            'min_length'    =>    '%s has Invalid length',
            'max_length'    =>    '%s has Invalid length'));

    if($this->form_validation->run() === FALSE){

      $this->load->view('templates/header');
      $this->load->view('pages/orders');
      $this->load->view('templates/footer');
    } else {

      
      $this->order_model->placeorder();
      redirect('orders');
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
    function is_digits($element) {
      $this->form_validation->set_message('is_digits', 'The %s field may only contain digits.');
      
      if(!preg_match ("/[^0-9]/", $element))
          return true;
    else
          return false;
  }
}