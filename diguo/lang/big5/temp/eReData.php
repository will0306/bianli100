<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>��_�ƾ�</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>��m�G<a href="ReData.php">��_�ƾ�</a></td>
  </tr>
</table>
<form name="ebakredata" method="post" action="phomebak.php" onsubmit="return confirm('�T�{�n��_�H');">
  <table width="70%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
    <tr> 
      <td width="34%" height="25"><strong><font color="#FFFFFF">��_�ƾ�</font></strong> 
        <input name="phome" type="hidden" id="phome" value="ReData"></td>
      <td width="66%" height="25">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">��_�ƾڷ��ؿ��G</td>
      <td height="25"> 
        <?=$bakpath?>
        / 
        <input name="mypath" type="text" id="mypath" value="<?=$mypath?>"> <input type="button" name="Submit2" value="��ܥؿ�" onclick="javascript:window.open('ChangePath.php?change=1','','width=750,height=500,scrollbars=yes');"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" valign="top">�n�ɤJ���ƾڮw�G</td>
      <td height="25"> <select name="add[mydbname]" size="23" id="add[mydbname]" style="width=260">
          <?=$db?>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">��_�ﶵ�G</td>
      <td height="25">�C�ի�_���j�G 
        <input name="add[waitbaktime]" type="text" id="add[waitbaktime]" value="0" size="2">
        ��</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="2"> <div align="left"> 
          <input type="submit" name="Submit" value="�}�l��_">
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>