<?php
/* Smarty version 3.1.29, created on 2016-06-03 14:34:09
  from "C:\wamp64\www\Apply_synth\App\templates\ajout_match.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57519561e89c67_95964117',
  'file_dependency' => 
  array (
    '694f02118823dccf1b34c4587c06ac6aca6722f1' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\ajout_match.tpl',
      1 => 1464964446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_ajout_match.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57519561e89c67_95964117 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1393157519561de2647_21945172';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_ajout_match.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Ajout d'un match de championnat"), 0, false);
?>


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    	<select class="form-control">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
