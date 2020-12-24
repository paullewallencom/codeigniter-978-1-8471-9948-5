<?php

class Uploader extends Controller {

    function uploader()
    {
        parent::Controller();
    }
	
	function index()
	{
		$this->load->helper('form');
		
		$this->load->view('upload_form');
	
	}
	
	function upload()	
	{
	
		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '8000';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('file'))
		{
			echo $this->upload->display_errors();
		}	
		else
		{

			$file_data = $this->upload->data();
			$droot = $_SERVER["DOCUMENT_ROOT"];
			
			$config['image_library'] = 'GD2';
			$config['source_image'] = $droot.'codeigniter/uploads/'.$file_data['file_name'];
			$config['new_image'] = $droot.'codeigniter/uploads/t_'.$file_data['file_name'];
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 75;
			$config['height'] = 75;

			$this->load->library('image_lib', $config); 


			if ( ! $this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
			}else{
				$this->load->helper('url');
				$data['file'] = $file_data['file_name'];
				$this->load->view('image', $data);
			}	
		}
	
	}

	function download(){
		
		$this->load->library('zip');
		
		$this->zip->read_dir('uploads/'); 

		$this->zip->archive('uploads/uploads.zip');	
	}	
	
}