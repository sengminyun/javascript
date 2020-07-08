<?php

header("pragma: no-cache");

header("Cache-Control: no-cache,must-revalidate");

header("Content-type: text/plain");

$current = ("Y-m-d H:i:s");

echo("현재 서버 시간은".$current."입니다.");

?>