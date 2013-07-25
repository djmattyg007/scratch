<?php
require("func.php");

$arrays = array();
$array1 = array("id" => 1, "name" => "roflcopters", "data" => "hehe");
$arrays[$array1["id"]] = &$array1;
$arrays[$array1["name"]] = &$array1;

$rofl1 = $arrays[1];
echon($rofl1["data"]);

$rofl2 = $arrays["roflcopters"];
$rofl2["data"] = "facepalm";
echon($rofl1["data"]);

$arrays[1]["data"] = "hmmm";
echon($rofl1["data"]);
echon($rofl2["data"]);
$rofl3 = $arrays["roflcopters"];
echon($rofl3["data"]);

