<?php /*%%SmartyHeaderCode:13205603d23811b2f6-77116508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318d4deb20317cb706152eb7ebf98f40543ecba8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\massive-vapor\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1436321600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13205603d23811b2f6-77116508',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5603d238207885_46639966',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603d238207885_46639966')) {function content_5603d238207885_46639966($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
