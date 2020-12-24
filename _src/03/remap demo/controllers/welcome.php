<?php

class Welcome extends Controller
 {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function _remap($method)	
	{
		if ($method == 'hello')
		{
			$this->say_hello();
		}
		else
		{
			$this->$method();
		}
	}
	
	function say_hello()
	{
		echo "Hello";
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */