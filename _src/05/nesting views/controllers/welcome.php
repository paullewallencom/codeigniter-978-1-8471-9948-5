<?php

class Welcome extends Controller {

	function Welcome(){
		parent::Controller();	
	}	
	
	function index()
	{	
		$this->load->helper('html');
		$data_h['myrobots']   = '<meta name="robots" content="noindex ,nofollow">';
		$data_h['mywebtitle'] = 'Web monitoring tool';	
		$data['header']    = $this->load->view('header_view', $data_h, TRUE);
		
		$data['mytitle']    = "A website monitoring tool";
		$data['mytext']     = "This website helps you to keep track of the other websites you control.";		
		$this->load->view('basic_view', $data);  
	}

}

/* End of file welcome.php */