<?php
$json = file_get_contents('php://input');
var_dump(json_decode($json, true));
?>