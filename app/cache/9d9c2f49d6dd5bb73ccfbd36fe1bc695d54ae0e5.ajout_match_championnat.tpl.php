<?php
/* Smarty version 3.1.29, created on 2016-06-03 15:28:34
  from "C:\wamp64\www\Apply_synth\App\templates\ajout_match_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5751a2224eec90_45209152',
  'file_dependency' => 
  array (
    '9d9c2f49d6dd5bb73ccfbd36fe1bc695d54ae0e5' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\ajout_match_championnat.tpl',
      1 => 1464967712,
      2 => 'file',
    ),
    '3e4495c9cb8808a08e7d2af37b057aa5d8788f65' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\header_ajout_match.tpl',
      1 => 1464964624,
      2 => 'file',
    ),
    'd853c73cb0c78ce5e29d2b52db33b450f69a2ec8' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\header.tpl',
      1 => 1464964123,
      2 => 'file',
    ),
    '4be09d9471338b2166dbc4481cf5855810c5af83' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\App\\templates\\footer.tpl',
      1 => 1464952255,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5751a2224eec90_45209152 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="fr">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="desc">
		<meta name="author" content="auteur">
		<title>Ajouter un match - <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: Name in C:\wamp64\www\Apply_synth\App\templates_c\d853c73cb0c78ce5e29d2b52db33b450f69a2ec8_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0010</td><td bgcolor='#eeeeec' align='right'>242688</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\App\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0508</td><td bgcolor='#eeeeec' align='right'>952344</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\App\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\App\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>43</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0726</td><td bgcolor='#eeeeec' align='right'>1007496</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\App\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>33</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0726</td><td bgcolor='#eeeeec' align='right'>1008224</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0758</td><td bgcolor='#eeeeec' align='right'>1183880</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0790</td><td bgcolor='#eeeeec' align='right'>1323976</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0799</td><td bgcolor='#eeeeec' align='right'>1365824</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0842</td><td bgcolor='#eeeeec' align='right'>1458528</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2360</td><td bgcolor='#eeeeec' align='right'>4336224</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.2360</td><td bgcolor='#eeeeec' align='right'>4337904</td><td bgcolor='#eeeeec'>content_5751a221ab62d7_42003706(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.2361</td><td bgcolor='#eeeeec' align='right'>4341528</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\App\templates_c\9d9c2f49d6dd5bb73ccfbd36fe1bc695d54ae0e5_0.file.ajout_match_championnat.tpl.cache.php' bgcolor='#eeeeec'>...\9d9c2f49d6dd5bb73ccfbd36fe1bc695d54ae0e5_0.file.ajout_match_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2374</td><td bgcolor='#eeeeec' align='right'>4346648</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.2382</td><td bgcolor='#eeeeec' align='right'>4349480</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.2390</td><td bgcolor='#eeeeec' align='right'>4354944</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.2390</td><td bgcolor='#eeeeec' align='right'>4355200</td><td bgcolor='#eeeeec'>content_57519634530d93_42321578(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>0.2390</td><td bgcolor='#eeeeec' align='right'>4355856</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\App\templates_c\3e4495c9cb8808a08e7d2af37b057aa5d8788f65_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>...\3e4495c9cb8808a08e7d2af37b057aa5d8788f65_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>0.2394</td><td bgcolor='#eeeeec' align='right'>4360800</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>0.2397</td><td bgcolor='#eeeeec' align='right'>4363608</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>0.2402</td><td bgcolor='#eeeeec' align='right'>4369944</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>0.2402</td><td bgcolor='#eeeeec' align='right'>4370152</td><td bgcolor='#eeeeec'>content_5751943410cdc8_46085244(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp64\www\Apply_synth\App\templates_c\d853c73cb0c78ce5e29d2b52db33b450f69a2ec8_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0010</td><td bgcolor='#eeeeec' align='right'>242688</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\App\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0508</td><td bgcolor='#eeeeec' align='right'>952344</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\App\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\App\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>43</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0726</td><td bgcolor='#eeeeec' align='right'>1007496</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\App\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>33</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0726</td><td bgcolor='#eeeeec' align='right'>1008224</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0758</td><td bgcolor='#eeeeec' align='right'>1183880</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0790</td><td bgcolor='#eeeeec' align='right'>1323976</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0799</td><td bgcolor='#eeeeec' align='right'>1365824</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0842</td><td bgcolor='#eeeeec' align='right'>1458528</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2360</td><td bgcolor='#eeeeec' align='right'>4336224</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.2360</td><td bgcolor='#eeeeec' align='right'>4337904</td><td bgcolor='#eeeeec'>content_5751a221ab62d7_42003706(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.2361</td><td bgcolor='#eeeeec' align='right'>4341528</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\App\templates_c\9d9c2f49d6dd5bb73ccfbd36fe1bc695d54ae0e5_0.file.ajout_match_championnat.tpl.cache.php' bgcolor='#eeeeec'>...\9d9c2f49d6dd5bb73ccfbd36fe1bc695d54ae0e5_0.file.ajout_match_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2374</td><td bgcolor='#eeeeec' align='right'>4346648</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.2382</td><td bgcolor='#eeeeec' align='right'>4349480</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.2390</td><td bgcolor='#eeeeec' align='right'>4354944</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.2390</td><td bgcolor='#eeeeec' align='right'>4355200</td><td bgcolor='#eeeeec'>content_57519634530d93_42321578(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>0.2390</td><td bgcolor='#eeeeec' align='right'>4355856</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\App\templates_c\3e4495c9cb8808a08e7d2af37b057aa5d8788f65_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>...\3e4495c9cb8808a08e7d2af37b057aa5d8788f65_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>0.2394</td><td bgcolor='#eeeeec' align='right'>4360800</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>0.2397</td><td bgcolor='#eeeeec' align='right'>4363608</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>0.2402</td><td bgcolor='#eeeeec' align='right'>4369944</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>0.2402</td><td bgcolor='#eeeeec' align='right'>4370152</td><td bgcolor='#eeeeec'>content_5751943410cdc8_46085244(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

<BODY bgcolor="#ffffff">


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php?page=ajout_match_championnat">Championnat</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_ldc">Ligue Des Champions</a></li>
  <li role="presentation"><a href="index.php?page=ajout_match_europa">Coupe Europa</a></li>
</ul>

<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Array to string conversion in C:\wamp64\www\Apply_synth\App\templates_c\9d9c2f49d6dd5bb73ccfbd36fe1bc695d54ae0e5_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0010</td><td bgcolor='#eeeeec' align='right'>242688</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\App\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0508</td><td bgcolor='#eeeeec' align='right'>952344</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\App\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\App\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>43</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0726</td><td bgcolor='#eeeeec' align='right'>1007496</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\App\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>33</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0726</td><td bgcolor='#eeeeec' align='right'>1008224</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0758</td><td bgcolor='#eeeeec' align='right'>1183880</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0790</td><td bgcolor='#eeeeec' align='right'>1323976</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0799</td><td bgcolor='#eeeeec' align='right'>1365824</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0842</td><td bgcolor='#eeeeec' align='right'>1458528</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2360</td><td bgcolor='#eeeeec' align='right'>4336224</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.2360</td><td bgcolor='#eeeeec' align='right'>4337904</td><td bgcolor='#eeeeec'>content_5751a221ab62d7_42003706(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
Array

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Sign up </h3>
		  	</div>
		  
		 	<div class="panel-body">
		 			<form  action="#" method="post" class="form-horizontal" role="form">
					  <div class="form-group">
					  	<label for="saison" class="col-sm-2 control-label"> Saison </label>
					  		<div class="col-sm-10">
								  <select class="form-control" name="saison" id="saison">
								   									 <option value="1">Saison 2014/2015</option>
									 									 <option value="2">Saison 2015/2016</option>
									 									 <option value="3">Saison 2016/2017</option>
									 									 <option value="4">Saison 2017/2018</option>
									 								  </select>
							</div>
					  </div>

					   <div class="form-group">
					  	<label for="pays" class="col-sm-2 control-label"> Pays </label>
					  		<div class="col-sm-10">
								  <select class="form-control" name="pays" id="pays">
									  									 <option value="3">Allemagne</option>
									 									 <option value="4">Angleterre</option>
									 									 <option value="16">Autriche</option>
									 									 <option value="9">Belgique</option>
									 									 <option value="2">Espagne</option>
									 									 <option value="1">France</option>
									 									 <option value="14">Grèce</option>
									 									 <option value="5">Italie</option>
									 									 <option value="10">Pays-Bas</option>
									 									 <option value="6">Portugal</option>
									 									 <option value="13">République Tchèque</option>
									 									 <option value="15">Roumanie</option>
									 									 <option value="7">Russie</option>
									 									 <option value="12">Suisse</option>
									 									 <option value="11">Turquie</option>
									 									 <option value="8">Ukraine</option>
									 								  </select>
							</div>
					 	</div>					  

					  <div class="form-group">
					  	<label for="division" class="col-sm-2 control-label"> Division</label>
					  		<div class="col-sm-10">
								  <select class="form-control" name="division" id="division">
									 									 <option value="1">Division 1</option>
									 									 <option value="2">Division 2</option>
									 								  </select>
							</div>
					  </div>
						
						<div class="form-group">
						    <!-- <div class="col-sm-offset-1 col-sm-10"> -->

						    <div class="">
						      <input class="btn btn-primary sign_up" type="submit" value="Sign Up" name="create_account"/>
						     </div>
		 			   </div>
			    	</form>
					<hr/>
					
					<a href="index.php" type="submit" class="btn btn-default">Go back to the Main page </a>

		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
</BODY>
</HTML>
<?php }
}
