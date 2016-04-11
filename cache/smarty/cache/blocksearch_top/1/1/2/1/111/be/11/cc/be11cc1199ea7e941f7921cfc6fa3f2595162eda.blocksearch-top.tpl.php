<?php /*%%SmartyHeaderCode:252156ea293cdf9bc0-79393539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be11cc1199ea7e941f7921cfc6fa3f2595162eda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252156ea293cdf9bc0-79393539',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b4ddce77840_12250173',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b4ddce77840_12250173')) {function content_570b4ddce77840_12250173($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/bajubayiken/id/cari" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cari" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Cari</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
