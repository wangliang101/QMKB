/**
 * Created by Administrator on 2017/7/17.
 */
$(function () {
    $.ajax({
        type: "get",
        dataType: "json",
        url: "api/php9.php",
        data: {},
        success: function (data) {
            $("#in1").val(data.name)
            $("#phone").val(data.phone)
            $("#miao").val(data.content)
            $("#price").val(data.money)
            $("#sel").find("option[value = '" + data.type + "']").attr("selected", "selected");
            $("#fid").val(data.zid)
        },
        error: function () {
            alert("失败")
        }
    })
    // 当点击我要接单的时候
    $("#bt1").click(function () {
        $.ajax({
            type:"get",
            dataType:"json",
            url:"api/jiedan.php",
            data:{
              
            },
            success:function (data) {
                console.log(data)
                if(data==1){
                    window.location.href="index6.html"
                }else{
                    alert("接单失败")
                }
            }
        })
    })
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        autoplay: 1000,
        loop: true
    })
})