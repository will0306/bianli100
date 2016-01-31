 <?php
 include_once('themes/' . $GLOBALS['_CFG']['template'].'/init.php');
?><script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-1.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-1.4.2.min.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/json.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.SuperSlide.js"></script>
<SCRIPT src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/left_goodslist.js"></script>


 <script type="text/javascript">
  var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="header">

        
    	<div class="wrapper">
        
               <div class="left f_l">
               
                      <div class="nav">
               
                             <ul>
               
                                <li><a href="index.php" ><?php echo $this->_var['lang']['home']; ?></a></li>
                                    
                                <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
              
                                <li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> ><?php echo $this->_var['nav']['name']; ?> </a></li>
                
                                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      
                            </ul>
                      
                      </div>
                      
                      <div class="cate">
                      
                             <div class="cateTitle f_l">
                             
                                    <a href="#"><img src="themes/bianli100/images/cate_title.gif" width="150" height="36"></a>
                             
                             </div>
                             
                             <div class="search f_l">
                             
                                     <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
             alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
                             
                                    <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()">
                                    
                                            <div class="title">搜索商品</div>
                                    
                                            <div class="keywords"><input name="keywords" id="keyword" value="请输入关键词" class="textfield" type="text" onclick="this.value=''"></div>
                                            
                                            <div class="submint f_l"><button type="submit" name="imageField"  class="submit"></button></div>
                                            
                                    </form>
                                    
                                    
                             
                             </div>
                             
                             
                      
                      </div>		     
               
               </div>
       
               <div class="center f_l">
               
                      <h1 id="logo" title="便利100首页">
                      
                             <a href="index.php">
                             
                                  <img src="themes/bianli100/images/bg_logo.jpg">
                             
                             </a>
                      
                      </h1>
               
               </div>
               
               <div class="right f_l">
               
                      <div class="usermenu">
               
                            <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>   
        
                            <div id="ECS_MEMBERZONE">
                            
                                   <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       		 
                            </div>
               
                      </div>
                      
                     
                      
                      <div id="headerFloat" class="">
						                     
                             <div class="cart" id="cart">
                             
                                     <form id="formCart" name="formCart" method="post" action="flow.php">
                                     
	                                        <ul class="cart_list">
    
                                                  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
                                                  
                                                  <div id="ECS_CARTINFO" class="buy_car" onMouseOver="this.className='buy_car buy_car_on'" onMouseOut="this.className='buy_car'">
                                                  
                                                         <a href="flow.php"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>
                                                         
                                                  </div> 
    
			                                </ul>
            
                                     </form>
                             
                             </div>
							 	  <div id="shopInfo">
						<a href="javascript:void(0);">
							<div class="stat">配送时段<?php echo $this->_var['shop_yysj']; ?></div>
						</a>
						</div>
                        
                      </div>
                      
                    
                    
                    <script type="text/javascript">

$(window).scroll(function(){ 
	var h = $(window).scrollTop();
	if(h > 30)
	{
		
		if($.browser.version == "6.0")
		{
			$("#headerFloat").css({position:"absolute",top:h})
		}
		else
		{
			$("#headerFloat").css({position:"fixed",top:0})
		}
	}
	else
	{
		$("#headerFloat").css({position:"relative",top:13})
	}
	
}); 
</script>
                      
                      
        
               </div>
        
        </div>
        
        
        
        
</div>



 


    
    
    