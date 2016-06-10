<?php
/* Smarty version 3.1.29, created on 2016-06-10 11:02:35
  from "C:\wamp\www\Appli_Synthese\app\templates\ajout_match_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a822b1432e9_21708496',
  'file_dependency' => 
  array (
    '39c38fb9cdc8415dd39ad4aac1e327da006a7f38' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\ajout_match_championnat.tpl',
      1 => 1465549221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_ajout_match.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575a822b1432e9_21708496 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11616575a822b0ad6e1_00984198';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_ajout_match.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Ajout d'un match de championnat"), 0, false);
?>


<!-- <?php echo $_smarty_tpl->tpl_vars['saisons']->value[0];?>
 -->

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Ajouter des Match</h3>
		  	</div>

		  	<div class="form-group">
		  		<form action="" method="post">

		  			<input type="submit" class="btn btn-primary" value="Générer matchs alétatoirement" name="generer_match_aleat"/>
		  			<input type="submit" class="btn btn-primary" value="Générer score" name="generer_score"/>
		  			<input type="submit" class="btn btn-primary" value="Afficher Calendrier" name="afficher_calendrier"/>
		  			<input type="submit" class="btn btn-primary" value="Afficher classement" name="afficher_classement"/>
		  		</form>
		 	
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
