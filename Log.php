<?php 
class Log {
	// assigning properties
	public $datetime;
	public $filename;
	public $handle;

	// __construct and __destruct will always run first but can go anywhere in the class. It is best practice place at the top
	public function __construct($prefix = 'log') 
	{
		$this->datetime = date("Y-m-d");
		$this->filename = "$prefix-{$this->datetime}.log";
		$this->handle = fopen($this->filename, "a");
	}

	public function __destruct() 
	{
		fclose($this->handle);
	}

	function logMessage($logLevel, $message) {
		$string = "{$this->datetime} $logLevel $message" . PHP_EOL;
		fwrite($this->handle, $string);
	}

	function error($message) 
	{
		$this->logMessage('ERROR', $message);
	}

	function info($message)
	{
		$this->logMessage("INFO", $message);
	}
}











