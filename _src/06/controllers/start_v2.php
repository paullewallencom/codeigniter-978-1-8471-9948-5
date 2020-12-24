<?php
 class  Start extends Controller 
 {
	function Start()
	{
		parent::Controller();
	}
	

   function assessme()
   {
		$this->simpleloginsecure->logout();
		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			$this->simpleloginsecure->login($_POST['username'], $_POST['password']);
		}
   
		if($this->session->userdata('logged_in'))
		{
			$this->mainpage();
		} 
	   else
	   {
			$this->index();
		}
    }
	
	function mainpage()
	{
		$this->_check_status();
	
		$this->load->view('success');
		
	}

	function _check_status(){
	
		if(!$this->session->userdata('logged_in'))
		{	
			$this->load->helper('url');
			redirect('start/assessme', 'refresh');
		}
	}	


   function _checkme($username='', $password='')
   {
		if($username == 'fred' && $password == '12345')
		{
			return TRUE;                 
		}
		else
		{
			return FALSE;
		}
    }
	
	function _checksession(){
		$this->load->library('session');
		$this->load->helper('url');
		
		$status = $this->session->userdata('status');
		
		if( $status != 'OK')
		{ 
			redirect('start/index');
		}
	}	
	
	function demo(){
		$this->_checksession();
		
		echo "Function code would be here";
	}	

	
    function index()
    {
		  $this->load->helper('form');

          $data['mytitle']    = "My site";
          $data['base']       = $this->config->item('base_url');
          $data['css'] 	       = $this->config->item('css');
          $data['mytitle']    = "A website to monitor other websites";
          $data['text']       = "Please log in here!";
                 
          $this->load->view('entrypage', $data); 
    }	
    
}