<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 06:36:36
         compiled from "C:\xampp\htdocs\prestashop\massive-vapor\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212015603d23488c337-89308746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82fc268ea187417245aed58e83963bd5c6e9e584' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\massive-vapor\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1436321618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212015603d23488c337-89308746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5603d2348a4598_88108188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603d2348a4598_88108188')) {function content_5603d2348a4598_88108188($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
