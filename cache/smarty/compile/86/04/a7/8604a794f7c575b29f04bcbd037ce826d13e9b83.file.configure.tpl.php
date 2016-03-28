<?php /* Smarty version Smarty-3.1.19, created on 2016-02-26 13:32:46
         compiled from "C:\xampp\htdocs\bajubayiken\modules\cronjobs\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2767956cff18e8319c9-76065666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8604a794f7c575b29f04bcbd037ce826d13e9b83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bajubayiken\\modules\\cronjobs\\views\\templates\\admin\\configure.tpl',
      1 => 1456387404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2767956cff18e8319c9-76065666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56cff18e8abda7_45391834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cff18e8abda7_45391834')) {function content_56cff18e8abda7_45391834($_smarty_tpl) {?>

<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>'What does this module do?','mod'=>'cronjobs'),$_smarty_tpl);?>
</h3>
	<p>
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
/logo.png" class="pull-left" id="cronjobs-logo" />
		<?php echo smartyTranslate(array('s'=>'Originally, cron is a Unix system tool that provides time-based job scheduling: you can create many cron jobs, which are then run periodically at fixed times, dates, or intervals.','mod'=>'cronjobs'),$_smarty_tpl);?>

		<br/>
		<?php echo smartyTranslate(array('s'=>'This module provides you with a cron-like tool: you can create jobs which will call a given set of secure URLs to your PrestaShop store, thus triggering updates and other automated tasks.','mod'=>'cronjobs'),$_smarty_tpl);?>

	</p>
</div>
<?php }} ?>
