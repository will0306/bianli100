<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>

<body style=" position:relative">

<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->fetch('library/category_tree.lbi'); ?>
<div id="bodier" class="block clearfix">
	
       
    
       <div id="sidebar">
       
               
 
             
       </div>
       
       <div id="homeCover">
       
              <div class="homeCover_left f_l">
              
                       <?php echo $this->fetch('library/index_ad.lbi'); ?>
                       
                       <div class="survey f_l">
                       
                              
<?php $this->assign('ads_id','35'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                       
                       </div>
                       
                       <div class="homeCover_ad">
                       
                              <ul>
                              
                                     <li>
                                     
                                           
<?php $this->assign('ads_id','36'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                                     
                                     </li>
                                     
                                     <li>
                                     
                                           
<?php $this->assign('ads_id','37'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                                     
                                     </li>
                                     
                                     <li>
                                     
                                           
<?php $this->assign('ads_id','38'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                                     
                                     </li>
                                     
                                     <li>
                                     
                                           
<?php $this->assign('ads_id','39'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                                     
                                     </li>
                                     
                                     <li>
                                     
                                           
<?php $this->assign('ads_id','40'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                                     
                                     </li>
                                     
                                     <li>
                                     
                                           
<?php $this->assign('ads_id','41'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                                     
                                     </li>
                              
                              </ul>
                       
                       </div>
              
              </div> 
              
              <div class="homeCover_right f_l">
              
                     <div class="box">
                            
                            <div id="homeNotice">
							<ul class="text_list_1">

							<h3>本店公告</h3>
                            <?php echo $this->_var['shop_notice']; ?>
						</ul>
                            
                            </div>
                            
                            <div id="homeNewArticle">
                            
                                   
<?php $this->assign('articles',$this->_var['articles_8']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_8']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

    
                            </div>
                     
                     </div> 
                       
              </div>
       
       </div>

</div>

<div class="block clearfix">
       
         <div class="promotion_goods"><?php echo $this->fetch('library/recommend_promotion.lbi'); ?></div>
 
         <div class="blank"></div>
               
        <div class="best_goods"><?php echo $this->fetch('library/recommend_best.lbi'); ?></div>
               
        <div class="blank"></div>
        
        <div class="tese_food">
        
                
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

        
        </div>
        
        <div class="blank"></div>
        
        <div class="drink_food">
        
                
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

        
        </div>
        
        <div class="blank"></div>
        
        <div class="life_use">
        
                
<?php $this->assign('cat_goods',$this->_var['cat_goods_8']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_8']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

        
        </div>

</div>
<?php echo $this->fetch('library/help.lbi'); ?>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

  <script>
//商品飞到购物篮中
function flyToCart(obj){
	var obj = $(obj).find(".flyobj");

	var target_top = $("#cart").offset().top;
	var target_left = $("#cart").offset().left+40;
	var position = obj.offset();
	var width = obj.width();
	var height = obj.height();
	var clone = obj.clone().insertAfter("#footer");//复制一个到飞行容器中
	//new_clone.;
	clone.css({position:"absolute","z-index":"99999",top:position.top,left:position.left,width:width,height:height}).animate(
		{top:target_top+70,left:target_left,width:"50px",height:"50px"},//飞到购物篮图标下方
		400,
		function(){clone.animate(
			{top:target_top+10,left:target_left+20,width:"10px",height:"10px"},//飞进购物篮
			200,
			function(){
				clone.fadeOut().remove();//消失并清空内容
			}
		)}
	);
	//购物篮内商品列表的滚动条到底部
	var cart_list = $(".cart_list");
	cart_list.scrollTop(100000);
}
</script>
</body>

</html>
