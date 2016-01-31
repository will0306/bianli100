<style>
#cateList {position:absolute; margin-left: -5px; padding-top:5px; top:81px; width:230px; height:440px; background:url(themes/bianli100/images/bg_cate_list.gif) repeat-x; z-index:400;}
	#cateList dl {border-bottom:1px dotted #e5e5e5; margin:0 5px; padding:2px 0 2px 8px; overflow:auto;}
	#cateList dl.last {border-bottom:0;}
	#cateList dl.hover {border:2px solid #9cc813; border-right:0; padding:0px 2px 1px 2px; padding-left:6px;}
	#cateList dt {padding-top: 15px; padding-bottom: 15px;}
	#cateList dt a {font-family:"微软雅黑", "宋体"; padding-left:70px; font-size:14px; font-weight:bold; color:#333;}
	#cateList dt a:hover {text-decoration:none; color:#0091c6;}
	#cateList .sub {display:none; position:absolute; z-index:557; top:0; left:216px; overflow:auto; width:300px; background:#fff; border:2px solid #9cc813;}
	#cateList .sub li {float:left; margin:0; border-right:1px solid #eee; border-bottom:1px solid #eee;}
	#cateList .sub li a {display:block; width:99px; /*padding-top:70px;*/ height:49px; line-height:49px; text-align:center; font-size:14px; font-family:"微软雅黑";}
	#cateList .sub li a:hover {color:#fff; background:#0091c6; text-decoration:none;}
	#cateList .sub li a.active {color:#fff; background:#f90;}
	#cateList .white {display:none; z-index:558; position:absolute; width:2px; left:218px; background:#fff;}
</style>
<div id="bodier" class="block clearfix">
<div id="cateList">
	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
    <dl>
        <dt><a href="<?php echo $this->_var['cat']['url']; ?>" <?php if ($this->_var['cat']['id'] == $this->_var['category']): ?>class="active"<?php endif; ?>><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
        
        <?php if ($this->_var['cat']['cat_id']): ?>
        <div class="sub">
        	<ul>
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                <li>
                <strong><a href="<?php echo $this->_var['child']['url']; ?>" <?php if ($this->_var['child']['id'] == $this->_var['category']): ?>class="active"<?php endif; ?>><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></strong>
                	<div class="box">
                    <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                        <a href="<?php echo $this->_var['childer']['url']; ?>" <?php if ($this->_var['childer']['id'] == $this->_var['category']): ?>class="active"<?php endif; ?>><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="white"></div>
        <?php endif; ?>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>