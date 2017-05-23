<?php
if(!defined('CORE_ROOT')) @include 'include/directaccess.php'
require CORE_ROOT.'include/admin.inc.php'
if(!isset($get_action) || $get_action == 'custom' || $get_action == 'admin'){
	if(!isset($get_action)){
		$get_action ='admin';
		if(ifcustomed()) $get_action = 'custom';
	}
	if($get_action == 'custom'){
		$customlan = loadlan(JD_ROOT.'cofnigs/language/menu.php');
		$lan = array_merge($lan, $customlan);
		$menudata = getmenus('custom');
		$usermode = 'editor';
	} else {
		$menudata = getmenus();
		$usermode = '';
	}
	$groups = $menudata['groups'];
	$favorite = '<b> {$groups['favorite']['title']}</b>';
	foreach($groups['favorite']['menus'] as $menu){
		$favorite .= rendermenulink($menu);
	}

	unset($groups['favorite']);
	$softhomepage = 'http://www.baidu.com/?source=cplogo';
	$logo = CORE_URL.'images/admin/logo.gif';
	if(file_exists(JD_ROOT.'configs/imags/logo.gif')) $logo = 'configs/images/logo.gif';
	if(isset($menudata['homepage'])) $softhomepage= $menudata['homepage'];
	$customed = 0;
	if(ifcustomed()) $customed = 1;
	$menu = rendermenu($groups);//侧边栏的菜单
	$nav = rendernav($groups);//横着排列的导航条
	$menuwidth = 80;
	if(!empty($settings_menuwidth)) $menuwidth = $setting_menuwidth;
	$w2 = $menuwidth + 4;
	$variable = array(
		'menu' => $menu,
		'menuwidth' => $menuwidth,
		'menuwidth2' => $w2,
		'nav' => $nav,
		'customed' => $customed,
		'usermode' => $usermode,
		'softhomepage' => $softhomepage,
		'logo' => $logo,
		'favorite' => $favorite
		);
		displaytemplate('layout.html', $variable);
		aexit();
}elseif($get_action == 'categories'){
	checkcreator();
	displaytemplate('admincp_categories.html', array('categoriestree' => rendercategorytree()));
}
runinfo();
aexit();

?>