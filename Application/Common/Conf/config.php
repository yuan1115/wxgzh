<?php
$config=array(
	//'配置项'=>'配置值'
  	'MODULE_ALLOW_LIST'    => array('Admin','API','Home'),//设置可访问目录
	'SHOW_PAGE_TRACE'      => true,                   //debug
	'TMPL_CACHE_ON'        => false,                  // 是否开启模板编译缓存,设为false则每次都会重新编译
    'DEFAULT_FILTER'       => 'addslashes,htmlspecialchars,trim',           //默认过滤方法 
	'UPLOAD_PATH'          => './Upload/',   //图片上传路径
	"DEFAULT_MODLE"       => "Show",
	'URL_MODEL'=>'2',
	'TMPL_TEMPLATE_SUFFIX' => '.html',                 //设置模版后缀
	'DEFAULT_THEME'        => 'default',              //设置默认主题目录
	'URL_HTML_SUFFIX' =>'.asp',
	'TMPL_L_DELIM' => '{{',
	'TMPL_R_DELIM' => '}}',
);
return $config;
