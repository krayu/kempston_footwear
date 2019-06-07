<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:52:21
         compiled from "C:\wamp64_7\www\presta\themes\default-bootstrap\supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116735cfa5e05ca05c6-77933915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30cd85331cbcffac97399170342ed6a9bd34bf9f' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\themes\\default-bootstrap\\supplier.tpl',
      1 => 1473170716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116735cfa5e05ca05c6-77933915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'supplier' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cfa5e0601d4e6_45743732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5e0601d4e6_45743732')) {function content_5cfa5e0601d4e6_45743732($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<h1 class="page-heading product-listing">
		<?php echo smartyTranslate(array('s'=>'List of products by supplier:'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->name, ENT_QUOTES, 'UTF-8', true);?>

	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['supplier']->value->description)) {?>
		<div class="description_box rte">
			<p><?php echo $_smarty_tpl->tpl_vars['supplier']->value->description;?>
</p>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="content_sortPagiBar">
	    	<div class="sortPagiBar clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
	    	<div class="top-pagination-content clearfix">
	        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1), 0);?>

	        </div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


		<div class="content_sortPagiBar">
	        <div class="bottom-pagination-content clearfix">
	        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom','no_follow'=>1), 0);?>

	        </div>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this supplier.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>
