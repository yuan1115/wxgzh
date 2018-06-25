//返回url
function ajaxUrl(url,param=''){
	$addparam = '';
	if(param.length>0){
		$addparam = "&"+param;
	}
	return "/Api/AdminApi/"+url+"?adminID=1&keys=abc123"+$addparam;
}
function route(url){
	return "/Admin/"+url
}
//发送请求
function ajaxData(param,callback){
	var index = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
	$.ajax({
		type: param.method?param.method:'get',
		url:  param.url,
		dataType: 'json',
		data: param.data?param.data:'',
		success: function(res){
			if(res.code==200){
				callback(res.res)
			}else{
				layer.msg(res.msg);
			}
		}
	})
	layer.close(index);
}
//页面层
function layeropen(title,url,type=2){
	layer.open({
		type: type,
		area: ['500px','500px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: title,
		content: "/admin/"+url
	});
}
/*删除*/
function delData(url){
	layer.confirm('确认要删除吗？',function(index){
		ajaxData({url : url},function(e){
			// if(){

			// }
		})
	});
}