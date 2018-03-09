/**
 * 公用js
 */
//生成分页标签-----------------------------------------------------------------------------------------------
function getPagenation(dataNum){
	$(".pagination").remove();
	var num = parseInt(dataNum/10);
	if(dataNum%10 > 0){
		++num;
	}
	var pageNation = '<ul class="pagination"><li><a href="#"  num="pageUp">&laquo;</a></li>';
	for(var i=1;i<=num;i++){
		if(i==1){
			pageNation += '<li class="active"><a href="#" num="'+i+'">'+i+'</a></li>';
		}else{
			pageNation += '<li><a href="#" num="'+i+'">'+i+'</a></li>';
		}
	}
	pageNation += '<li><a href="#" num="pageDown">&raquo;</a></li></ul>';
	$("body").append(pageNation);
	$(".pagination").find("a").on('click',function(){
		if($(this).attr("num") == "pageUp"){
			if($(".pagination .active").find("a").attr("num") != 1){
				$(".pagination .active").prev().addClass("active");
				$(".pagination .active").eq(1).removeClass("active");
			}else{
				$($(".pagination").find("a")[1]).click();
			}
		}else if($(this).attr("num") == "pageDown"){
			if($(".pagination .active").find("a").attr("num") != num){
				$(".pagination .active").next().addClass("active");
				$(".pagination .active").first().removeClass("active");
			}else{
				$(".pagination").find("a").last().prev().click();
			}
		}else{
			$(".pagination .active").removeClass("active");
			$(this).parent().addClass("active");
		}
		initTable($(".pagination .active").find("a").first().attr("num"));
	});
}
//获得浏览器可用高度------------------------------------------------------------------------------------------
function getBrowserHeight(){
    return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;
}