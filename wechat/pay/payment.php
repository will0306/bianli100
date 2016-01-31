<?php

/**
 * callback-ent.php  UTF8
 * @author djks
 * @date 2014-03-11
 * @copyright http://www.weixincaihong.com
 */

function create_wxpay($order_sn,$goods_name)
{
    require_once(ROOT_PATH . 'wechat/pay/WxPayHelper.php');
    $wxPayHelper = new WxPayHelper();

    $user_ip=$_SERVER["REMOTE_ADDR"];


    $notify_url = "http://www.inink.cn/mobile/user.php";

    $out_trade_no = $order_sn;

    $wx_goods_name = $goods_name;
    
    $wxPayHelper->setParameter("bank_type", "WX");
    $wxPayHelper->setParameter("body", $wx_goods_name);
    $wxPayHelper->setParameter("partner", "1218290401");
    $wxPayHelper->setParameter("out_trade_no", $out_trade_no);
    $wxPayHelper->setParameter("total_fee", "1");
    $wxPayHelper->setParameter("fee_type", "1");
    $wxPayHelper->setParameter("notify_url", $notify_url);
    $wxPayHelper->setParameter("spbill_create_ip", $user_ip);
    $wxPayHelper->setParameter("input_charset", "UTF-8");

    $create_wxpay = $wxPayHelper->create_biz_package();
    return $create_wxpay;
}
