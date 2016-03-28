<?php /* Smarty version Smarty-3.1.19, created on 2016-03-28 10:36:47
         compiled from "C:\xampp\htdocs\bajubayiken\modules\homecategoriebyid\homecategoriebyid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1612156f8a6cfaa9ea5-76450678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd1efed26a963b1eecc75fd86f4f727d5237e13d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\modules\\homecategoriebyid\\homecategoriebyid.tpl',
      1 => 1459136051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612156f8a6cfaa9ea5-76450678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homecateg' => 0,
    'display_hci' => 0,
    'page_name' => 0,
    'homeby' => 0,
    'link' => 0,
    'categoryLink' => 0,
    'homeproducby' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'nbItemsPerLineMobile' => 0,
    'priceDisplay' => 0,
    'getproductLink' => 0,
    'homeSize' => 0,
    'quick_view' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f8a6cfe590d0_26725855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f8a6cfe590d0_26725855')) {function content_56f8a6cfe590d0_26725855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\bajubayiken\\tools\\smarty\\plugins\\function.math.php';
?><?php if ($_smarty_tpl->tpl_vars['homecateg']->value&&$_smarty_tpl->tpl_vars['display_hci']->value==1) {?>
 
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='product') {?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(3, null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
	<?php }?>
	
  <div id="categorybyid">
				  <?php  $_smarty_tpl->tpl_vars['homeby'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['homeby']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homecateg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['homeby']->key => $_smarty_tpl->tpl_vars['homeby']->value) {
$_smarty_tpl->tpl_vars['homeby']->_loop = true;
?>
				  <?php $_smarty_tpl->tpl_vars['categoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['homeby']->value['id_category'],$_smarty_tpl->tpl_vars['homeby']->value['link_rewrite']), null, 0);?>
				  <h3 class="homcb"><a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['homeby']->value['name'];?>
</a></h3>
				       <div class="categid">				          
		                 <?php if ($_smarty_tpl->tpl_vars['homeby']->value['homeproductbyid']) {?>
						  <div class="block_content_fr">
							<div id="homecateg">
							 <ul class="product_list madalweb">
		                  <?php  $_smarty_tpl->tpl_vars['homeproducby'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['homeproducby']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeby']->value['homeproductbyid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['homeproducby']->key => $_smarty_tpl->tpl_vars['homeproducby']->value) {
$_smarty_tpl->tpl_vars['homeproducby']->_loop = true;
?>
				              <?php $_smarty_tpl->tpl_vars['getproductLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getproductLink($_smarty_tpl->tpl_vars['homeproducby']->value['id_product'],$_smarty_tpl->tpl_vars['homeproducby']->value['link_rewrite']), null, 0);?>
							 <li class="ajax_block_product <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'||$_smarty_tpl->tpl_vars['page_name']->value=='product') {?> col-xs-12 col-sm-4 col-md-3<?php } else { ?> col-xs-12 col-sm-6 col-md-4<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['total'])) {?> last-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?> last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==0) {?> last-item-of-mobile-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeproducby']['total'])) {?> last-mobile-line<?php }?>">
							 
							    <div class="center_block">
							<div class="up-product">
							<div class="product-image-container">
							
							<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
							<?php if ($_smarty_tpl->tpl_vars['homeproducby']->value['on_sale']&&$_smarty_tpl->tpl_vars['homeproducby']->value['show_price']) {?>
				                          <span class="on_sale"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
				                       <?php } elseif (isset($_smarty_tpl->tpl_vars['homeproducby']->value['reduction_price'])&&$_smarty_tpl->tpl_vars['homeproducby']->value['reduction_price']) {?>
				                       
				                          <span class="discount"> <?php if ($_smarty_tpl->tpl_vars['homeproducby']->value['reduction_type']=='percentage') {?>- <?php echo $_smarty_tpl->tpl_vars['homeproducby']->value['reduction_price'];?>
% <?php } else { ?> -<?php echo smarty_function_math(array('equation'=>'(x/y)*z','x'=>$_smarty_tpl->tpl_vars['homeproducby']->value['reduction_price'],'y'=>$_smarty_tpl->tpl_vars['homeproducby']->value['price'],'z'=>100,'format'=>"%.0f"),$_smarty_tpl);?>
% <?php }?></span>
				                      <?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['homeproducby']->value['new'])&&$_smarty_tpl->tpl_vars['homeproducby']->value['new']==1) {?>
							<span class="new-box-homecat">
								<span class="new-label-homecat"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
							</span>
						<?php }?>
									  
				          <a class="product_img_link"	href="<?php echo $_smarty_tpl->tpl_vars['getproductLink']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeproducby']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
							<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['homeproducby']->value['link_rewrite'],$_smarty_tpl->tpl_vars['homeproducby']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['homeproducby']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeproducby']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeproducby']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['homeproducby']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeproducby']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeproducby']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
						</a>			   
				     
						<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
							<a class="quick-view" href="<?php echo $_smarty_tpl->tpl_vars['getproductLink']->value;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['getproductLink']->value;?>
">
								<span><?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
</span>
							</a>
						<?php }?>
					</div>
				  </div>
				     <h5 class="prod_name" itemprop="name">
						<a class="product-name" href="<?php echo $_smarty_tpl->tpl_vars['getproductLink']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeproducby']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['homeproducby']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</h5>
				                    
				        <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['homeproducby']->value['show_price'])&&$_smarty_tpl->tpl_vars['homeproducby']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['homeproducby']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['homeproducby']->value['available_for_order'])))) {?>
					<div itemprop="offers" class="content_price">
						<?php if (isset($_smarty_tpl->tpl_vars['homeproducby']->value['show_price'])&&$_smarty_tpl->tpl_vars['homeproducby']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
							<span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['homeproducby']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['homeproducby']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
					
						<?php }?>
					</div>
					<?php }?>
				  <div class="button-container">
		                                <?php if (isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)&&$_smarty_tpl->tpl_vars['homeproducby']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
									<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['homeproducby']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['homeproducby']->value['id_product']);?>
">
										<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
									</a>
								<?php } else { ?>
									<a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$homeproducby.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['homeproducby']->value['id_product']);?>
">
										<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
									</a>
								<?php }?>						
							<?php } else { ?>
								<span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
								</span>
						<?php }?>
		                             <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['getproductLink']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
">
							<span><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</span>
						</a>
					</div>
							   </div>
							 </li>
							<?php } ?>
							</ul>
							</div>
							</div>	
		                   <?php }?>
						  </div>
						<?php }
if (!$_smarty_tpl->tpl_vars['homeby']->_loop) {
?>
				  	<?php echo smartyTranslate(array('s'=>'No category','mod'=>'Ooooopss, no category'),$_smarty_tpl);?>

				  <?php } ?>
					</div>
			<?php }?>
	<?php }} ?>
