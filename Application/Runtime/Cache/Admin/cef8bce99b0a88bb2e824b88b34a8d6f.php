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
    	添加公众号    
    </title>
</head>
<body>
	 
	 
	
<link href="/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<div class="page-container">
	<form action="javascript:;" method="post" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公众号名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>原始id：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="wxid" name="wxid">
			</div>
		</div>
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="" class="select">
					<option value="0">一级分类</option>
					<option value="1">一级分类</option>
					<option value="11">├二级分类</option>
					<option value="12">├二级分类</option>
					<option value="13">├二级分类</option>
				</select>
				</span> </div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>appid:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="appid" name="appid">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>appsecret</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="appsecret" id="appsecret" placeholder="" value="" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>token</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="tonken" id="tonken" placeholder="" value="" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>消息加密密钥</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="msgkey" id="msgkey" placeholder="" value="" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">头像</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<div id="filePicker">上传图片</div>
					<!-- <button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button> -->
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>二维码</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList1" class="uploader-list"></div>
					<div id="filePicker1">上传图片</div>
					<!-- <button id="btn-star1" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button> -->
				</div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="onsubmitbnt(this)" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
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
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	var url = ajaxUrl("uploader")

	$list = $("#fileList"),
	$btn = $("#btn-star"),
	state = "pending",
	uploader;
	uploader1;
	var uploader = WebUploader.create({
		auto: true,
		swf: "/Public/Admin/lib/webuploader/0.1.5/Uploader.swf",
		// 文件接收服务端。
		server: "/Api/AdminApi/uploader",
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker',
	
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
		var $li = $( '#'+file.id ),
		$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function(file,res) {
		if(res.img_url!=''){
			$( '#'+file.id ).append("<input type='hidden' name='headerimg' id='headerimg' value='"+res.img_url+"'/>")
		}
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
    });
    $list1 = $("#fileList1")
	$btn1 = $("#btn-star1")
	var uploader1 = WebUploader.create({
		auto: true,
		swf: "/Public/Admin/lib/webuploader/0.1.5/Uploader.swf",
	
		// 文件接收服务端。
		server: '/Api/AdminApi/uploader',
	
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker1',
	
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		}
	});
	uploader1.on( 'fileQueued', function( file ) {
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list1.append( $li );
	
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader1.makeThumb( file, function( error, src ) {
			if ( error ) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}
	
			$img.attr( 'src', src );
		}, 100, 100 );
	});
	// 文件上传过程中创建进度条实时显示。
	uploader1.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
		$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader1.on( 'uploadSuccess', function( file ,res ) {
		if(res.img_url!=''){
			$( '#'+file.id ).append("<input type='hidden' name='code' id='code' value='"+res.img_url+"'/>")
		}
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
	});
	
	// 文件上传失败，显示上传出错。
	uploader1.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});
	
	// 完成上传完了，成功或者失败，先删除进度条。
	uploader1.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader1.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn1.text('暂停上传');
        } else {
            $btn1.text('开始上传');
        }
    });
});
function onsubmitbnt(obj){
	$("#form-article-add").validate({
		rules:{
			name:{
				required:true,
			},
			wxid:{
				required:true,
			},
			appid:{
				required:true,
			},
			appsecret:{
				required:true,
			},
			msgkey:{
				required:true,
			},
			tonken:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: ajaxUrl("addwxAccount"),
				success: function(data){
					if(data.code==1){
						layer.msg('添加成功!',{icon:1,time:1000});
					}else{
						layer.msg('添加失败!',{icon:2,time:1000});
					}
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!',{icon:1,time:1000});
				}
			});
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	})
}
</script>

</body>
</html>