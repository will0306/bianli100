$(function() {
    var timer,forceStop;
    var wxch_Marquee = function(id){
    try{document.execCommand("BackgroundImageCache", false, true);}catch(e){};
var container = document.getElementById(id),
original = container.getElementsByTagName("dt")[0],
clone = container.getElementsByTagName("dd")[0],
speed = arguments[1] || 10;
clone.innerHTML=original.innerHTML;
var rolling = function(){
    if(container.scrollLeft == clone.offsetLeft){
    container.scrollLeft = 0;
    }else{
    container.scrollLeft++;
    }
}
this.stop = function() {
    clearInterval(timer);
    }
timer = setInterval(rolling,speed);//设置定时器
container.onmouseover=function() {clearInterval(timer)}//鼠标移到marquee上时，清除定时器，停止滚动
container.onmouseout=function() {
    if (forceStop) return;
    timer=setInterval(rolling,speed);
    }//鼠标移开时重设定时器
};

var wxch_stop = function() {
    clearInterval(timer);
    forceStop = true;
    };
var wxch_start = function() {
    forceStop = false;
    wxch_Marquee("banner",20);
    };

wxch_Marquee("banner",20);

var $egg;

$("#banner a").on('click',function() {
    wxch_stop();
    $egg = $(this);
    var offset = $(this).position(),
    $hammer = $("#hammer");
    $hammer.animate({left:(offset.left+30)}, 1000,function(){
    $(this).addClass('hit');
    $("#f").css('left',offset.left).show();
    $egg.find('img').attr('src','images/egg_2.png');
    setTimeout(function() {
    wxch_result.call(window);
    }, 500);
});
});

$("#mask").on('click',function() {
    $(this).hide();
    $("#dialog").hide();
    $egg.find('img').attr('src','images/egg_1.png');
    $("#f").hide();
    $("#hammer").css('left','-74px').removeClass('hit');
    wxch_start();
    });

$("#close").click(function() {
    $("#mask").trigger('click');
    });

function wxch_result () {

    $.getJSON("<?php echo $base_url; ?>wechat/prize_data.php?pid=<?php echo $pid.'&pzfun='.$prize['pzfun'].'&wxid='.$wxid; ?>",function(data)
    {
        $("#mask").show();
        if (data.msg === 1) {
            $("#content").html(data.prize);
            $.post("<?php echo $base_url; ?>wechat/api.php?act=egg",{pid:data.pid,nickname:'<?php echo $prize[nickname] ?>',yn:data.yn,pzfun:data.pzfun,paid:data.paid,prize_value:data.prize_value,prize:data.prize,wxid:'<?php echo $wxid ?>'});
        $("#dialog").attr("class",'yes').show();
        setTimeout(function() {
            window.location.href = '<?php echo $go_contact; ?>';
            },3000);
        }else if(data.msg === 0){
            $("#content").html(data.prize);
            $.post("<?php echo $base_url; ?>wechat/api.php?act=egg",{pid:data.pid,nickname:'<?php echo $prize[nickname] ?>',yn:data.yn,pzfun:data.pzfun,paid:data.paid,prize_value:data.prize_value,prize:data.prize,wxid:'<?php echo $wxid ?>'});
        $("#dialog").attr("class",'no').show();
        }else if(data.msg == 2){
            $("#content").html(data.prize);
            $("#dialog").attr("class",'no').show();
            }
        $(".num").text(data.num);
        });



}
});