<?php
class Start extends Controller 
{
	
var    $base;
	
var    $css;
   

function Start()
	
{
	  
 parent::Controller();
	   
$this->base = $this->config->item('base_url');
	 
  $this->css = $this->config->item('css');      
  
	}   
	 


function hello($name)
	
{
		
$data['css'] = $this->css;
	
	$data['base'] = $this->base;
	
	$data['mytitle'] = 'Welcome to this site';

	$data['mytext'] = "Hello, $name, now we're getting dynamic!";
		$this->load->view('testview', $data);

	}  
}