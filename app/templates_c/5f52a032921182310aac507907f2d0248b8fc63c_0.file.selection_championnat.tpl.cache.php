<?php
/* Smarty version 3.1.29, created on 2016-06-09 11:35:06
  from "C:\wamp64\www\Apply_synth\app\templates\selection_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5759546a75ca07_06529954',
  'file_dependency' => 
  array (
    '5f52a032921182310aac507907f2d0248b8fc63c' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\selection_championnat.tpl',
      1 => 1465472103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_ajout_match.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5759546a75ca07_06529954 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '164975759546a618bd9_45993392';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_ajout_match.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Sélection d'un de championnat"), 0, false);
?>


<!-- <?php echo $_smarty_tpl->tpl_vars['saisons']->value[0];?>
 -->

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Selection d'un championnat</h3>
		  	</div>
		  
		 	<div class="panel-body">
		 			<form  action="index.php?page=ajout_match_championnat" method="post" class="form-horizontal" role="form">
					  <div class="form-group">
					  	<label for="saison" class="col-sm-2 control-label"> Saison </label>
					  		<div class="col-sm-10">
								  <select class="form-control" name="saison" id="saison">
								   <?php
$_from = $_smarty_tpl->tpl_vars['saisons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_saison_0_saved_item = isset($_smarty_tpl->tpl_vars['saison']) ? $_smarty_tpl->tpl_vars['saison'] : false;
$_smarty_tpl->tpl_vars['saison'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['saison']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['saison']->value) {
$_smarty_tpl->tpl_vars['saison']->_loop = true;
$__foreach_saison_0_saved_local_item = $_smarty_tpl->tpl_vars['saison'];
?>
									 <option value="<?php echo $_smarty_tpl->tpl_vars['saison']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['saison']->value['libelle'];?>
</option>
									 <?php
$_smarty_tpl->tpl_vars['saison'] = $__foreach_saison_0_saved_local_item;
}
if ($__foreach_saison_0_saved_item) {
$_smarty_tpl->tpl_vars['saison'] = $__foreach_saison_0_saved_item;
}
?>
								  </select>
							</div>
					  </div>

					   <div class="form-group">
					  	<label for="pays" class="col-sm-2 control-label"> Pays </label>
					  		<div class="col-sm-10">
								  <select class="form-control" name="pays" id="pays">
									  <?php
$_from = $_smarty_tpl->tpl_vars['pays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_un_pays_1_saved_item = isset($_smarty_tpl->tpl_vars['un_pays']) ? $_smarty_tpl->tpl_vars['un_pays'] : false;
$_smarty_tpl->tpl_vars['un_pays'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['un_pays']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['un_pays']->value) {
$_smarty_tpl->tpl_vars['un_pays']->_loop = true;
$__foreach_un_pays_1_saved_local_item = $_smarty_tpl->tpl_vars['un_pays'];
?>
									 <option value="<?php echo $_smarty_tpl->tpl_vars['un_pays']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['un_pays']->value['libelle'];?>
</option>
									 <?php
$_smarty_tpl->tpl_vars['un_pays'] = $__foreach_un_pays_1_saved_local_item;
}
if ($__foreach_un_pays_1_saved_item) {
$_smarty_tpl->tpl_vars['un_pays'] = $__foreach_un_pays_1_saved_item;
}
?>
								  </select>
							</div>
					 	</div>					  

					  <div class="form-group">
					  	<label for="division" class="col-sm-2 control-label"> Division</label>
					  		<div class="col-sm-10">
								  <select class="form-control" name="division" id="division">
									 <?php
$_from = $_smarty_tpl->tpl_vars['divisions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_division_2_saved_item = isset($_smarty_tpl->tpl_vars['division']) ? $_smarty_tpl->tpl_vars['division'] : false;
$_smarty_tpl->tpl_vars['division'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['division']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['division']->value) {
$_smarty_tpl->tpl_vars['division']->_loop = true;
$__foreach_division_2_saved_local_item = $_smarty_tpl->tpl_vars['division'];
?>
									 <option value="<?php echo $_smarty_tpl->tpl_vars['division']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['division']->value['libelle'];?>
</option>
									 <?php
$_smarty_tpl->tpl_vars['division'] = $__foreach_division_2_saved_local_item;
}
if ($__foreach_division_2_saved_item) {
$_smarty_tpl->tpl_vars['division'] = $__foreach_division_2_saved_item;
}
?>
								  </select>
							</div>
					  </div>
						
						<div class="form-group">
						    <!-- <div class="col-sm-offset-1 col-sm-10"> -->

						    <div class="">
						      <input class="btn btn-primary sign_up" type="submit" value="Selectionner" name="selection"/>
						     </div>
		 			   </div>
			    	</form>
					<hr/>
					
					<a href="index.php" type="submit" class="btn btn-default">Go back to the Main page </a>

		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
