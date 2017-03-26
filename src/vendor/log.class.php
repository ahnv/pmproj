<?php 

class log{
	public static function _elog($e,$file,$line) {
		error_log(date('[d-m-Y H:i e] '). '['. $file . ']' . $e . PHP_EOL, 3, LOG_FILE);
		die("There were some issues while processing your request, please refresh.");
	}
}