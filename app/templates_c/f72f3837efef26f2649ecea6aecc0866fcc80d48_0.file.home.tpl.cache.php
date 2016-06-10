<?php
/* Smarty version 3.1.29, created on 2016-06-10 14:23:36
  from "C:\wamp\www\Appli_Synthese\app\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ab148639309_49149876',
  'file_dependency' => 
  array (
    'f72f3837efef26f2649ecea6aecc0866fcc80d48' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\home.tpl',
      1 => 1465561412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_575ab148639309_49149876 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '24841575ab148552564_42672927';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<p> TOTO TEMPLATE </p>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
}
}
