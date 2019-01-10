$(function(){
	function change(){
	$.get("http://localhost/xiangmu11/api/huoqufabu.php",{},function(data){
				$(".name").val("data[0].name");
				$(".tell").val("data[0].tell");
				$(".text").val("data[0].miaoshu");
				$(".price").val("data[0].price");
				 N=data[0].id
				//换图片入境
				},"json");
});
   
})