<?php
/* Smarty version 3.1.29, created on 2016-06-10 06:55:03
  from "C:\wamp64\www\Apply_synth\app\templates\ajout_match_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a6447f287c6_77964189',
  'file_dependency' => 
  array (
    '9ade83fd42071c7e0434342f086c3bc30c204a5c' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\ajout_match_championnat.tpl',
      1 => 1465541495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_ajout_match.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575a6447f287c6_77964189 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12397575a6447e01d99_65247432';
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
		  		<form action="index.php?page=generer_aleatoirement_controller.php" method="post">
<!-- 		  			<input type="hidden" name="saison" value=<?php echo $_smarty_tpl->tpl_vars['saison']->value;?>
 />
<input type="hidden" name="pays" value=<?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
  />
<input type="hidden" name="division" value=<?php echo $_smarty_tpl->tpl_vars['division']->value;?>
 /> -->
		  			<input class="btn btn-primary" value="Générer matchs alétatoirement" name="generer_match_aleat"/>
		  			<input class="btn btn primary" value="Générer score" name="generer_score"/>
		  
		 	
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
