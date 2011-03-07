<?php
define('APP', dirname(__FILE__));
define('FRAMEWORK', APP . '/framework');
require FRAMEWORK . '/init.php';

$dirs = array('model', 'core');
foreach($dirs  as $dir){
	$glob = glob(APP . '/' . $dir . '/*.php');
	if (empty($glob)) continue;
	$fnames = array_map(create_function('$a', 'return "' . $dir . '_" . strtolower(basename($a));'), $glob);
	$tmp = array_combine($fnames, $glob);
	autoload::append_list($tmp);
}

Page::dispatch();

?>