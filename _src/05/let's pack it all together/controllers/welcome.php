<?php

class Welcome extends Controller {

	function Welcome(){
		parent::Controller();	
		$this->load->helper('html');
		$this->load->helper('form');
	}	
	
	function index($data = ''){	
	
        $this->load->view('basic_view', $data);

    }
	
	function mail(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('message', 'Message field', 'required');			
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('basic_view');
		}
		else{

			//Here we should place the code to send the email.
			//CI will also help us with that, we will see how in a few chapters.

			$this->load->view('success');
		}		
	}
}

/* End of file welcome.php */