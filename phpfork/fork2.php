<?php

for ($x = 0; $x < 3; $x++) {
	$pid = pcntl_fork();

	if (!$pid) {
		sleep(rand(1, 3));
		echo "in child $x\n";
		pcntl_exec("forked" . $x . ".php");
	}
}
while (pcntl_waitpid(0, $status) != -1) {
	$statusvar = pcntl_wexitstatus($status);
	echo "Child completed, returned $statusvar.\n";
}

