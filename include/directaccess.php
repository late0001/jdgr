<?php
 $file = substr(basename($_SERVER['SCRIPT_FILENAME']), 0, -4);/*
 例如： D:/xampp/htdocs/jdgr/test/hello.php
	basename() 为 hello.php
	substr(, 0, -4) 为 hello
*/
$_GET['file'] = $file;
$url = http_build_query($_GET);//  生成 url-encoded 之后的请求字符串

header('location:index.php？'.$url);
exit;
?>