<?php

function get_qrafe($db,$ecs,$u_id='')
{
    //$wx_config,$post['u_id'],$post['r_host']


    $data['wx_config'] = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
    foreach($data as $k=>$v)
    {
        if(is_array($v))
        {
            $data[$k] = json_encode($v);
        }
    }
    $data['u_id'] = $u_id;

    $base_url = $db->getOne("SELECT `cfg_value` FROM `wxch_cfg` WHERE `cfg_name` = 'baseurl'");
    $arr = explode("/",$base_url);
    $data['r_host'] = $arr[2];
    $wx_data['wx_user'] = get_wxuser($db,$u_id,$ecs);
    $wx_data['wx_user']['headimgurl'] = get_wxheadimgurl($wx_data['wx_user']['headimgurl'],132);
    $data['headimgurl'] = $wx_data['wx_user']['headimgurl'];
    $url = 'http://api.weixincaihong.com/index.php/wch/qr/qr_scene';

    if($_GET['debug'] == 1)
    {
        $url = 'http://api.weixincaihong.com/index.php/wch/qr/qr_scene/post';
    }

    $res = curl_grab_page($url,$data);
    if($_GET['debug'] == 2)
    {
        print_r($res);exit;
    }

    $json = json_decode($res);

    $wx_data['qr_img'] = $json->qr_img;


    return $wx_data;
}



function access_token($db)
{
    $ret = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
    $appid = $ret['appid'];  //AppId 18
    $appsecret = $ret['appsecret'];//AppSecret 32
    $access_token = $ret['access_token'];
    $dateline = $ret['dateline'];
    $time = time();

//    echo ($time - $dateline);exit;
    if(($time - $dateline) >= 7200)
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
        if(function_exists(curl_exec)){
            $ret_json = curl_get_contents($url); //access_token 150
        }else{
            echo '您的服务器不支持:curl_exec函数';
            exit;
        }

        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
    }
    elseif(empty($access_token))
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

        if(function_exists(curl_exec)){
            $ret_json = curl_get_contents($url); //access_token 150
        }else{
            echo '您的服务器不支持:curl_exec函数';
            exit;
        }
        $ret = json_decode($ret_json);
        if($ret->access_token){
            $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        }
    }

}

function new_access_token($db)
{
    $time = time();
    $ret = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
    $appid = $ret['appid'];  //AppId 18
    $appsecret = $ret['appsecret'];//AppSecret 32
    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

    if(function_exists(curl_exec)){
        $ret_json = curl_get_contents($url); //access_token 150
    }else{
        echo '您的服务器不支持:curl_exec函数';
        exit;
    }
    $ret = json_decode($ret_json);
//        $db->query("UPDATE `wxch_config` SET `access_token` = '',`dateline` = '$time' WHERE `id` =1;");
    if($ret->access_token){
        $db->query("UPDATE `wxch_config` SET `access_token` = '$ret->access_token',`dateline` = '$time' WHERE `id` =1;");
        return $ret->access_token;
    }
    else
    {
        return false;
    }
}

function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    // curl_setopt($ch, CURLOPT_MAXREDIRS, 200);
    curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);
    curl_setopt($ch, CURLOPT_REFERER,_REFERER_);
    @curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}

function curl_grab_page($url,$data,$proxy='',$proxystatus='',$ref_url='')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if ($proxystatus == 'true') {
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    if(!empty($ref_url)){
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_REFERER, $ref_url);
    }
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 200);
    // curl_redir_exec($ch);
    @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($ch); // execute the curl command
    ob_end_clean();
    curl_close ($ch);
    unset($ch);
}

//get wx user
function get_wxuser($db,$user_id,$ecs)
{
    $sql = "SELECT `wxid` FROM ".$ecs->table('users')." WHERE `user_id` = '$user_id'";
    $wxid = $db->getOne($sql);
    $query = "SELECT * FROM wxch_user WHERE `wxid` = '$wxid'";
    $res = $db->getRow($query);
    if($res)
    {
        return $res;
    }
    else
    {
        return false;
    }
}


/*
 * type 0、46、64、96、132
 */
function get_wxheadimgurl($headimgurl,$type = '46')
{

    if(!empty($headimgurl)){
        $headimgurl = substr($headimgurl,0,-1);
        $headimgurl = $headimgurl.$type;
    }

    return $headimgurl;
}