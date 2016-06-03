<?php
/* Smarty version 3.1.29, created on 2016-06-03 14:19:44
  from "C:\wamp64\www\Apply_synth\App\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57519200d69346_80181752',
  'file_dependency' => 
  array (
    '5b20191fb8fa603622636ed9e0822a02c1ee72fe' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\home.tpl',
      1 => 1464962623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57519200d69346_80181752 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '314557519200ce0e90_81461152';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<p> TOTO TEMPLATE </p>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
