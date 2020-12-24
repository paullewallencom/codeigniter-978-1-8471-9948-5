<?php
class Sites_model extends Model {

	function get_sites()
	{
		$query = $this->db->get('sites'); 
		
		return $query;	
	}
	
	function add_site($data)
	{	
		//We create $result variable with a default value of 0, so if no insert is done, $result will be returned with 0 value, and we will be able, in the controller, to create the flash data accordingly.

		$result = 0;

		//Check if $data is not empty
		if(!empty($data)){

			//insert $data with the insert method
			$result = $this->db->insert('sites', $data); 
		}
		
		//return the value
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
}