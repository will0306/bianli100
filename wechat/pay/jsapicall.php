<?php
include_once("WxPayHelper.php");


$commonUtil = new CommonUtil();
$wxPayHelper = new WxPayHelper();

$user_ip=$_SERVER["REMOTE_ADDR"];

$notify_failed_url = "http://www.inink.cn/mobile/index.php";

$notify_url = "http://www.inink.cn/mobile/user.php";

$out_trade_no = $commonUtil->create_noncestr();

$wx_goods_name = '';

$wxPayHelper->setParameter("bank_type", "WX");
$wxPayHelper->setParameter("body", $wx_goods_name);
$wxPayHelper->setParameter("partner", "1218290401");
$wxPayHelper->setParameter("out_trade_no", $out_trade_no);
$wxPayHelper->setParameter("total_fee", "1");
$wxPayHelper->setParameter("fee_type", "1");
$wxPayHelper->setParameter("notify_url", $notify_url);
$wxPayHelper->setParameter("spbill_create_ip", $user_ip);
$wxPayHelper->setParameter("input_charset", "UTF-8");





?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<META content="IE=7.0000" http-equiv="X-UA-Compatible">
<TITLE>微信支付测试</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META name=viewport 
content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<META name=apple-themes-web-app-capable content=yes>
<META name=apple-themes-web-app-status-bar-style content=black>
<META name=format-detection content=telephone=no>
</HEAD>
<BODY>
    goods:test23
<script language="javascript">
function wxch_pay()
{
	WeixinJSBridge.invoke('getBrandWCPayRequest',<?php echo $wxPayHelper->create_biz_package(); ?>,function(res){
	WeixinJSBridge.log(res.err_msg);

        var pay_msg_arr = res.err_msg.split(':');
        var pay_msg = pay_msg_arr[1];
        if(pay_msg == 'ok')
        {
           alert('支付成功');  
//           window.location.href="<?php echo $notify_url; ?>"
        }
        if(pay_msg == 'cancel')
        {
           alert('取消支付');  
//           window.location.href="<?php echo $notify_failed_url; ?>"
        }
        
        if(pay_msg == 'fail')
        {
           alert('失败');  
//           window.location.href="<?php echo $notify_failed_url; ?>"
        }
        
	});
}
</script>
<button type="button" onclick="wxch_pay()">wx pay test</button>
</BODY>
</HTML>
