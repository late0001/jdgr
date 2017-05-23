<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>无标题文档</title>
</head>
<?php
//echo "结果就是".urldecode('%74%68%36%73%62%65%68%71%6c%61%34%63%6f%5f%73%61%64%66%70%6e%72');
$OOO0O0O00=__FILE__;$OOO000000=urldecode('%74%68%36%73%62%65%68%71%6c%61%34%63%6f%5f%73%61%64%66%70%6e%72');
echo $OOO000000."</br>";
$OO00O0000=10952;
$OOO0000O0=$OOO000000{4}.$OOO000000{9}.$OOO000000{3}.$OOO000000{5};
$OOO0000O0.=$OOO000000{2}.$OOO000000{10}.$OOO000000{13}.$OOO000000{16};
$OOO0000O0.=$OOO0000O0{3}.$OOO000000{11}.$OOO000000{12}.$OOO0000O0{7}.$OOO000000{5};
$O0O0000O0='OOO0000O0';
echo $$O0O0000O0.'</br>';
echo base64_decode('JE9PME9PMDAwMD0kT09PMDAwMDAwezE3fS4kT09PMDAwMDAwezEyfS4kT09PMDAwMDAwezE4fS4kT09PMDAwMDAwezV9LiRPT08wMDAwMDB7MTl9O2lmKCEwKSRPMDAwTzBPMDA9JE9PME9PMDAwMCgkT09PME8wTzAwLCdyYicpOyRPTzBPTzAwME89JE9PTzAwMDAwMHsxN30uJE9PTzAwMDAwMHsyMH0uJE9PTzAwMDAwMHs1fS4kT09PMDAwMDAwezl9LiRPT08wMDAwMDB7MTZ9OyRPTzBPTzAwTzA9JE9PTzAwMDAwMHsxNH0uJE9PTzAwMDAwMHswfS4kT09PMDAwMDAwezIwfS4kT09PMDAwMDAwezB9LiRPT08wMDAwMDB7MjB9OyRPTzBPTzAwME8oJE8wMDBPME8wMCwxMjYyKTskT08wME8wME8wPSgkT09PMDAwME8wKCRPTzBPTzAwTzAoJE9PME9PMDAwTygkTzAwME8wTzAwLDM4MCksJ3Bvd2VyZGJ5YWtjbXNTTUNLQVlCREVSV09QRmZHZ0hoSWlKakxsTm5RcVR0VXVWdlh4WnowMTIzNDU2Nzg5Ky89JywnQUJDREVGR0hJSktMTU5PUFFSU1RVVldYWVphYmNkZWZnaGlqa2xtbm9wcXJzdHV2d3h5ejAxMjM0NTY3ODkrLycpKSk7ZXZhbCgkT08wME8wME8wKTs=');
echo '<hr></br>';
$c = fopen("render.inc.bin", 'rb' );
echo fread($c, 1262);
echo '<hr><br>';
echo base64_decode(strtr(fread($c,380),
'powerdbyakcmsSMCKAYBDERWOPFfGgHhIiJjLlNnQqTtUuVvXxZz0123456789+/=',
'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'));

echo "第三次解码";
echo '</br>';

echo base64_decode(strtr(fread($c,10952),
	'powerdbyakcmsSMCKAYBDERWOPFfGgHhIiJjLlNnQqTtUuVvXxZz0123456789+/=',
	'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'));
?>
<body>
</body>
</html>
