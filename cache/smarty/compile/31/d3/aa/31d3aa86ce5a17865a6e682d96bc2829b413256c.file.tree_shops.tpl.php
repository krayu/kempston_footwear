<?php /* Smarty version Smarty-3.1.19, created on 2019-06-07 12:51:48
         compiled from "C:\wamp64_7\www\presta\admin\themes\default\template\helpers\tree\tree_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90385cfa5de454fe82-97753538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31d3aa86ce5a17865a6e682d96bc2829b413256c' => 
    array (
      0 => 'C:\\wamp64_7\\www\\presta\\admin\\themes\\default\\template\\helpers\\tree\\tree_shops.tpl',
      1 => 1473170712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90385cfa5de454fe82-97753538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
    'selected_shops' => 0,
    'imploded_selected_shops' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cfa5de48e9e02_01921975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfa5de48e9e02_01921975')) {function content_5cfa5de48e9e02_01921975($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<script type="text/javascript">
	function checkAllAssociatedShops($tree)
	{
		$tree.find(":input[type=checkbox]").each(
			function()
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
			}
		);
	}

	function uncheckAllAssociatedShops($tree)
	{
		$tree.find(":input[type=checkbox]").each(
			function()
			{
				$(this).prop("checked", false);
				$(this).parent().removeClass("tree-selected");
			}
		);
	}

	$(document).ready(function () {
		$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").tree("expandAll");
		$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find(":input[type=checkbox]").click(
			function()
			{
				if($(this).is(':checked'))
				{
					$(this).parent().addClass("tree-selected");
					$(this).parent().parent().find("ul").find(":input[type=checkbox]").each(
						function()
						{
							$(this).prop("checked", true);
							$(this).parent().addClass("tree-selected");
						}
					);
				}
				else
				{
					$(this).parent().removeClass("tree-selected");
					$(this).parent().parent().find("ul").find(":input[type=checkbox]").each(
						function()
						{
							$(this).prop("checked", false);
							$(this).parent().removeClass("tree-selected");
						}
					);
				}
			}
		);

		<?php if (isset($_smarty_tpl->tpl_vars['selected_shops']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['imploded_selected_shops'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_shops']->value), null, 0);?>
			var selected_shops = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_shops']->value;?>
");

			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find(".tree-item :input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_shops) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		<?php }?>
	});
</script><?php }} ?>
