<?php 
echo $_SERVER['SCRIPT_FILENAME'].'</br>';
echo basename($_SERVER['SCRIPT_FILENAME']).'</br>';
echo substr(basename($_SERVER['SCRIPT_FILENAME']), 0, -4);

?>
