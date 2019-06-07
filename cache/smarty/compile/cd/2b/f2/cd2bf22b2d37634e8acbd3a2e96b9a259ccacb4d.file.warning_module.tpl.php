<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:50:27
         compiled from "C:\wamp64_7\www\presta\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307755cfa5d93372e93-08928364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2bf22b2d37634e8acbd3a2e96b9a259ccacb4d' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1473170712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307755cfa5d93372e93-08928364',
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
  'unifunc' => 'content_5cfa5d933dc649_87735977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5d933dc649_87735977')) {function content_5cfa5d933dc649_87735977($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
