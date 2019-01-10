$(function(){
	// 已发布未接单
    	    $("#table2 .yfb").siblings().empty();
		    var str=""
	$.get("../xiangmu1/api/yifabu.php",{},function(data){
		    if(data!=null){
		    	for (var n=0;n<data.length;n++) {
				var str=str+"<tr class='TR'><td><h6>"+data[n]["type"]+"</h6><p>"+data[n].content+"</p></td></tr>";

			};
        	$("#table2").append(str);
		    }
			
	},"json");
	// 发布已接单
	$.ajax({
		type:"get",
		dataType:"json",
		url:"../xiangmu1/api/yijiedan.php",
		data:{},
		success:function (data) {
			console.log(data)
			if(data!=null){
				  for (var n=0;n<data.length;n++) {
                var str=str+"" +
					"<tr class='TR'>" +
					"<td>" +
					"<h6>"+data[n]["type"]+"</h6>" +
					"<p>"+data[n].content+"</p>" +
					"<p>"+"接单人："+data[n].jname+"</p>" +
					"<p>"+"电话：<span class='phone' style='color:blue'>"+data[n].jphone+"</span></p>" +
					"</td>" +
					"</tr>";
					

            };
            $("#table2").append(str);
            $("span").css("textDecoration",'underline')
            
            $("span").click(function(){
            	        var phone=$(this).html()
            	        alert(phone)
						window.location.href="tel://"+phone
					})

			}
          
            
        }
	})
	//已帮助
		    var str1=""
	$.get("../xiangmu1/api/yiwancheng.php",{},function(data){
		if(data!=null){
			for (var n=0;n<data.length;n++) {
				str1=str1+"<tr class='TR1'><td><h6>"+data[n]['type']+"</h6><p>"+data[n].content+"</p><p>发布人："+data[n]["fname"]+"</p><p>电话：<span style='color:blue'>"+data[n]["fphone"]+"</span></p></td></tr>";
			};
			$("#table1").append(str1);
			  $("span").css("textDecoration",'underline')
            
            $("span").click(function(){
            	        var phone=$(this).html()
						window.location.href="tel://"+phone
					})
        	// $("#table2").append(str1);
	},"json");
		}
			

	// $(".TR").click(function(){
	// 	var t=$(this).children().children().eq(2).html();
	// 	$.get("../xiangmu1/api/fabuliebiao.php",{id:t},function(data){ },"json");
	// 	window.location.href="index10.html";
	// });
	// $(".TR1").click(function(){
	// 	var t1=$(this).children().children().eq(2).html();
	// 	$.get("../xiangmu1/api/chenggongliebiao.php",{id:t1},function(data){ },"json");
	// 	window.location.href="index9.html";
	// 	})

})
