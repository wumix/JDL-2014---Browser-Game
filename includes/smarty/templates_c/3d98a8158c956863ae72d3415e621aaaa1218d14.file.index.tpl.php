<?php /* Smarty version Smarty-3.1.18, created on 2014-08-28 10:55:17
         compiled from "layout\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1742353feee75d704a1-38386490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d98a8158c956863ae72d3415e621aaaa1218d14' => 
    array (
      0 => 'layout\\templates\\index.tpl',
      1 => 1399455484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1742353feee75d704a1-38386490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53feee765f6579_47145664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53feee765f6579_47145664')) {function content_53feee765f6579_47145664($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("global_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h4>Welcome, <?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
!</h4>
<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-tower"></span> Level <?php echo $_smarty_tpl->tpl_vars['player']->value['level'];?>

  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-star-empty"></span> Experience <?php echo $_smarty_tpl->tpl_vars['player']->value['exp'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['expNext'];?>

    <div class="progress progress-striped active">
      <div class="progress-bar progress-bar-info" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['player']->value['exp']/($_smarty_tpl->tpl_vars['player']->value['expNext']/100);?>
%">
      </div>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-heart"></span> Health <?php echo $_smarty_tpl->tpl_vars['player']->value['health'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['maxHealth'];?>

    <div class="progress progress-striped active">
      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['player']->value['health']/($_smarty_tpl->tpl_vars['player']->value['maxHealth']/100);?>
%">
      </div>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-flash"></span> Energy <?php echo $_smarty_tpl->tpl_vars['player']->value['energy'];?>
/<?php echo $_smarty_tpl->tpl_vars['player']->value['maxEnergy'];?>

    <div class="progress progress-striped active">
      <div class="progress-bar progress-bar-success" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['player']->value['energy']/($_smarty_tpl->tpl_vars['player']->value['maxEnergy']/100);?>
%">
      </div>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-fire"></span> STR <?php echo $_smarty_tpl->tpl_vars['player']->value['str'];?>

  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
   <span class="glyphicon glyphicon-eye-open"></span> DEX <?php echo $_smarty_tpl->tpl_vars['player']->value['dex'];?>

  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-user"></span> INT <?php echo $_smarty_tpl->tpl_vars['player']->value['int'];?>

  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <span class="glyphicon glyphicon-euro"></span> Money <?php echo number_format($_smarty_tpl->tpl_vars['player']->value['money']);?>
 currency
  </div>
</div>

<div class="media">
  <?php if ($_smarty_tpl->tpl_vars['player']->value['pet']) {?>
    <a class="pull-left" href="#">
      <img class="media-object" src="layout/images/items/<?php echo $_smarty_tpl->tpl_vars['player']->value['pet']['image'];?>
">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['player']->value['pet']['name'];?>
</h4>
      <?php echo $_smarty_tpl->tpl_vars['player']->value['pet']['description'];?>

    </div>
  <?php } else { ?>
    <div class="media-body">
      <h4 class="media-heading">No pet :(</h4>
    </div>
  <?php }?>  
</div>

<?php echo $_smarty_tpl->getSubTemplate ("global_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
