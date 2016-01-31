<?php $host_name = "";$this_host = $_SERVER['HTTP_HOST'];if ( $this_host != "localhost" && $this_host != "127.0.0.1.1" && strrev( substr( strrev( $this_host ), 0, strlen( $host_name ) ) ) != $host_name ){exit( );} ?>

<script>/*打开菜单*/
cateTreeList();
categoryShow();
/* *
* 清除购物车购买商品数量
*/
function delet(rec_id)
{
var formBuy      = document.forms['formCart'];
var domname='goods_number_'+rec_id;
var attr = getSelectedAttributes(document.forms['formCart']);
var qty = parseInt(document.getElementById(domname).innerHTML)==0;
Ajax.call('flow.php', 'step=price&rec_id=' + rec_id + '&number=' + qty, changecartPriceResponse, 'GET', 'JSON');
}			
/* *
* 增加购物车购买商品数量
*/
function addcartnum(rec_id)
{
var attr = getSelectedAttributes(document.forms['formCart']);
var domname='goods_number_'+rec_id;
var qty = parseInt(document.getElementById(domname).innerHTML)+1;
Ajax.call('flow.php', 'step=price&rec_id=' + rec_id + '&number=' + qty, changecartPriceResponse, 'GET', 'JSON');
}
/* *
* 减少购买商品数量
*/
function lesscartnum(rec_id)
{
var formBuy      = document.forms['formCart'];
var domname='goods_number_'+rec_id;
var attr = getSelectedAttributes(document.forms['formCart']);
var qty = parseInt(document.getElementById(domname).innerHTML)-1;
Ajax.call('flow.php', 'step=price&rec_id=' + rec_id + '&number=' + qty, changecartPriceResponse, 'GET', 'JSON');
}
/**
* 接收返回的信息
*/
function changecartPriceResponse(res)
{
if (res.err_msg.length > 0 )
{
alert(res.err_msg);
}
else
{
var domnum='goods_number_'+res.rec_id;
if(res.qty <= 0){
document.getElementById('CART_INFO').innerHTML = res.content1;
}else{
document.getElementById(domnum).innerHTML = res.qty;
}
document.getElementById('ECS_CARTINFO').innerHTML = res.result;
}
}
</script>

<div class="blank"></div>

<div class="footer_label">
       
              <img src="themes/bianli100/images/footer_label.gif" width="1200" height="60" />
       
       </div>

<div id="footer" >

       <div class="box">

              <div class="wrapper">

              <?php if ($this->_var['helps']): ?>

              <div id="footer_nav" class="f_l" style=" margin-bottom:0">


<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['num'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['num']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['num']['iteration']++;
?>
<ul id="footer_list_menu">
<div class="h52"><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></div>
<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
<li>• <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</div>

              <?php endif; ?>
              
              <div id="footer_weibo">
    	<dl style="border-bottom:1px dotted #ddd;">
            <dt><img src="themes/bianli100/images/icon_weibo.gif"></dt>
            <dd>
            	<a href="http://e.weibo.com/ECMBT?ref=http%3A%2F%2Fe.weibo.com%2FECMBT%2Fprofile" target="_blank"><h5>方便100微博</h5>
            	<p>+ 加关注</p></a>
            </dd>
        </dl>
        <dl style=" margin-bottom:0; padding-bottom:0">
        	<dt><img src="themes/bianli100/images/icon_weixin.gif"></dt>
            <dd>
            	<h5>手机版</h5>
                <p>i0990.com</p>
            </dd>
        </dl>
    </div>
    
              <div id="footer_logo"><img src="themes/bianli100/images/logo_footer.gif" alt="方便一百"></div>

              
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div class="certifi">
<ul>
<li>友情链接: </li>
<?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
<li><a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['txt_links']): ?>
<?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
<li><a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
</ul>
</div>
<?php endif; ?>


              <div class="blank"></div>

             
              
              
              <div class="block">
              
                    
                     <div class="bNavList clearfix">
                     
                    <?php if ($this->_var['navigator_list']['bottom']): ?>
                    <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_20587900_1428256520');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_20587900_1428256520']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
                    <a href="<?php echo $this->_var['nav_0_20587900_1428256520']['url']; ?>" <?php if ($this->_var['nav_0_20587900_1428256520']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_20587900_1428256520']['name']; ?></a>
                    <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
                    |
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endif; ?>

                     </div>

              </div>

              

              <div class="blank"></div>

              

              <div class="text">
              
                     <?php echo $this->_var['copyright']; ?>
                     <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?><br />

                     <?php if ($this->_var['service_phone']): ?>
                     Tel: <?php echo $this->_var['service_phone']; ?>
                     <?php endif; ?>

                     <?php if ($this->_var['service_email']): ?>
                     E-mail: <?php echo $this->_var['service_email']; ?><br />
                     <?php endif; ?>

                     <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
                     <?php if ($this->_var['im']): ?>
                     <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
                     <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                     <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
                     <?php if ($this->_var['im']): ?>
                     <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
                     <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                     <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
                     <?php if ($this->_var['im']): ?>
                     <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/bianli100/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
                     <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                     <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
                     <?php if ($this->_var['im']): ?>
                     <img src="themes/bianli100/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
                     <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                     <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
                     <?php if ($this->_var['im']): ?>
                     <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
                     <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />

                     <?php if ($this->_var['icp_number']): ?>
                     <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
                     <?php endif; ?>

                    <div align="center" style="padding-bottom:15px;"><a 
href="http://www.zuimoban.com/" target="_blank" title="最模板">最模板</a><a 
href=" http://www.ecshoptemplate.com/" target="_blank"><img 
src="themes/bianli100/images/zuimoban.gif" alt="ecshop模板"></a></div>


              </div>

             

       </div>
       
       </div>

</div>