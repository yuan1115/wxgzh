<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    
    	
    
    <title>
    	首页    
    </title>
</head>
<body>
	
	<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="layeropen('添加资讯','article-add')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="layeropen('添加资讯','picture-add')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="layeropen('添加资讯','product-add')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="layeropen('添加用户','member-add')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
 
	
	<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_article-list');?>" data-title="资讯管理" href="javascript:void(0)">资讯管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_picture-list');?>" data-title="图片管理" href="javascript:void(0)">图片管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_product-brand');?>" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li>
					<li><a data-href="<?php echo url('admin_product-category');?>" data-title="分类管理" href="javascript:void(0)">分类管理</a></li>
					<li><a data-href="<?php echo url('admin_product-list');?>" data-title="产品管理" href="javascript:void(0)">产品管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_feedback-list');?>" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a data-href="<?php echo url('admin_feedback-list');?>" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_member-list');?>" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<li><a data-href="<?php echo url('admin_member-del');?>" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
					<li><a data-href="<?php echo url('admin_member-level');?>" data-title="等级管理" href="javascript:;">等级管理</a></li>
					<li><a data-href="<?php echo url('admin_member-scoreoperation');?>" data-title="积分管理" href="javascript:;">积分管理</a></li>
					<li><a data-href="<?php echo url('admin_member-record-browse');?>" data-title="浏览记录" href="javascript:void(0)">浏览记录</a></li>
					<li><a data-href="<?php echo url('admin_member-record-download');?>" data-title="下载记录" href="javascript:void(0)">下载记录</a></li>
					<li><a data-href="<?php echo url('admin_member-record-share');?>" data-title="分享记录" href="javascript:void(0)">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_admin-role');?>" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a data-href="<?php echo url('admin_admin-permission');?>" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="<?php echo url('admin_admin-list');?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_charts-1');?>" data-title="折线图" href="javascript:void(0)">折线图</a></li>
					<li><a data-href="<?php echo url('admin_charts-2');?>" data-title="时间轴折线图" href="javascript:void(0)">时间轴折线图</a></li>
					<li><a data-href="<?php echo url('admin_charts-3');?>" data-title="区域图" href="javascript:void(0)">区域图</a></li>
					<li><a data-href="<?php echo url('admin_charts-4');?>" data-title="柱状图" href="javascript:void(0)">柱状图</a></li>
					<li><a data-href="<?php echo url('admin_charts-5');?>" data-title="饼状图" href="javascript:void(0)">饼状图</a></li>
					<li><a data-href="<?php echo url('admin_charts-6');?>" data-title="3D柱状图" href="javascript:void(0)">3D柱状图</a></li>
					<li><a data-href="<?php echo url('admin_charts-7');?>" data-title="3D饼状图" href="javascript:void(0)">3D饼状图</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('admin_system-base');?>" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
					<li><a data-href="<?php echo url('admin_system-category');?>" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
					<li><a data-href="<?php echo url('admin_system-data');?>" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>
					<li><a data-href="<?php echo url('admin_system-shielding');?>" data-title="屏蔽词" href="javascript:void(0)">屏蔽词</a></li>
					<li><a data-href="<?php echo url('admin_system-log');?>" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
 
		
	<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
	<section class="Hui-article-box">
		<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
			<div class="Hui-tabNav-wp">
				<ul id="min_title_list" class="acrossTab cl">
					<li class="active">
						<span title="我的桌面" data-href="<?php echo url('admin_welcome');?>">我的桌面</span>
						<em></em></li>
			</ul>
			</div>
				<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
		</div>
		<div id="iframe_box" class="Hui-article">
			<div class="show_iframe">
				<div style="display:none" class="loading"></div>
				<iframe scrolling="yes" frameborder="0" src="<?php echo url('admin_welcome');?>"></iframe>
		</div>
	</div>
	</section>
	<div class="contextMenu" id="Huiadminmenu">
		<ul>
			<li id="closethis">关闭当前 </li>
			<li id="closeall">关闭全部 </li>
		</ul>
	</div>
 
	
	
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
//弹窗
function layeropen(title,url,type=2){
	layer.open({
		type: type,
		area: ['500px','500px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: title,
		content: "./admin_"+url
	});
}
/*删除*/
function delData(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
</script>


</body>
</html>