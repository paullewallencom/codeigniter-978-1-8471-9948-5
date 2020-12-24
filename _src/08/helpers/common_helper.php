<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('validate_user'))
{
	function validate_user($user){
		if (preg_match('/^[a-z\d_]{6,12}$/i', $user)) {
			$validate = "Ok";
		} else {
			$validate = "Ko";
		}		
		return $validate;
	}	
}