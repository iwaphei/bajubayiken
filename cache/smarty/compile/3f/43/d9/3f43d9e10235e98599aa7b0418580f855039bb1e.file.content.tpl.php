<?php /* Smarty version Smarty-3.1.19, created on 2016-03-17 10:41:49
         compiled from "C:\xampp\htdocs\bajubayiken\admin123\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2571056ea277d617062-99440556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f43d9e10235e98599aa7b0418580f855039bb1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\admin123\\themes\\default\\template\\content.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2571056ea277d617062-99440556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ea277d66ced0_04055901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ea277d66ced0_04055901')) {function content_56ea277d66ced0_04055901($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
