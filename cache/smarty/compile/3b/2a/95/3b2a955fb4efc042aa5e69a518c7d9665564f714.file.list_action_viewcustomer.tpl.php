<?php /* Smarty version Smarty-3.1.19, created on 2016-03-17 10:52:28
         compiled from "C:\xampp\htdocs\bajubayiken\modules\blocknewsletter\views\templates\admin\list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2726756ea29fcd7b1b3-61890441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2a955fb4efc042aa5e69a518c7d9665564f714' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\modules\\blocknewsletter\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2726756ea29fcd7b1b3-61890441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ea29fce31e33_40629481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ea29fce31e33_40629481')) {function content_56ea29fce31e33_40629481($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
