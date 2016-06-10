<?php
/* Smarty version 3.1.29, created on 2016-06-10 10:46:38
  from "C:\wamp\www\Appli_Synthese\app\templates\matchs_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a7e6e5e48d6_09267906',
  'file_dependency' => 
  array (
    'b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\matchs_championnat.tpl',
      1 => 1465548396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575a7e6e5e48d6_09267906 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20521575a7e6e535533_58879887';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">#message</h3>
		  	</div>
		  
		 	<div class="panel-body">
		 		<table style="border:0;">
		 			<tr>
		 				<td>	</td>
		 				<td>	</td>
		 				<td>date</td>
		 				<td>	</td>
		 				<td>	</td>
		 			</tr>
		 			<tr>
					    <td> Match aller 		.</td>
					    <td></td>
					    <td>Equipe 1</td>
					    <td>Equipe 2</td>
					    <td></td>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td>buts1</td>
					    <td>buts2</td>
					    <td></td>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td>Arbritre, arbitre, arbitre, arbitre, arbitre</td>
					    <td></td>
					    <td></td>
					    
					</tr>
				</table>

		 	</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>



<p>TEST</p><?php }
}
