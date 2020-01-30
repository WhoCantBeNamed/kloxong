<?php

	$uid = $argv[1];
	$gid = $argv[2];
	$cmd = '';

	for ($i = 3; $i < (is_countable($argv) ? count($argv) : 0); $i++) {
		$cmd .= "'" . $argv[$i] . "' ";
	}

	posix_setgid($gid);
	posix_setuid($uid);

	exec("{$cmd} 2>&1", $output, $retVal);

	foreach ($output as $line) {
		echo "$line\n";
	}

	exit($retVal);