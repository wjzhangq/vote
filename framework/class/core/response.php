<?php
class response extends object {
	private $_var = array();
	private $buffer = '';
	private $status = 200;
	private $header = array();
	var $tpl = '';
	
	static function getInstance(){
		return parent::getInstanceOf(__CLASS__);
	}
	
	function __construct(){
	    require_once(FRAMEWORK . '/class/3rd/smarty/Smarty.class.php');
	    $tpl = new Smarty();
	    $tpl->debugging = true;
	    $tpl->template_dir = APP . '/template/';
        $tpl->compile_dir  = APP . '/tmp/compile/';
        $tpl->cache_dir    = APP . '/tmp/cache/';
        $this->tpl = $tpl;
	}
	
	//肤质
	function assign($key, $val){
		$this->tpl->assign($key, $val);
	}
	
	//掉用模板
	function render($tpl, $param=array()){
	    if ($param){
	        foreach($param as $k=>$v){
	            $this->tpl->assign($k, $v);
	        }
	    }
		$this->buffer = $this->tpl->fetch($tpl);
	}
	
	function display($echo=true){
	    if ($echo){
	        //head

    	    //body
    	    echo $this->buffer;
	    }else{
	        return $this->buffer;
	    }

	}
	
	//not found
	function header_404($msg=null){
		header('HTTP/1.1 404 Not Found', true, 404);
		if (!empty($msg)){
		    $this->buffer = '<h2>' . $msg . '</h2>';
		}
	}

	function header_403($msg=null){
		header('HTTP/1.1 403 Forbidden', true, 403);
		if (!empty($msg)){
		    $this->buffer = '<h2>' . $msg . '</h2>';
		}
	}
	
	function error_msg($msg){
	    $this->buffer = '<h2>' . $msg . '</h2>';
	}
	
	/**
	 * function redirect
	 * Redirects the request to a new URL
	 * @param string $url The URL to redirect to, or omit to redirect to the current url
	 * @param boolean $continue Whether to continue processing the script (default false for security reasons, cf. #749)
	 */
	public static function redirect( $url = '', $continue = false )
	{
		if ( $url == '' ) {
			$url = Page::get_full_url();
		}
		header( 'Location: ' . $url, true, 302 );

		if ( ! $continue ) exit;
	}
	
	
	
	//access for ArrayAccess
	public function offsetExists ($offset) {
		return isset($this->_var[$offset]);
	}
    public function offsetGet ($offset) {
    	return $this->_var[$offset];
    }
    public function offsetSet ($offset, $value) {
    	$this->_var[$offset] = $value;
    }
    public function offsetUnset ($offset) {
    	unset($this->_var);
    }
    //access for count
    public function count(){
    	return count($this->_var);
    }
}
?>