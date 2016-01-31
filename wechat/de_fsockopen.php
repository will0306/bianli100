<?php
echo 'start:'.microtime();
echo '<br>';


$host = 'www.baidu.com';

if($_GET['act'] == 'ip')
{
    $host = '180.97.33.67';
}


$url = '/gaoji/preferences.html';

$fp = fsockopen("$host", 80, $errno, $errstr, 10);

if (!$fp) {
    echo "$errstr $errno <br />\n";
}
else
{
    $out = "GET  $url HTTP/1.1\r\n";
    $out .= "Host: $host\r\n";
    $out .= "Connection: Close\r\n\r\n";
    fwrite($fp, $out);
    fclose($fp);
}

//for($i;$i<=1000;$i++)
//{
//    $fp = fsockopen("$host", 80, $errno, $errstr, 10);
//
//    if (!$fp) {
//        echo "$errstr $errno <br />\n";
//    }
//    else
//    {
//        $out = "GET  $url HTTP/1.1\r\n";
//        $out .= "Host: $host\r\n";
//        $out .= "Connection: Close\r\n\r\n";
//        fwrite($fp, $out);
//        fclose($fp);
//    }
//}


echo 'end:'.microtime();
echo '<br>';

echo 'url:'.$host;