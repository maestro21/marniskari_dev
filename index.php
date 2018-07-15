<?php error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
include('autoload.php');

try {

	/** uncomment if you want to make your website completely private **/
	/** if(!checkLogged()) redirect(BASE_URL . 'login.php'); /**/

	G('bgimg', BASE_URL . 'data/img/bg.jpg');
	$_PATH = route();

	$class = dispatch();

	/** output **/
	if($class->ajax)
		echo $class->output;
	else
		echo tpl('main', array(
			'title' => $class->title,
			'content' 	=> $class->output,
			'class'		=> $class
			)
		);

} catch(Throwable $t) {
	echo $t->getMessage();
	debug_print_backtrace() ;
	 die();
}
