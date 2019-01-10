/**
 * Created by Administrator on 2017/7/15.
 */
$(function () {
    var name=/^[\u4e00-\u9fa5]{0,}$/
    var phone=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/
    $("#fh").click(function () {
        if($("#name").val()==""||$("#pass").val()==""||$("#xi").val()==""||$("#phone").val()==""||$("#img").val()==""){
            alert("请填写信息")
        }else if(!name.test($("#name").val())){
            alert("请输入有效姓名")
        }else if(!phone.test($("#phone").val())){
            alert("手机号码有误")
        }else {
            // alert("提交成功")
            $("#fh").attr("type","submit")
        }
    })
})