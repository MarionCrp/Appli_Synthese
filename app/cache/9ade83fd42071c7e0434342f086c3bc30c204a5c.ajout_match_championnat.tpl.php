<?php
/* Smarty version 3.1.29, created on 2016-06-10 08:09:38
  from "C:\wamp64\www\Apply_synth\app\templates\ajout_match_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a75c2822837_33627505',
  'file_dependency' => 
  array (
    '9ade83fd42071c7e0434342f086c3bc30c204a5c' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\ajout_match_championnat.tpl',
      1 => 1465543077,
      2 => 'file',
    ),
    'c1f609869571c86f31c85b28d0c3ea89e9d71c27' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\header_ajout_match.tpl',
      1 => 1464967898,
      2 => 'file',
    ),
    '5ad1212ddcfeb6eb9c83e756230cd2a06f22415e' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\header.tpl',
      1 => 1464967898,
      2 => 'file',
    ),
    '2fe0af851db08fdb43bda0782003a2335c0a863f' => 
    array (
      0 => 'C:\\wamp64\\www\\Apply_synth\\app\\templates\\footer.tpl',
      1 => 1464336027,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_575a75c2822837_33627505 ($_smarty_tpl) {
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
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: Name in C:\wamp64\www\Apply_synth\app\templates_c\5ad1212ddcfeb6eb9c83e756230cd2a06f22415e_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0012</td><td bgcolor='#eeeeec' align='right'>249144</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1075</td><td bgcolor='#eeeeec' align='right'>1074816</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1076704</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1077432</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1132</td><td bgcolor='#eeeeec' align='right'>1253192</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>1392704</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1211</td><td bgcolor='#eeeeec' align='right'>1483888</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1231</td><td bgcolor='#eeeeec' align='right'>1576592</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1631976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1632680</td><td bgcolor='#eeeeec'>content_575a6b1f4aafa4_40230002(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1249</td><td bgcolor='#eeeeec' align='right'>1636288</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\app\templates_c\9ade83fd42071c7e0434342f086c3bc30c204a5c_0.file.ajout_match_championnat.tpl.cache.php' bgcolor='#eeeeec'>...\9ade83fd42071c7e0434342f086c3bc30c204a5c_0.file.ajout_match_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.1252</td><td bgcolor='#eeeeec' align='right'>1641416</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.1257</td><td bgcolor='#eeeeec' align='right'>1644272</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.1262</td><td bgcolor='#eeeeec' align='right'>1649704</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.1262</td><td bgcolor='#eeeeec' align='right'>1649960</td><td bgcolor='#eeeeec'>content_575952279df567_41303249(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>0.1262</td><td bgcolor='#eeeeec' align='right'>1650616</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\app\templates_c\c1f609869571c86f31c85b28d0c3ea89e9d71c27_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>...\c1f609869571c86f31c85b28d0c3ea89e9d71c27_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>0.1266</td><td bgcolor='#eeeeec' align='right'>1655608</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>0.1269</td><td bgcolor='#eeeeec' align='right'>1658416</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>0.1293</td><td bgcolor='#eeeeec' align='right'>1664816</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>0.1294</td><td bgcolor='#eeeeec' align='right'>1665024</td><td bgcolor='#eeeeec'>content_57595227a39ec8_65563662(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp64\www\Apply_synth\app\templates_c\5ad1212ddcfeb6eb9c83e756230cd2a06f22415e_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0012</td><td bgcolor='#eeeeec' align='right'>249144</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1075</td><td bgcolor='#eeeeec' align='right'>1074816</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1076704</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1077432</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1132</td><td bgcolor='#eeeeec' align='right'>1253192</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>1392704</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1211</td><td bgcolor='#eeeeec' align='right'>1483888</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1231</td><td bgcolor='#eeeeec' align='right'>1576592</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1631976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1632680</td><td bgcolor='#eeeeec'>content_575a6b1f4aafa4_40230002(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1249</td><td bgcolor='#eeeeec' align='right'>1636288</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\app\templates_c\9ade83fd42071c7e0434342f086c3bc30c204a5c_0.file.ajout_match_championnat.tpl.cache.php' bgcolor='#eeeeec'>...\9ade83fd42071c7e0434342f086c3bc30c204a5c_0.file.ajout_match_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.1252</td><td bgcolor='#eeeeec' align='right'>1641416</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.1257</td><td bgcolor='#eeeeec' align='right'>1644272</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.1262</td><td bgcolor='#eeeeec' align='right'>1649704</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.1262</td><td bgcolor='#eeeeec' align='right'>1649960</td><td bgcolor='#eeeeec'>content_575952279df567_41303249(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>0.1262</td><td bgcolor='#eeeeec' align='right'>1650616</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp64\www\Apply_synth\app\templates_c\c1f609869571c86f31c85b28d0c3ea89e9d71c27_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>...\c1f609869571c86f31c85b28d0c3ea89e9d71c27_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>0.1266</td><td bgcolor='#eeeeec' align='right'>1655608</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>0.1269</td><td bgcolor='#eeeeec' align='right'>1658416</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>0.1293</td><td bgcolor='#eeeeec' align='right'>1664816</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>0.1294</td><td bgcolor='#eeeeec' align='right'>1665024</td><td bgcolor='#eeeeec'>content_57595227a39ec8_65563662(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
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

<!-- <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: saisons in C:\wamp64\www\Apply_synth\app\templates_c\9ade83fd42071c7e0434342f086c3bc30c204a5c_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0012</td><td bgcolor='#eeeeec' align='right'>249144</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1075</td><td bgcolor='#eeeeec' align='right'>1074816</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1076704</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1077432</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1132</td><td bgcolor='#eeeeec' align='right'>1253192</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>1392704</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1211</td><td bgcolor='#eeeeec' align='right'>1483888</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1231</td><td bgcolor='#eeeeec' align='right'>1576592</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1631976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1632680</td><td bgcolor='#eeeeec'>content_575a6b1f4aafa4_40230002(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp64\www\Apply_synth\app\templates_c\9ade83fd42071c7e0434342f086c3bc30c204a5c_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0012</td><td bgcolor='#eeeeec' align='right'>249144</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1075</td><td bgcolor='#eeeeec' align='right'>1074816</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp64\www\Apply_synth\app\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1076704</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp64\www\Apply_synth\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>...\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1076</td><td bgcolor='#eeeeec' align='right'>1077432</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1132</td><td bgcolor='#eeeeec' align='right'>1253192</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>1392704</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1211</td><td bgcolor='#eeeeec' align='right'>1483888</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1231</td><td bgcolor='#eeeeec' align='right'>1576592</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1631976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1248</td><td bgcolor='#eeeeec' align='right'>1632680</td><td bgcolor='#eeeeec'>content_575a6b1f4aafa4_40230002(  )</td><td title='C:\wamp64\www\Apply_synth\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
 -->

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Ajouter des Match</h3>
		  	</div>

		  	<div class="form-group">
		  		<form action="#" method="post">
		  			<input type="submit" class="btn btn-primary" value="Générer matchs alétatoirement" name="generer_match_aleat"/>
		  			<input type="submit" class="btn btn primary" value="Générer score" name="generer_score"/>
		  	</form>
		 	
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
</BODY>
</HTML>
<?php }
}
