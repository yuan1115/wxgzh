<?php
return array(
	'TMPL_PARSE_STRING' => array(
		'__adminLib__' => __ROOT__.'/Public/Admin/lib',
		'__adminStatic__' => __ROOT__.'/Public/Admin/static',
		'__adminTemp__' => __ROOT__.'/Public/Admin/temp',
	),
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
	    ':filename' => array('Index/index'),
	)
);
