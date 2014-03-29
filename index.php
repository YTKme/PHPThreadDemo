<?php

set_time_limit(0);

require_once 'ProcessThread.php';

// Process pool
$process = array();

// Initialize and start the threads
foreach (range('A', 'F') as $i) {
	$process[$i] = new ProcessThread($i);
	$process[$i]->start();
}

// Let the thread come back
foreach (range('A', 'F') as $i) {
	$process[$i]->join();
}

echo 'No Thread';
echo PHP_EOL;
echo '<br /><br />';

foreach (range('A', 'F') as $i) {
	echo 'Start ' . $i . ': ' . nl2br(date('h:i:s A'));
	echo PHP_EOL;
	echo '<br />';
	
	for ($j = 0; $j < PHP_INT_MAX; $j++) {
	}
	
	echo 'Complete ' . $i . ': ' . nl2br(date('h:i:s A'));
	echo PHP_EOL;
	echo '<br /><br />';
}

echo 'Done!';