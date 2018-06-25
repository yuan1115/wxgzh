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
    	首页    
    </title>
</head>
<body>
	
	<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<!-- <ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="layeropen('添加资讯','Article_article-add')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="layeropen('添加资讯','Picture_picture-add')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="layeropen('添加资讯','Product_product-add')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="layeropen('添加用户','User_member-add')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul> -->
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<!-- <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li> -->
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
			<dt><i class="Hui-iconfont">&#xe616;</i> 公众号管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/admin/Product_product-list.html" data-title="公众号管理" href="javascript:void(0)">公众号管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 应用管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/admin/App_app-list.html" data-title="应用管理" href="javascript:void(0)">应用管理</a></li>
				</ul>
			</dd>
		</dl>
	<!-- 	<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="./Product_product-brand" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li>
					<li><a data-href="./Product_product-category" data-title="分类管理" href="javascript:void(0)">分类管理</a></li>
					<li><a data-href="./Product_product-list" data-title="产品管理" href="javascript:void(0)">产品管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="./Comment_feedback-list" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a data-href="./Comment_feedback-list" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="./User_member-list" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<li><a data-href="./User_member-del" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
					<li><a data-href="./User_member-level" data-title="等级管理" href="javascript:;">等级管理</a></li>
					<li><a data-href="./User_member-scoreoperation" data-title="积分管理" href="javascript:;">积分管理</a></li>
					<li><a data-href="./User_member-record-browse" data-title="浏览记录" href="javascript:void(0)">浏览记录</a></li>
					<li><a data-href="./User_member-record-download" data-title="下载记录" href="javascript:void(0)">下载记录</a></li>
					<li><a data-href="./User_member-record-share" data-title="分享记录" href="javascript:void(0)">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="./Admin_admin-role" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a data-href="./Admin_admin-permission" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="./Admin_admin-list" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="./Common_charts-1" data-title="折线图" href="javascript:void(0)">折线图</a></li>
					<li><a data-href="./Common_charts-2" data-title="时间轴折线图" href="javascript:void(0)">时间轴折线图</a></li>
					<li><a data-href="./Common_charts-3" data-title="区域图" href="javascript:void(0)">区域图</a></li>
					<li><a data-href="./Common_charts-4" data-title="柱状图" href="javascript:void(0)">柱状图</a></li>
					<li><a data-href="./Common_charts-5" data-title="饼状图" href="javascript:void(0)">饼状图</a></li>
					<li><a data-href="./Common_charts-6" data-title="3D柱状图" href="javascript:void(0)">3D柱状图</a></li>
					<li><a data-href="./Common_charts-7" data-title="3D饼状图" href="javascript:void(0)">3D饼状图</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="./System_system-base" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
					<li><a data-href="./System_system-category" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
					<li><a data-href="./System_system-data" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>
					<li><a data-href="./System_system-shielding" data-title="屏蔽词" href="javascript:void(0)">屏蔽词</a></li>
					<li><a data-href="./System_system-log" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
				</ul>
			</dd>
		</dl> -->
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
 
		
	<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
	<section class="Hui-article-box">
		<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
			<div class="Hui-tabNav-wp">
				<ul id="min_title_list" class="acrossTab cl">
					<li class="active">
						<span title="我的桌面" data-href="/Admin/Product_product-list.html">我的桌面</span>
						<em></em>
					</li>
				</ul>
			</div>
			<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
		</div>
		<div id="iframe_box" class="Hui-article">
			<div class="show_iframe">
				<div style="display:none" class="loading"></div>
				<iframe scrolling="yes" frameborder="0" src="/Admin/Product_product-list.html"></iframe>
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
<script type="text/javascript" src="/Public/Admin/lib/autoJs.js"></script>
<script>
	function addTh(data){
		var arr = Object.keys(data);
		var len = arr.length;
		var str = '<tr class="text-c"><th width="auto"><input name="" type="checkbox" value="" ></th>'
		for (var i = 0; i < len; i++) {
			if(typeof(data[i])=='string'){
				style = 'style="width:auto"'
				text = data[i]
			}else{
				style = data[i]['style']
				text = data[i]['text']
			}
			str += "<th "+style+">"+text+"</th>"
		}
		return str+'<th width="100">操作</th></tr>'
	}
	/*var param = {
		orderdata : [],    //data顺序
		data : [],　　　　　//获取的数据
		other: 'string',　　//每行的操作项,动态数据用{param},需要替换id是，只需要用{id}
		//每列样式或绑定事件相同
		style:{
			lie : 1,
			style : ''
		}
		//每行样式或绑定事件相同
		style:{
			row : 1,
			style : ''
		}
	}*/
	function addTb(param){
		var str = ''
		var row = 1
		var lie = 1
		var style = ''
		for (var data in param.data){
			if(param.style){
				if(param.style.row>0&&param.style.row == row){
					style = param.style.style
				}
			}
			str += '<tr class="text-c va-m" '+style+'><td width="auto"><input name="" type="checkbox" value="" ></td>'
			for (var i in param.orderdata) {
				if(param.style){
					if(param.style.lie>0&&param.style.lie == lie){
						style = param.style.style
					}
				}
				str += "<td "+style+">"+param['data'][data][param['orderdata'][i]]+"</td>"
				lie++
			}
			var other = param['other'].replace(/{id}/g,param['data'][data]['id']);
			str += other+"</tr>";
			row++
		}
		return str
	}
	function webupload(data={filePicker:'',fileList:'fileList',btn:'btn-star'},callback){
		$list = $("#"+data.fileList)
		$btn = $("#"+data.btn)
		uploader;
		var uploader = WebUploader.create({
			auto: true,
			swf: "/Public/Admin/lib/webuploader/0.1.5/Uploader.swf",
			// 文件接收服务端。
			server: "/Api/AdminApi/uploader",
			// 选择文件的按钮。可选。
			// 内部根据当前运行是创建，可能是input元素，也可能是flash.
			pick: '#'+data.filePicker,
			// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
			resize: false,
			// 只允许选择图片文件。
			accept: {
				title: 'Images',
				extensions: 'gif,jpg,jpeg,bmp,png',
				mimeTypes: 'image/*'
			}
		});
		uploader.on( 'fileQueued', function( file ) {
			var $li = $(
				'<div id="' + file.id + '" class="item">' +
					'<div class="pic-box"><img></div>'+
					'<div class="info">' + file.name + '</div>' +
					'<p class="state">等待上传...</p>'+
				'</div>'
			),
			$img = $li.find('img');
			$list.append( $li );
			// 创建缩略图
			// 如果为非图片文件，可以不用调用此方法。
			// thumbnailWidth x thumbnailHeight 为 100 x 100
			uploader.makeThumb( file, function( error, src ) {
				if ( error ) {
					$img.replaceWith('<span>不能预览</span>');
					return;
				}
				
				$img.attr( 'src', src );
			}, 100, 100 );

		});
		// 文件上传过程中创建进度条实时显示。
		uploader.on( 'uploadProgress', function( file, percentage ) {
			var $li = $( '#'+file.id )
			$percent = $li.find('.progress-box .sr-only')
			// 避免重复创建
			if ( !$percent.length ) {
				$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
			}
			$li.find(".state").text("上传中");
			$percent.css( 'width', percentage * 100 + '%' );
		});
		// 文件上传成功，给item添加成功class, 用样式标记上传成功。
		uploader.on( 'uploadSuccess', function(file,res) {
			callback(res)
			$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
		});
		// 文件上传失败，显示上传出错。
		uploader.on( 'uploadError', function(file,res) {
			$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
		});
		// 完成上传完了，成功或者失败，先删除进度条。
		uploader.on( 'uploadComplete', function( file,res ) {
			$( '#'+file.id ).find('.progress-box').fadeOut();
		});
		uploader.on('all', function (type) {
	        if (type === 'startUpload') {
	            state = 'uploading';
	        } else if (type === 'stopUpload') {
	            state = 'paused';
	        } else if (type === 'uploadFinished') {
	            state = 'done';
	        }
	        if (state === 'uploading') {
	            $btn.text('暂停上传');
	        } else {
	            $btn.text('开始上传');
	        }
	    })
	}
</script>



</body>
</html>