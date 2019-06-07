<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:50:58
         compiled from "C:\wamp64_7\www\presta\admin\themes\default\template\controllers\request_sql\list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230055cfa5db2573124-74701044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '370f7816f2612dc953dd9c955daffc8b2f2d1947' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1473170712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230055cfa5db2573124-74701044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cfa5db25e45d5_64147773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5db25e45d5_64147773')) {function content_5cfa5db25e45d5_64147773($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
