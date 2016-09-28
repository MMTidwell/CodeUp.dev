<?php 
class Log {
	// assigning properties
	private $datetime;
	private $filename;
	private $handle;

	// __construct and __destruct will always run first but can go anywhere in the class. It is best practice place at the top
	public function __construct($prefix = 'log') 
	{
		$this->datetime = date("Y-m-d");
		$this->filename = "$prefix-{$this->datetime}.log";
		$this->handle = fopen($this->filename, "a");
	}

	private function setFilename($filename) {
		if (! is_string($filename)) {
			echo 'The prperty $filename needs to be a string. You gave ' . gettype($filename) . PHP_EOL;
			die();
		} else if (touch($filename) && is_writable($filename)) {
			$this->filename = $filename;
		} else {
			echo 'You do not have the access rights for that file' . PHP_EOL;
			die();
		}
	}

	private function setHandle($handle) {
		return $this->handle = strval($handle);
	}

	public function getFilename() {
		return $this->filename;
	}

	public function getHandle() {
		return $this->handle;
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

	public function __destruct() 
	{
		fclose($this->handle);
	}
}











