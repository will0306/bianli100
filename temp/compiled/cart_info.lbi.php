

<div class="balance">

       <div class="toggle_1" >

              <div class="total" ><?php echo $this->_var['str']; ?></div>
      
       </div>
                    
</div>
<div class="car_show" >
<?php if ($this->_var['goods']): ?>
<ul class="car_ul">
 <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods_0_22572700_1428256520');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods_0_22572700_1428256520']):
        $this->_foreach['no']['iteration']++;
?>
 <li>
 <div class="content">
       
              <a  class="b2"  href="<?php echo $this->_var['goods_0_22572700_1428256520']['url']; ?>"><?php echo $this->_var['goods_0_22572700_1428256520']['short_name']; ?></a> 
       
       </div>

 <div class="count">
	<strong style=" color:#0091c6; float:left; width:65px"><?php echo $this->_var['goods_0_22572700_1428256520']['goods_price']; ?></strong>
    
    	<a href="javascript:change_number(<?php echo $this->_var['key']; ?>,0);" class="button_minus_1"></a> 
		<input class="list_number rec_id_<?php echo $this->_var['goods_0_22572700_1428256520']['rec_id']; ?>" type="text" data="<?php echo $this->_var['goods_0_22572700_1428256520']['rec_id']; ?>" value="<?php echo $this->_var['goods_0_22572700_1428256520']['goods_number']; ?>" onKeyUp="changeNumber(<?php echo $this->_var['key']; ?>);" onpaste="return false" ondragenter="return false" style=" float:left; width:24px; text-align:center; font-size:12px; line-height:19px; height:19px; overflow:hidden" />
		<a href="javascript:change_number(<?php echo $this->_var['key']; ?>,1);" class="button_plus_1"></a>
		
	

 </div>
 <div class="delete"><a class="del" href="javascript:" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_22572700_1428256520']['rec_id']; ?>)">删除</a></div>

 </li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>

  <div class="cart_total"><?php echo $this->_var['str']; ?>商品  合计：<span style=" color:#0091c6; font-family:"微软雅黑","黑体""><?php echo $this->_var['cart_list_amount']; ?></span></div>
  <div class="balance">
 
        <div class="shop"><br><strong></strong></div><a href="flow.php" onclick="emptyCart();" id="to_balance"></a>
        
 </div>

<?php else: ?>
<a href="#" style="color:#333;z-index:99999;float:left; padding:20px 0 0 25px">购物车中还没有商品，赶紧选购吧！</a>
<?php endif; ?>
</div>
<div class="clear"></div>
<script type="text/javascript">
//删除购物车项
function deleteCartGoods(rec_id){
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

//接收返回的信息
function deleteCartGoodsResponse(res){
  if (res.error){
    alert(res.err_msg);
  }else{
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}

//编辑购物车数量
function changeNumber(index){
	var rec_id = jQuery('.list_number').eq(index).attr('data');
	var number = jQuery('.list_number').eq(index).val();
	number = Number(number.replace(/\D|^0/g,''));
	number = (number < 1) ? 1:number;
	jQuery(this).val(number);
	updateCartItem(rec_id,number);
}

//控制加减 by mike
function change_number(index, flag){
	var rec_id = jQuery('.list_number').eq(index).attr('data');
	var number = 1;
	if(flag > 0){
		number = parseInt(jQuery('.list_number').eq(index).val()) + 1;
		jQuery('.list_number').eq(index).val(number);
	}else{
		number = parseInt(jQuery('.list_number').eq(index).val()) - 1;
		number = (number < 1) ? 1:number;
		jQuery('.list_number').eq(index).val(number);
	}
	updateCartItem(rec_id,number);
}

//更新 by mike
function updateCartItem(rec_id,number){
	Ajax.call('update_cart_goods.php', 'id='+rec_id+'&number='+number, updateCartItemResponse, 'POST', 'JSON');
}

//接收返回的信息 by mike
function updateCartItemResponse(res){
  if (res.error){
	jQuery(".rec_id_"+res.rec_id).val(res.stock);
	updateCartItem(res.rec_id,res.stock);
  }else{
	document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>

