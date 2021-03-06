<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    
    	<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<meta name="keywords" content="">
<meta name="description" content="">
    
    <title>
    	管理员列表    
    </title>
</head>
<body>
	 
	 
	
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="name" name="">
		<button type="submit" class="btn btn-success" id="" name="" onClick="selectAdmin()"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="layeropen('添加管理员','Admin_admin-add')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">登录名</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th>角色</th>
				<th width="130">加入时间</th>
				<th width="100">是否已启用</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody id="dataviwe"></tbody>
	</table>
</div>
 
	
	
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/autoJs.js"></script>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	getAdminList("post");
})
function selectAdmin(){
	var startTime = $("#datemin").val()
	var stopTime = $("#datemax").val()
	var name = $("#name").val()
	if((startTime.length>0&&stopTime.length>0)||(startTime.length==0&&stopTime.length==0)){
		if(name.length<=0){
			layer.msg("请选择时间段或填写管理员名称")
			return false
		}
		var data = {startTime:startTime,endTime:stopTime,name:name}
		getAdminList('post',data)
	}else{
		layer.msg("请正确选择时间")
	}
}
function getAdminList(method='get',data=''){
	var url = ajaxUrl("getAdminInfo") 
	$("#dataviwe").html('')
	ajaxData({url:url,method:method,data:data},function(e){
		var str = ''
		var status = ''
		for (var i=0;i<e.length;i++)
		{
			var stop = "<td class='td-status'><span class='label radius'>已停用</span></td><td class='td-manage'><a style='text-decoration:none' onClick=admin_start(this,"+e[i]['id']+") href='javascript:;' title='启用'><i class='Hui-iconfont'>&#xe615;</i></a> <a title='编辑' href='javascript:;' onclick=layeropen('管理员编辑','admin-add') class='ml-5' style='text-decoration:none'><i class='Hui-iconfont'>&#xe6df;</i></a> <a title='删除' href='javascript:;' onclick=delData(this,"+e[i]['id']+") class='ml-5' style='text-decoration:none'><i class='Hui-iconfont'>&#xe6e2;</i></a></td></tr>"

			var start = "<td class=td-status><span class='label label-success radius'>已启用</span></td><td class=td-manage><a style=text-decoration:none onClick=admin_stop(this,"+e[i]['id']+") href=javascript:; title=停用><i class=Hui-iconfont>&#xe631;</i></a> <a title=编辑 href=javascript:; onclick=layeropen(管理员编辑,admin-add,2) class=ml-5 style=text-decoration:none><i class=Hui-iconfont>&#xe6df;</i></a> <a title=删除 href=javascript:; onclick=delData(this,"+e[i]['id']+") class=ml-5 style=text-decoration:none><i class=Hui-iconfont>&#xe6e2;</i></a></td></tr>"
			if(e[i]['is_open']==1){
				status = start
			}else{
				status = stop
			}
			str += "<tr class=text-c><td><input type=checkbox value="+e[i]['id']+"' name=></td><td>"+e[i]['id']+"</td><td>"+e[i]['name']+"</td><td>"+e[i]['tel']+"</td><td>"+e[i]['email']+"</td><td>"+e[i]['role_name']+"</td><td>"+e[i]['create_time']+"</td>"+status
			status = ''
		}
		$("#dataviwe").html(str)
	})
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		var url = ajaxUrl("updateAdmin")
		var data = {id:id,action:'is_open',is_open:0}
		$.post(url,data,function(e){
			console.log(e)
			if(e.code==200){
				$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,'+id+')" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
				$(obj).remove();
				layer.msg('已停用!',{icon: 5,time:1000});
			}else{
				layer.msg(e.msg);
			}
		}) 
	});
}
/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		var url = ajaxUrl("updateAdmin")
		var data = { id:id,action:'is_open',is_open:1}
		$.post(url,data,function(e){
			console.log(e)
			if(e.code==200){
				$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,'+id+')" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
				$(obj).remove();
				layer.msg('已启用!', {icon: 6,time:1000});
			}else{
				layer.msg(e.msg);
			}
		})
	});
}
</script>

</body>
</html>