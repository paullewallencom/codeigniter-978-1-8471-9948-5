<?php

class Shop extends Controller {

	function Shop()
	{
		parent::Controller();
		$this->load->library('cart');
		$this->load->helper('url');	
	}
	
	function index()
	{
		$this->load->helper('form');
		$this->load->view('home');
	}
	
	function add()
	{	
		$data = array(
					   'id'      => $_POST['id'],
					   'qty'     => $_POST['qty'],
					   'price'   => $_POST['price'],
					   'name'    => $_POST['name']
					);

		$this->cart->insert($data); 

		redirect('shop/index/', 'refresh');	
	}
	
	function show_cart()
	{
	
		$this->load->helper('form');
		$this->load->view('cart');
	}
	
	function update()
	{
		$data = array();
		for($i=1;$i<=$this->cart->total_items();$i++){
				
			$data[] = array('rowid' => $_POST[$i.'rowid'], 'qty' => $_POST[$i.'qty']);		
			
		}
		
		$this->cart->update($data); 
		redirect('shop/show_cart/', 'refresh');	
		
	}
}