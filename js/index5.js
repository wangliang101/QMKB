/**
 * Created by Administrator on 2017/7/16.
 */
$(function () {
    $("#bt1").click(function () {
        var xuehao=$("#input1").val()
        var pass=$("#input2").val()
        if(xuehao!=""||pass!=""){
            // alert(1)
            $.ajax({
                type:"get",
                dataType:"json",
                url:"../xiangmu1/api/enterUserYZ.php",
                data:{
                    xuehao:xuehao,
                    pass:pass
                },
                success:function (data) {
                    if(data==1){
                        window.location.href="index1.html"
                    }else if(data==-1){
                        alert("信息错误")
                    }else{
                         window.location.href="index1.php"
                    }
                },
                error:function (data) {

                }
            })
        }
    })
})