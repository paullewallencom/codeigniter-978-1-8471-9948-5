<?php
 class  Start extends Controller 
 {
	function Start()
	{
		parent::Controller();
	}
	

   function assessme()
   {
		$this->load->library('session');
		
		$username =      $_POST['username'];
		$password =      $_POST['password'];

		if($this->_checkme($username, $password)==TRUE)
		{
			$this->session->set_userdata('status','OK');
			$this->mainpage();
		}else{
			$this->index();
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