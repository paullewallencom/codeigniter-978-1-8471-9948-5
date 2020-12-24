<?php

class Ftpdemo extends Controller {

    function Ftpdemo()
    {
        parent::Controller();
    }
    
    function index()
    {

		$this->load->library('ftp');
		$this->ftp->connect();
		
		$list = $this->ftp->list_files('/');

		print_r($list); 		
	
    }
	
	function getremotefiles($hostname, $username, $password)
	{
		$this->load->library('ftp');
		$config['hostname'] = $hostname;
		$config['username'] = $username;	
		$config['password'] = $password;
		$config['debug'] 	= TRUE;
		$this->ftp->connect($config);
		$filelist = $this->ftp->list_files('/my_directory/');
		$this->ftp->close();
		return $filelist;  
	}	
	
	function comparefiles($remotearray, $referencearray)
   {
	   $report = "<br />On site, not in reference array: ";
	   $report .= print_r(array_diff($remotearray, $referencearray), TRUE);
	   $report .= "<br />In reference array, not on site: ";
	   $report .= print_r(array_diff($referencearray, $remotearray), TRUE);
	   return $report;
   }	
}