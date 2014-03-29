<?php

class ProcessThread extends Thread {
	
	private $processId;
	
	public function __construct ($processId) {
		$this->processId = $processId;
	}
	
	public function run () {
		
		echo 'Thread: ' . $this->processId;
		echo PHP_EOL;
		echo '<br />';
		
		echo 'Start: ' . nl2br(date('h:i:s A'));
		echo PHP_EOL;
		echo '<br />';
		
		for ($i = 0; $i < PHP_INT_MAX; $i++) {
			//echo ' - Process ' . $this->processId . ' Counter: ' . $i . '<br />';
		}
		
		echo 'Complete: ' . nl2br(date('h:i:s A'));
		echo PHP_EOL;
		echo '<br />';
		echo '<br />';
	}
	
}