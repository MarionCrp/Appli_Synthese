<?php
/* Smarty version 3.1.29, created on 2016-06-10 10:58:46
  from "C:\wamp\www\Appli_Synthese\app\templates\selection_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a8146a10d33_94595995',
  'file_dependency' => 
  array (
    'dcaab2f62e33109ccaeccbada1fbcae306091271' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\selection_championnat.tpl',
      1 => 1465541379,
      2 => 'file',
    ),
    'e3f68dc81636b2aa85cb814441372658944b8ff5' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\header_ajout_match.tpl',
      1 => 1465471582,
      2 => 'file',
    ),
    '6306a70380c6cdf5c9b8f562d5a8f236c23f8104' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\header.tpl',
      1 => 1465471582,
      2 => 'file',
    ),
    'd1f691df83dfd86ba2936c18a2e52ef8ff41970f' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\footer.tpl',
      1 => 1465471582,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_575a8146a10d33_94595995 ($_smarty_tpl) {
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
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: Name in C:\wamp\www\Appli_Synthese\app\templates_c\6306a70380c6cdf5c9b8f562d5a8f236c23f8104_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>139472</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.2069</td><td bgcolor='#eeeeec' align='right'>668648</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\selection_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.2322</td><td bgcolor='#eeeeec' align='right'>702728</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\selection_championnat_controller.php' bgcolor='#eeeeec'>..\selection_championnat_controller.php<b>:</b>33</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.2322</td><td bgcolor='#eeeeec' align='right'>703128</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2377</td><td bgcolor='#eeeeec' align='right'>820160</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.2414</td><td bgcolor='#eeeeec' align='right'>910176</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.2427</td><td bgcolor='#eeeeec' align='right'>936800</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2445</td><td bgcolor='#eeeeec' align='right'>1002120</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1066144</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1067024</td><td bgcolor='#eeeeec'>content_575a66980d29b7_33500509(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1069024</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\dcaab2f62e33109ccaeccbada1fbcae306091271_0.file.selection_championnat.tpl.cache.php' bgcolor='#eeeeec'>..\dcaab2f62e33109ccaeccbada1fbcae306091271_0.file.selection_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2476</td><td bgcolor='#eeeeec' align='right'>1072144</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.2480</td><td bgcolor='#eeeeec' align='right'>1073976</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.2486</td><td bgcolor='#eeeeec' align='right'>1077704</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.2486</td><td bgcolor='#eeeeec' align='right'>1077848</td><td bgcolor='#eeeeec'>content_575a66981d9061_09816577(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>0.2487</td><td bgcolor='#eeeeec' align='right'>1078280</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>..\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>0.2508</td><td bgcolor='#eeeeec' align='right'>1081304</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>0.2512</td><td bgcolor='#eeeeec' align='right'>1083112</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>0.2518</td><td bgcolor='#eeeeec' align='right'>1087544</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>0.2519</td><td bgcolor='#eeeeec' align='right'>1087664</td><td bgcolor='#eeeeec'>content_575a669826ba26_16436609(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Appli_Synthese\app\templates_c\6306a70380c6cdf5c9b8f562d5a8f236c23f8104_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>139472</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.2069</td><td bgcolor='#eeeeec' align='right'>668648</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\selection_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.2322</td><td bgcolor='#eeeeec' align='right'>702728</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\selection_championnat_controller.php' bgcolor='#eeeeec'>..\selection_championnat_controller.php<b>:</b>33</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.2322</td><td bgcolor='#eeeeec' align='right'>703128</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2377</td><td bgcolor='#eeeeec' align='right'>820160</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.2414</td><td bgcolor='#eeeeec' align='right'>910176</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.2427</td><td bgcolor='#eeeeec' align='right'>936800</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2445</td><td bgcolor='#eeeeec' align='right'>1002120</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1066144</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1067024</td><td bgcolor='#eeeeec'>content_575a66980d29b7_33500509(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1069024</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\dcaab2f62e33109ccaeccbada1fbcae306091271_0.file.selection_championnat.tpl.cache.php' bgcolor='#eeeeec'>..\dcaab2f62e33109ccaeccbada1fbcae306091271_0.file.selection_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2476</td><td bgcolor='#eeeeec' align='right'>1072144</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.2480</td><td bgcolor='#eeeeec' align='right'>1073976</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.2486</td><td bgcolor='#eeeeec' align='right'>1077704</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.2486</td><td bgcolor='#eeeeec' align='right'>1077848</td><td bgcolor='#eeeeec'>content_575a66981d9061_09816577(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>0.2487</td><td bgcolor='#eeeeec' align='right'>1078280</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>..\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>0.2508</td><td bgcolor='#eeeeec' align='right'>1081304</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>0.2512</td><td bgcolor='#eeeeec' align='right'>1083112</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>0.2518</td><td bgcolor='#eeeeec' align='right'>1087544</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>0.2519</td><td bgcolor='#eeeeec' align='right'>1087664</td><td bgcolor='#eeeeec'>content_575a669826ba26_16436609(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
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
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Array to string conversion in C:\wamp\www\Appli_Synthese\app\templates_c\dcaab2f62e33109ccaeccbada1fbcae306091271_0.file.selection_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>139472</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.2069</td><td bgcolor='#eeeeec' align='right'>668648</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\selection_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.2322</td><td bgcolor='#eeeeec' align='right'>702728</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\selection_championnat_controller.php' bgcolor='#eeeeec'>..\selection_championnat_controller.php<b>:</b>33</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.2322</td><td bgcolor='#eeeeec' align='right'>703128</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2377</td><td bgcolor='#eeeeec' align='right'>820160</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.2414</td><td bgcolor='#eeeeec' align='right'>910176</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.2427</td><td bgcolor='#eeeeec' align='right'>936800</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2445</td><td bgcolor='#eeeeec' align='right'>1002120</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1066144</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.2471</td><td bgcolor='#eeeeec' align='right'>1067024</td><td bgcolor='#eeeeec'>content_575a66980d29b7_33500509(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
Array -->

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Selection d'un championnat</h3>
		  	</div>
		  
		 	<div class="panel-body">
		 			<form  action="index.php?page=ajout_match_championnat" method="post" class="form-horizontal" role="form">
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
						      <input class="btn btn-primary sign_up" type="submit" value="Selectionner" name="selection"/>
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
