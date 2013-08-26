<?php
ob_end_clean();
header("Connection: close");
ignore_user_abort();
ob_start();
echo "text the user will see";
$size = ob_get_length();
header("Content-Length: $size");
ob_end_flush();
flush();
sleep(5);
echo "huh";
file_put_contents("/tmp/roflcopters", "roflcopters");

