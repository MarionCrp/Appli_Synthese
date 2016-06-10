<?php
/* Smarty version 3.1.29, created on 2016-06-10 08:08:44
  from "C:\wamp64\www\Apply_synth\app\templates\matchs_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a758c1b2851_79532075',
  'file_dependency' => 
  array (
    '0d71789b622fe0f4edb86e8566774ef9778ec6b3' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\matchs_championnat.tpl',
      1 => 1465545689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:ajout_match_championnat.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575a758c1b2851_79532075 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4951575a758c0d71e3_24110636';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:ajout_match_championnat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>



<p>TEST</p><?php }
}
