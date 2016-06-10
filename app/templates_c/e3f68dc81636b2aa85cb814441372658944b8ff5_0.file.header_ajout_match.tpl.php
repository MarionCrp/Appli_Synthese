<?php
/* Smarty version 3.1.29, created on 2016-06-10 14:33:32
  from "C:\wamp\www\Appli_Synthese\app\templates\header_ajout_match.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ab39caceda8_54410779',
  'file_dependency' => 
  array (
    'e3f68dc81636b2aa85cb814441372658944b8ff5' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\header_ajout_match.tpl',
      1 => 1465561889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_575ab39caceda8_54410779 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ajouter un match"), 0, false);
?>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php?page=selection_championnat">Championnat</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_ldc">Ligue Des Champions</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_europa">Coupe Europa</a></li>
</ul><?php }
}
