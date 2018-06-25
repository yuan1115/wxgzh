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
    	公众号列表    
    </title>
</head>
<body>
	 
	 
	
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 公众号管理 <span class="c-gray en">&gt;</span> 公众号列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<!-- <div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="" id="" placeholder=" 公众号名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜公众号</button>
		</div> -->
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><!-- <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> --> <a class="btn btn-primary radius" onclick="product_add('添加公众号','Product_product-add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加公众号</a></span><!--  <span class="r">共有数据：<strong>54</strong> 条</span> --> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead class="th"></thead>
				<tbody class="tb"></tbody>
			</table>
		</div>
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


	<!--请在下方写此页面业务相关的脚本-->
	<script type="text/javascript" src="/Public/Admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<!-- 	<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>  -->
	<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
	<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
	<script type="text/javascript">
		$(function(){
			var data = ["ID","账号","appid","appSecret","消息加密密钥","tonken"]
			$(".th").html(addTh(data))

			var other = '<td class="td-manag"><a style="text-decoration:none" class="ml-5" onClick=product_add("公众号编辑","Product_product-edit?id={id}") href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_del(this,{id})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>'
			var orderable = ['id','name','appid','appsecret','msgkey','tonken']

			var url = ajaxUrl("getwxAccount") 
			$.get(url,function(data,status){
				console.log(data)
		        var param = {orderdata:orderable,data:data.data,other:other} 
				$(".tb").html(addTb(param))
		    });
		})
		
	
		$('.table-sort').dataTable({
			"aaSorting": [[ 1, "desc" ]],//默认第几个排序
			"bStateSave": true,//状态保存
			"aoColumnDefs": [
			  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
			]
		});
		/*公众号-添加*/
		function product_add(title,url){
			var index = layer.open({
				type: 2,
				title: title,
				content: route(url)
			});
			layer.full(index);
		}
	</script>

</body>
</html>