<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 12:26:50
         compiled from "C:\xampp\htdocs\prestashop\massive-vapor\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42715603cfea983cf4-59114439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c72fa12406783b1a8954a9f11d944cb18cc422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\massive-vapor\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1436321600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42715603cfea983cf4-59114439',
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
  'unifunc' => 'content_5603cfea995bd8_41981990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603cfea995bd8_41981990')) {function content_5603cfea995bd8_41981990($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
