<?php
if(!defined('CORE_ROOT')) exit;
require_once CORE_ROOT.'include/admin.func.php'
//configs/cp.config.php暂时不存在
if(file_exists(JD_ROOT.'configs/cp.config.php')) require_once(CORE_ROOT.'configs/cp.config.php');
$templatedir = JD_ROOT.'configs/templates/'.$template_path.'/';
require_once CORE_ROOT.'include/template.class.php';
$vc = $_vc;

if(file_exists('./resetpassword.php')) aexit('please remove resetpassword.php first.');
if($__callmode == 'web') {
	if(ifinstalled() && empty($admin_id) && !in_array($file, array('login', 'upgrade', 'install', 'update', 'theme'))){
		go($systemurl.'index.php?file=login');
	}
}

if(!isset($language)) $language = isset($setting_language)? $setting_language : 'chinese';
$lan = lan($charset, $language);
//configs/language/custom.lan暂时不存在
$customlan = loadlan(JD_ROOT.'configs/language/custom.lan');
$lan = array_merge($lan, $customlan);
if(empty($nodb)) $db = db();
if(ifinstalled() && empty($nolog)) eventlog("$admin_id\t$currenturl", 'admin');


?>