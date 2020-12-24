<?php

class Errors extends Controller {

    function errors()
    {
        parent::Controller();
    }
    
    function index()
    {
	
		$this->load->model('errors_model');
		
		$site_id = "16";
		$error = "Database unavailable";
		$now = date("Y-m-d H:i:s");
		
		$data = array(
					   'site_id' => $site_id ,
					   'error' => $error ,
					   'date' => $now
					);

		$this->errors_model->insert_error($data);		
	
    }
	
	function show_errors($site_id = ''){
	
		$this->load->model('errors_model');
		$this->load->helper('date');
		
		$errors = $this->errors_model->get_errors($site_id);
			
			$errors = $this->errors_model->get_errors($site_id);
			
			if ($errors->num_rows() > 0){
			
			foreach ($errors->result() as $row){	
			
				$unix = mysql_to_unix($row->date);
				
				$format = 'DATE_RFC822';
				$time = time();

				$date = standard_date($format, $time); 
				
				echo $row->site_id." - ".$row->error." - ".$date."<br/>";		
			}	
		}
	}
	
	function show_calendar($site_id = '', $year = '', $month = ''){
	
		$this->load->model('errors_model');
		$this->load->library('calendar');
		
		$errors = $this->errors_model->get_errors_by_date($site_id, $year, $month);
		
		if ($errors->num_rows() > 0){
		
			$data = array();
			foreach ($errors->result() as $row){	
			
				$data[$row->day] =  "http://localhost/codeigniter/errors/show_day/{$site_id}/{$year}/{$month}/{$row->day}";

			}

			echo $this->calendar->generate($year, $month, $data);
		}			
	
	}	
	
	function show_day($site_id = '', $year = '', $month = '', $day = ''){
	
		$this->load->model('errors_model');
		$this->load->helper('text');
		
		$errors = $this->errors_model->get_errors_by_date($site_id, $year, $month, $day);
		
		if ($errors->num_rows() > 0){
		
			$data = array();
			foreach ($errors->result() as $row){	
			
				echo "<h1>".$row->date." : ".word_limiter($row->error, 4)."</h1>";
				echo "<p>".$row->error."</p><br/><br/>";

			}
		}		
	}

	function report_twitter($user_lang = 'en'){
	
		switch($user_lang){
			case 'en':
						$this->lang->load('info', 'english');
						break;
			case 'es':
						$this->lang->load('info', 'spanish');
						break;
		}

		$this->load->library('twitter');
		$this->twitter->auth('account@account.com','password');
		
		$this->twitter->update($this->lang->line('error')); 		
	
	}	
}