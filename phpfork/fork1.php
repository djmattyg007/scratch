<?php

$rofl = "";
$rofl2 = new stdClass();
$rofl2->huh = "roflcopters";
for ($x = 0; $x < 5; $x++) {
	$pid = pcntl_fork();

	if (!$pid) {
		$rofl = "rofl$x";
		$rofl2->huh .= $x;
		sleep(rand(1, 3));
		echo "in child $x\n";
		sleep(1);
		echo $rofl . "\n";
		echo $rofl2->huh . "\n";
		exit($x);
	}
}
while (pcntl_waitpid(0, $status) != -1) {
	$statusvar = pcntl_wexitstatus($status);
	echo "Child $statusvar completed.\n";
}

