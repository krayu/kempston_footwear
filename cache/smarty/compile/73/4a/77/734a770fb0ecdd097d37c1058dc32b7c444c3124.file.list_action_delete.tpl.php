<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:50:09
         compiled from "C:\wamp64_7\www\presta\admin\themes\default\template\controllers\attachments\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192905cfa5d81930978-79477257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734a770fb0ecdd097d37c1058dc32b7c444c3124' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\admin\\themes\\default\\template\\controllers\\attachments\\helpers\\list\\list_action_delete.tpl',
      1 => 1473170712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192905cfa5d81930978-79477257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'id_attachment' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cfa5d819f7d47_05811402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5d819f7d47_05811402')) {function content_5cfa5d819f7d47_05811402($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)])) {?>if (attachments.confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)];?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};<?php } else { ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
