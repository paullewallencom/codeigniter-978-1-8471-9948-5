<?php

class Email extends Controller {

    function Email()
    {
        parent::Controller();
    }
    
    function send_contact(){
	
		$this->load->library('email');
		$config['charset'] = 'utf-8';
		$this->email->initialize($config);		
		
		$this->email->from('demo@site.com', 'demosite.com');
		$this->email->to('admin@demosite.com');
		
		$this->email->subject('Contact form send from website');	
		
		 $name = $_POST['name'];	
		 
		 $email = $_POST['email'];
		 
		 $phone =  $_POST['phone'];
		 
		 $message = $_POST['message'];
		 	 			 	
		
		/*********************************************/		
		
		$ data = "Contact form \n";
		$data .= "------------------------------------------------------ \n\n";
		$data .= "Name: ".$name."\n\n";
		$data .= "Email: ".$email."\n\n";
		$data .= "Phone: ".$phone."\n\n";
		$data .= "Message: ".$message."\n\n";
		
		$this->email->message($data);
		
                   if ( ! $this->email->send())
                  {
                  // Error handling
                  }
		
		redirect('contac/index', 'refresh');
	
	}