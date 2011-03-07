<?php

class config{
	static $data;
	
	
	static function set($k, $v){
		self::$data[$k] = $v;
	}
	
	static function get(){
		$argv = func_get_args();
		$ret = self::$data;
		foreach($argv as $v){
			if (isset($ret[$v])){
				$ret = $ret[$v];
			}else{
				throw new Exception('key "' . $v . '" is not exist');
			}
		}
		
		return $ret;
	}
}

?>