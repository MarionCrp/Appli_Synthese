<?php
/* Smarty version 3.1.29, created on 2016-06-10 06:02:11
  from "C:\wamp64\www\Apply_synth\app\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a57e31f3e48_38116701',
  'file_dependency' => 
  array (
    'f2a22f803c698c1b5481c1fddbb4ec837a808a2a' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\home.tpl',
      1 => 1464967898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575a57e31f3e48_38116701 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '26026575a57e29938d6_83788710';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<p> TOTO TEMPLATE </p>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
