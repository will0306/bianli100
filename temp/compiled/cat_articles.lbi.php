 
<ul class="text_list_1">

       <h3>便利100动态</h3>
          
       <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
              
       <li><a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
              
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
</ul>
 