<?php
class Sites_model extends Model {

	function get_sites($page)
	{
		//we limit the number of results we want to have returned, also passing the current page as the second parameter.

		$this->db->limit(5, $page);	
		$query = $this->db->get('sites'); 
		
		//also we need the total number of records.

		$query2 = $this->db->get('sites'); 
		$total_rows = $query2->num_rows();
		
		//as only one value can be returned, and as we have two values, we need an array for that.

		$data['query'] = $query;
		$data['total_rows'] = $total_rows;
		
		return $data;	
	}
	
	function add_site($data)
	{	
		if(!empty($data)){
			$result = $this->db->insert('sites', $data); 
			
			//the insert_id() function gets the id of the last inserted record
			$last_id = $this->db->insert_id();

			$data = array(
						   'site_order' => $last_id,
						);
			
			$this->db->where('id', $last_id);
			//so the created record will have the same order number as it's id
			$this->db->update('sites', $data); 			
		}
		
		return $result;
	}

	//We don't give a default value to the $id variable, but will make the necessary checks inside the function
	function get_site($id)
	{	
		if(!empty($id))
		{
			//use the where function to add a filter to our query, this time the id, with the $id value
			$this->db->where('id', $id); 

			//and then execute the query
			$query = $this->db->get('sites'); 
		}
		
		//If data is returned, the $row variable will be loaded with it
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
		}
		else
		{
			//if no data, then we put FALSE into the variable
			$row = FALSE;
		}				
		
		//and then return one value or the other one.
		return $row;
	}

	function edit_site($data, $id)
	{	
		$result = 0;
		if(!empty($data)){
			$this->db->where('id', $id);
			$result = $this->db->update('sites', $data); 
		}
		
		return $result;
	}

	function delete_site($id)
	{	
		$return = 0;

		if(!empty($id)){
			$this->db->where('id', $id);

			//this time we will use the delete function
			$result = $this->db->delete('sites'); 
		}
		
		return $result;
	}
	
	function change_order($current,$destiny,$current_id,$destiny_id)
	{
	
		//the current record, $current_id, will get the $destiny order number
		$data = array(
					   'site_order' => $destiny,
					);
		
		$this->db->where('id', $current_id);
		$this->db->update('sites', $data); 
		
		//the other, $destiny id, record will get the current record order number, thus swapping order numbers
		$data = array(
					   'site_order' => $current,
					);
		
		$this->db->where('id', $destiny_id);
		$this->db->update('sites', $data); 	
	
	}	
	
}