<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:51:28
         compiled from "C:\wamp64_7\www\presta\admin\themes\default\template\helpers\list\list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75785cfa5dd0c60af7-98199609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd9c6389289cb17ebdef6187ba5a89305af1f96' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\admin\\themes\\default\\template\\helpers\\list\\list_action_removestock.tpl',
      1 => 1473170712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75785cfa5dd0c60af7-98199609',
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
  'unifunc' => 'content_5cfa5dd0d760e1_97803201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5dd0d760e1_97803201')) {function content_5cfa5dd0d760e1_97803201($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
