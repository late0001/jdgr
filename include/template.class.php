<?php
require_once CORE_ROOT.'include/smarty/libs/Smarty.class.php';
class tpl {
	function tpl($paths, $variables = array()) {
		global $smarty;
		if(!isset($smarty)) {
			$smarty = new Smarty;
			$smarty->config_dir = JD_ROOT.'configs/';
			$smarty->cache_dir = JD_ROOT.'cache/';
			$smarty->left_delimiter = '<{';
			$smarty->right_delimiter = '}>';
		}
		CORE_ROOT."templates";
		JD_ROOT."cache/templates";
		$smarty->template_dir = $paths['template'];
		$smarty->compile_dir = $paths['cache'];
		foreach($variables as $k => $v) {
			$smarty->assign($k, $v);
		}
		$this->defaulttemplatepath = $this->customtemplatepath = '';
		$this->templatepath = $paths['template'];
		if(isset($paths['defaulttemplate'])) $this->defaulttemplatepath = $paths['defaulttemplate'];
		if(isset($paths['customtemplate'])) $this->customtemplatepath = $paths['customtemplate'];
		$this->smarty = $smarty;
	}
	function assign($variables) {
		foreach($variables as $k => $v) {
			$this->smarty->assign($k, $v);
		}
	}
	function regfunction($functions) {
		$functions = explode(',', $functions);
		foreach($functions as $f) {
			$this->smarty->register_function($f, $f);
		}
	}
	function functionexists($function) {
		if(isset($this->smarty->_plugins['function'][$function])) return true;
		return false;
	}
	function render($template) {
		if(strpos($template, '/') === false) {
			if(isset($this->defaulttemplatepath) && file_exists($this->defaulttemplatepath.'/'.$template)) {
				$templatefile = $_template = $this->defaulttemplatepath.'/'.$template;
			}
			if(isset($this->templatepath) && file_exists($this->templatepath.'/'.$template)) {
				$templatefile = $this->templatepath.'/'.$template;
				$_template = $template;
			}
			if(isset($this->customtemplatepath) && file_exists($this->customtemplatepath.'/'.$template)) {
				$templatefile = $_template = $this->customtemplatepath.'/'.$template;
			}
		}
		if(!isset($templatefile)) return false;
		if(!file_exists($templatefile)) {
			aexit('Template lose.<br /><a href="http://www.baidu.com/manual/template-lose.htm" target="_blank">help</a>');
		}
		$html = $this->smarty->text($_template);
		return $html;
	}
}
?>