/**
 * Created by Administrator on 2017/7/17.
 */
$(function () {
    $("#tj").click(function () {
        if($("#uname").val()==""||$("#uphone").val()==""||$("#xuanze").val()==""||$("#miaoshu").val()==""||$("#price").val()==""||$("#pic").val()==""){
            alert("请输入内容")
        }else{
            $("#tj").attr('type',"submit")
        }
    })
      $("input").blur(function(){
    	if($(this).val()!=""){
    		$(this).css("background","#ddd1dd")
    	}
    })
      $("textarea").blur(function(){
    	if($(this).val()!=""){
    		$(this).css("background","#ddd1dd")
    	}
    })
})