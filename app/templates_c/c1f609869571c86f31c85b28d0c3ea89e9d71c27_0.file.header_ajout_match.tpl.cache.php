<?php
/* Smarty version 3.1.29, created on 2016-06-09 11:25:27
  from "C:\wamp64\www\Apply_synth\app\templates\header_ajout_match.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575952279df567_41303249',
  'file_dependency' => 
  array (
    'c1f609869571c86f31c85b28d0c3ea89e9d71c27' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\header_ajout_match.tpl',
      1 => 1464967898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_575952279df567_41303249 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '24637575952279c5e70_75107403';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Ajouter un match"), 0, false);
?>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php?page=ajout_match_championnat">Championnat</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_ldc">Ligue Des Champions</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_europa">Coupe Europa</a></li>
</ul><?php }
}
