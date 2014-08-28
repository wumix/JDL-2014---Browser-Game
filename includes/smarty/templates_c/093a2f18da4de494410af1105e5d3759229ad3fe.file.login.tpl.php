<?php /* Smarty version Smarty-3.1.18, created on 2014-08-28 10:51:34
         compiled from "layout\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449953feed96e05b19-47801256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093a2f18da4de494410af1105e5d3759229ad3fe' => 
    array (
      0 => 'layout\\templates\\login.tpl',
      1 => 1399455484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449953feed96e05b19-47801256',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53feed973ebd54_36187177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53feed973ebd54_36187177')) {function content_53feed973ebd54_36187177($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form method="post" class="form-inline text-center">
  <input type="text" name="username" placeholder="Username" class="form-control" autofocus="autofocus" required />
  <input type="password" name="password" placeholder="Pass" class="form-control" required />
  <input type="submit" value="Login" name="login" class="btn btn-default"/>
</form>
<br/>
<div class="panel panel-default">
  <div class="panel-body">
    Login right now without registering Username: Cardinal Password: Cardinal.
  </div>
</div>
<br/>
<div class="panel panel-default">
  <div class="panel-body">
    This is a simple demo for the <a href="http://makingbrowsergames.com/basic-browser-based-game-development-tutorial/">Beginner tutorial of how to make your own browser based game</a> in HTML, PHP and MySQL.
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
