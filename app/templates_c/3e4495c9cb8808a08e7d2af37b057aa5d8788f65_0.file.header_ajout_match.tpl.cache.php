<?php
/* Smarty version 3.1.29, created on 2016-06-03 14:37:40
  from "C:\wamp64\www\Apply_synth\App\templates\header_ajout_match.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57519634530d93_42321578',
  'file_dependency' => 
  array (
    '3e4495c9cb8808a08e7d2af37b057aa5d8788f65' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\header_ajout_match.tpl',
      1 => 1464964624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_57519634530d93_42321578 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1685757519634490094_44789587';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Ajouter un match"), 0, false);
?>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php?page=ajout_match_championnat">Championnat</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_ldc">Ligue Des Champions</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_europa">Coupe Europa</a></li>
</ul><?php }
}
