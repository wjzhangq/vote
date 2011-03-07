<?php
class model{
	var $db;
    function __construct(){
		try{
			$db=config::get('db');
			$this->db = $db;
		}catch(Exception $e){
			
		}
	}
	
	function listAll(){
		
	}
	
	function get(){
		
	}
	
	function update(){
		
	}
}

?>