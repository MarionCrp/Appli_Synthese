<?php
/* Smarty version 3.1.29, created on 2016-06-10 15:28:14
  from "C:\wamp\www\Appli_Synthese\app\templates\matchs_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ac06edeba30_88027722',
  'file_dependency' => 
  array (
    'b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\matchs_championnat.tpl',
      1 => 1465565288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575ac06edeba30_88027722 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32191575ac06ed703c2_05395138';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">
	<h1> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </h1>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['liste_matchs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_match_0_saved_item = isset($_smarty_tpl->tpl_vars['match']) ? $_smarty_tpl->tpl_vars['match'] : false;
$_smarty_tpl->tpl_vars['match'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['match']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['match']->value) {
$_smarty_tpl->tpl_vars['match']->_loop = true;
$__foreach_match_0_saved_local_item = $_smarty_tpl->tpl_vars['match'];
?>
	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['match']->value['date_match_championnat'];?>
</h3>
		  	</div>
		  
		 	<div class="panel-body">
		 		<table class="table table-striped" style="border:0;">
		 			<tr>
					    <td> Match aller </td>
					    <td></td>
					    <td><?php echo $_smarty_tpl->tpl_vars['match']->value['equipe_visiteur'];?>
</td>
					    <td><?php echo $_smarty_tpl->tpl_vars['match']->value['equipe_domicile'];?>
</td>
					    <td></td>
					</tr>
					<tr>
						<form action="" method="post">
							<td></td>
							<td></td>
							<td><input type="numeric" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['buts_equipe_visiteur'];?>
" name="but_visiteur" /></td>
							<td><input type="numeric" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['buts_equipe_domicile'];?>
" name="but_domicile" /></td>
							<td><input type="hidden" name="id_match_championnat" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['id_match_championnat'];?>
" /><input type="submit" name="afficher_calendrier" value="modifier" /></td>
						</form>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td><?php echo $_smarty_tpl->tpl_vars['match']->value['arbitre1'];?>
, <?php echo $_smarty_tpl->tpl_vars['match']->value['arbitre2'];?>
, <?php echo $_smarty_tpl->tpl_vars['match']->value['arbitre3'];?>
, <?php echo $_smarty_tpl->tpl_vars['match']->value['arbitre4'];?>
, <?php echo $_smarty_tpl->tpl_vars['match']->value['remplacant'];?>
</td>
					    <td></td>
					    <td></td>
					    
					</tr>
				</table>

		 	</div>
		</div>
		<?php
$_smarty_tpl->tpl_vars['match'] = $__foreach_match_0_saved_local_item;
}
if ($__foreach_match_0_saved_item) {
$_smarty_tpl->tpl_vars['match'] = $__foreach_match_0_saved_item;
}
?>
		<form action="" method="post" style="text-align:center;">
		<ul class="pagination">
			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<li><input type="submit" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="afficher_calendrier"/></li>
			<?php }
}
?>

		</ul>
	</form>
	</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
