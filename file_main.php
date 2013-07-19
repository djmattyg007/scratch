<?php

function mymain($class, $function)
{
	var_dump(func_get_args());
	include_once($class);
	return call_user_func_array($function, array_slice(func_get_args(), 2));
}

echo mymain("file1.php", "rofl");
echo mymain("file1.php", "rofl2", 1, "haha");
echo mymain("file2.php", "rofl3", 4);
