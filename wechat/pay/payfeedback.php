<?php

/**
 * payfeedback.php  UTF8
 * @author djks
 * @date 2014-03-11
 * @copyright http://www.weixincaihong.com
 */

require (dirname(__FILE__) . '/../../includes/init.php');

$wxch_pay= $db->getRow("SELECT * FROM `wxch_pay` WHERE `id` = 1");

$appid = $wxch_pay['appid'];

$appsecret = $wxch_pay['appsecret'];

$partnerid  = '1218290401';

$paysignkey = $wxch_pay['paysignkey'];

$partnerkey = $wxch_pay['partnerkey'];


//接收数据示例

//新增投诉
$newTpl = "<xml>
            <OpenId><![CDATA[111222]]></OpenId>
            <AppId><![CDATA[wwwwb4f85f3a797777]]></AppId>
            <TimeStamp> 1369743511</TimeStamp>
            <MsgType><![CDATA[request]]></MsgType>
            <FeedBackId><![CDATA[5883726847655944563]]></FeedBackId>
            <TransId><![CDATA[10123312412321435345]]></TransId>
            <Reason><![CDATA[商品质量有问题]]></Reason>
            <Solution><![CDATA[补发货给我]]></Solution>
            <ExtInfo><![CDATA[明天六点前联系我 18610847266]]></ExtInfo>
            <AppSignature><![CDATA[bafe07f060f22dcda0bfdb4b5ff756f973aecffa]]></AppSignature>
            <SignMethod><![CDATA[sha1]]></ SignMethod >
            </xml>";


//处用户确认处理完毕投诉
$confirmTpl = "<xml>
                <OpenId><![CDATA[111222]]></OpenId>
                <AppId><![CDATA[wwwwb4f85f3a797777]]></AppId>
                <TimeStamp> 1369743511</TimeStamp>
                <MsgType><![CDATA[confirm/reject]]></MsgType>
                <FeedBackId><![CDATA[5883726847655944563]]></FeedBackId>
                <Reason><![CDATA[商品质量有问题]]></Reason>
                <AppSignature><![CDATA[bafe07f060f22dcda0bfdb4b5ff756f973aecffa]]> </AppSignature>
                <SignMethod><![CDATA[sha1]]></ SignMethod >
                </xml>";

$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);

$updatefeedback = 'https://api.weixin.qq.com/payfeedback/update?access_token=xxxxx&openid=XXXX&fee
dbackid=xxxx';