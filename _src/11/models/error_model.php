<?php
class Errors_model extends Model {

	function insert_error($data)
	{

		$query = $this->db->insert('error_logs', $data); 

		return $query;
	
	}
	
	function get_errors($site_id = ''){
	
		if(!empty($site_id)){
		
			$this->db->where('site_id', $site_id); 
			$query = $this->db->get('error_logs');
			
			return $query;
		
		}
	
	}	
	
	function get_errors_by_date($site_id = '', $year = '', $month = '', $day = ''){
	
		if(!empty($site_id)){
		
			$this->db->where('site_id', $site_id); 
			
			$this->db->select('site_id, DAY(date) as day, MONTH(date) as month, YEAR(date) as year, error, date');
			
			if(!empty($year)) $this->db->where('YEAR(date)', $year); 
			if(!empty($month)) $this->db->where('MONTH(date)', $month); 
			if(!empty($day)) $this->db->where('DAY(date)', $day); 
			
			$query = $this->db->get('error_logs');
			
			return $query;
		
		}
	
	}

}