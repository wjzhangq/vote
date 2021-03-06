<?php
class autoload{
	static private $isRegister = false;
	static private $files = array();
	static public function register(){
		if (!self::$isRegister){
			self::append(FRAMEWORK . '/class/core');
			spl_autoload_register(__CLASS__ . "::loadClass");
			self::$isRegister = true;
		}
	}
	
	static public function append($dir){
		$glob = glob($dir . '/*.php');
        if (empty($glob)) continue;
        $fnames = array_map(create_function('$a', 'return strtolower(basename($a));'), $glob);
        self::$files = array_merge(self::$files, array_combine($fnames, $glob));
	}
	
	static public function append_list($data){
		// classname => $path;
		foreach($data as $k=>$v){
			self::$files[$k] = $v;
		}
	}
	
	static public function get_map(){
		return self::$files;
	}
	
	static public function loadClass($class_name){
	    $class_file = strtolower($class_name) . '.php';
		$success = false;
    	// Search in the available files for the undefined class file.
        if ( isset(self::$files[$class_file]) ) {
			require self::$files[$class_file];
			
			// If the class has a static method named __static(), execute it now, on initial load.
			if (PHP_VERSION < '5.3' && class_exists($class_name, false) && method_exists($class_name, '__static') ) {
			        call_user_func(array($class_name, '__static'));
			}
			$success = true;
        }
        
        return $success;
	}
}
?>