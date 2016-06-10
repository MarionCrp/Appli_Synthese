<?php
/* Smarty version 3.1.29, created on 2016-06-10 11:26:15
  from "C:\wamp\www\Appli_Synthese\app\templates\matchs_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a87b7376a64_95928180',
  'file_dependency' => 
  array (
    'b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\matchs_championnat.tpl',
      1 => 1465550772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575a87b7376a64_95928180 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17893575a87b7252597_93402838';
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
					    <td></td>
					    <td></td>
					    <td><?php echo $_smarty_tpl->tpl_vars['match']->value['buts_equipe_visiteur'];?>
</td>
					    <td><?php echo $_smarty_tpl->tpl_vars['match']->value['buts_equipe_domicile'];?>
</td>
					    <td></td>
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
	</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>



<p>TEST</p><?php }
}
