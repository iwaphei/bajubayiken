<?php /* Smarty version Smarty-3.1.19, created on 2016-03-28 15:47:39
         compiled from "C:\xampp\htdocs\bajubayiken\modules\bankwire\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1543956f8efab2d6eb0-91908096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c8c405877dca22ced4ca6e97659b71d9dcf0b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\modules\\bankwire\\views\\templates\\hook\\infos.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1543956f8efab2d6eb0-91908096',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56f8efab44e865_98023989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f8efab44e865_98023989')) {function content_56f8efab44e865_98023989($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
