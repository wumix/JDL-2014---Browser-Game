<?php /* Smarty version Smarty-3.1.18, created on 2014-08-28 10:55:50
         compiled from "layout\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125753feed97e77348-32724315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b70dbc199a12a5ff891f9268b3d1df71518c0bd4' => 
    array (
      0 => 'layout\\templates\\sidebar.tpl',
      1 => 1409216142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125753feed97e77348-32724315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53feed97f2ae71_05523333',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53feed97f2ae71_05523333')) {function content_53feed97f2ae71_05523333($_smarty_tpl) {?><div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php">Home</a><li>
      <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      <?php } else { ?>
        <li><a href="logout.php">Logout</a></li>
      <?php }?>
    </ul>
  </div>
</div><?php }} ?>
