<?php if ($this->_var['user_info']): ?>
<font style=" font-size:12px;">
 <a href="http://wpa.qq.com/msgrd?v=3&uin=11111111&site=qq&menu=yes">在线客服</a>

 <a href="user.php?act=logout" class="strong_1"><?php echo $this->_var['lang']['user_logout']; ?></a>
 <a href="user.php?act=order_list">我的订单</a>
<a href="user.php" class="strong_1"><?php echo $this->_var['user_info']['username']; ?>的账户</a>
</font>
<?php else: ?>
 
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes">在线客服</a> <a href="user.php?act=register" class="strong_1"> 免费注册</a> <a href="user.php" class="strong_1">会员登录</a>  
<?php endif; ?>
