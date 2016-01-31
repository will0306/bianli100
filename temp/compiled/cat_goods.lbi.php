
<div class="index_cate_block f_l">

      <div class="block_head">
      
             <a href="<?php echo $this->_var['goods_cat']['url']; ?>" > <img src="themes/bianli100/images/cat/<?php echo $this->_var['goods_cat']['id']; ?>.gif"> </a>
 
      </div>

      <div class="index_cate_list">
      
            <ul>
            
                  <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_17898600_1428256520');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_17898600_1428256520']):
?>
                  
                  <li class="goodsItem">
                  
                       <div class="block_body" onMouseOver="this.style.backgroundColor='#f1f1f1'" onMouseOut="this.style.backgroundColor='#ffffff'">
                       
                             <div class="good_link" >
                             
                                    <a href="javascript:void(<?php echo $this->_var['goods_0_17898600_1428256520']['id']; ?>);" onclick="flyToCart(this);addToCart(<?php echo $this->_var['goods_0_17898600_1428256520']['id']; ?>);" id="fd">
                                    
                                        <img src="<?php echo $this->_var['goods_0_17898600_1428256520']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_17898600_1428256520']['name']); ?>" class="thumb flyobj" >
                                        
                                        <div class="addtobasket"></div>
                                        
                                    </a>

                             </div>

                             <div>
                             
                                   <h4 class="name"><a href="<?php echo $this->_var['goods_0_17898600_1428256520']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_17898600_1428256520']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_17898600_1428256520']['short_name']); ?></a></h4>
                                   
                                   <div class="price">
                                   
                                           <font class="shop_s"><?php echo $this->_var['goods_0_17898600_1428256520']['promote_price']; ?></font>
                                     
                                   </div>

                             </div>

                       </div>

                  </li>

                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>

      </div>

</div>

<div class="col_2 f_l" style=" width:215px">

       <div class="ad_sidebar">
   
			 <div class="bd">
             
				  <ul class="picList">
                
					   <li><?php echo get_adv('flow_1',$GLOBALS['smarty']->_var['goods_cat']['id'])?></li>
					
					   <li><?php echo get_adv('flow_2',$GLOBALS['smarty']->_var['goods_cat']['id'])?></li>

				  </ul>
                  
			</div>
            
            <div class="hd">
				
				<ul></ul>
	
			</div>
        	
       </div>
       
       <script type="text/javascript">
		jQuery(".ad_sidebar").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
		</script>
        
        <div class="home_rank">
        
               <h3>本周最受欢迎商品</h3>
               
               <ul>
               
                   <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_17983300_1428256520');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_17983300_1428256520']):
        $this->_foreach['no']['iteration']++;
?>
                   
                   <?php if ($this->_foreach['no']['iteration'] < 6): ?>
                   
                   <li>
                   <span class="price"><?php echo $this->_var['goods_0_17983300_1428256520']['promote_price']; ?></span>
                          <a href="<?php echo $this->_var['goods_0_17983300_1428256520']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_17983300_1428256520']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_17983300_1428256520']['short_name']); ?></a>
                          
                          
             
                   </li>
                   
                   <?php endif; ?>
                   
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>    
               
               </ul>
        
        </div>	
        
</div>







 