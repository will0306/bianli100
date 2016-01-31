<?php if ($this->_var['promotion_goods']): ?>

<div class="index_cate_block f_l">

       <div class="block_head">
       
             <img src="themes/bianli100/images/you_need.gif" width="115" height="36" />
      
       </div>
    
       <div class="index_cate_list">
       
              <ul>
    
                    <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
                    
                    <li class="goodsItem">
                   
            	         <div class="block_body" onMouseOver="this.style.backgroundColor='#f1f1f1'" onMouseOut="this.style.backgroundColor='#ffffff'">
                         
                                <div class="good_link">
                                
                                      <a onclick="flyToCart(this);"  href="javascript:addToCart(<?php echo $this->_var['goods']['id']; ?>);" id="fd">
                                       
                                          <img src="<?php echo $this->_var['goods']['thumb']; ?>" class="thumb flyobj" border="0" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  />
                                          
                                          <div class="addtobasket"></div> 
                                                             
                                      </a>
        
                                </div>
          
                                <div>
                                
                                      <h4 class="name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></h4>
                                      
                                      <div class="price">
                                      
                                             <?php echo $this->_var['goods']['promote_price']; ?>
                                     
                                      </div>
          
                                </div>
           
                                
                
                         </div> 
          
                    </li>  
           
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         
              </ul>

       </div>
       
</div>   
    
<?php endif; ?>

<div class="col_2 f_l">
    	<ul class="hot_goods_icons">
        	<li><a href="#" class="g_battery" title="电池"></a></li>
            <li><a href="#" class="g_umbrella" title="雨伞雨衣"></a></li>
            <li><a href="#" class="g_paper" title="纸巾"></a></li>
            <li><a href="#" class="g_lamp" title="节能灯"></a></li>
            <li><a href="#" class="g_candle" title="蜡烛"></a></li>
            <li><a href="#" class="g_lighter" title="打火机"></a></li>
            <li><a href="#" class="g_powerstrip" title="插线板"></a></li>
            <li><a href="#" class="g_glue" title="胶水502"></a></li>
            <li><a href="#" class="g_bandaid" title="创可贴"></a></li>
            <li><a href="#" class="g_condom" title="安全套"></a></li>
            <li><a href="#" class="g_sanitarytowel" title="卫生巾"></a></li>
        </ul>
    </div>