<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:50:57
         compiled from "C:\wamp64_7\www\presta\themes\default-bootstrap\modules\referralprogram\views\templates\hook\shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97605cfa5db1afcca4-72536233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aee54acdef6aac6a81a0f0f152d30c5c27c2bf6' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1473170714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97605cfa5db1afcca4-72536233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cfa5db1c393a9_66385958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5db1c393a9_66385958')) {function content_5cfa5db1c393a9_66385958($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>
