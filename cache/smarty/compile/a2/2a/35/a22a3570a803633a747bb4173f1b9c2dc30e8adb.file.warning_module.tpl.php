<?php /* Smarty version Smarty-3.1.19, created on 2016-02-25 07:47:48
         compiled from "C:\xampp\htdocs\bajubayiken\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1029656cea394712970-13668386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22a3570a803633a747bb4173f1b9c2dc30e8adb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029656cea394712970-13668386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56cea39471d062_49740422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cea39471d062_49740422')) {function content_56cea39471d062_49740422($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
