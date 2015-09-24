<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 12:27:03
         compiled from "C:\xampp\htdocs\prestashop\massive-vapor\admin\themes\default\template\helpers\tree\tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150045603cff7bb6fa9-64859192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ebb6ce84d9887f59cb92b2fc37548fc55fc6ecc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\massive-vapor\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1436321600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150045603cff7bb6fa9-64859192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5603cff7bded43_75874132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603cff7bded43_75874132')) {function content_5603cff7bded43_75874132($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
