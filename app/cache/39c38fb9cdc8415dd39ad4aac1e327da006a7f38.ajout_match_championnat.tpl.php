<?php
/* Smarty version 3.1.29, created on 2016-06-10 09:08:01
  from "C:\wamp\www\Appli_Synthese\app\templates\ajout_match_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a67513cc651_01613380',
  'file_dependency' => 
  array (
    '39c38fb9cdc8415dd39ad4aac1e327da006a7f38' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\ajout_match_championnat.tpl',
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
function content_575a67513cc651_01613380 ($_smarty_tpl) {
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
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0021</td><td bgcolor='#eeeeec' align='right'>141408</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>3.4412</td><td bgcolor='#eeeeec' align='right'>668144</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>50</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669424</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669824</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>3.4476</td><td bgcolor='#eeeeec' align='right'>786872</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>3.4538</td><td bgcolor='#eeeeec' align='right'>876608</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>3.4556</td><td bgcolor='#eeeeec' align='right'>903488</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>3.4600</td><td bgcolor='#eeeeec' align='right'>968824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>3.4649</td><td bgcolor='#eeeeec' align='right'>1017976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>3.4650</td><td bgcolor='#eeeeec' align='right'>1018424</td><td bgcolor='#eeeeec'>content_575a66aa7d5cb5_07663655(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>3.4651</td><td bgcolor='#eeeeec' align='right'>1020424</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php' bgcolor='#eeeeec'>..\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>3.4662</td><td bgcolor='#eeeeec' align='right'>1023536</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>3.4671</td><td bgcolor='#eeeeec' align='right'>1025368</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>3.4686</td><td bgcolor='#eeeeec' align='right'>1029088</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>3.4687</td><td bgcolor='#eeeeec' align='right'>1029232</td><td bgcolor='#eeeeec'>content_575a66981d9061_09816577(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>3.4687</td><td bgcolor='#eeeeec' align='right'>1029664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>..\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>3.4696</td><td bgcolor='#eeeeec' align='right'>1032688</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>3.4705</td><td bgcolor='#eeeeec' align='right'>1034496</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>3.4719</td><td bgcolor='#eeeeec' align='right'>1038888</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>3.4720</td><td bgcolor='#eeeeec' align='right'>1039008</td><td bgcolor='#eeeeec'>content_575a669826ba26_16436609(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Appli_Synthese\app\templates_c\6306a70380c6cdf5c9b8f562d5a8f236c23f8104_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0021</td><td bgcolor='#eeeeec' align='right'>141408</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>3.4412</td><td bgcolor='#eeeeec' align='right'>668144</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>50</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669424</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669824</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>3.4476</td><td bgcolor='#eeeeec' align='right'>786872</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>3.4538</td><td bgcolor='#eeeeec' align='right'>876608</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>3.4556</td><td bgcolor='#eeeeec' align='right'>903488</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>3.4600</td><td bgcolor='#eeeeec' align='right'>968824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>3.4649</td><td bgcolor='#eeeeec' align='right'>1017976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>3.4650</td><td bgcolor='#eeeeec' align='right'>1018424</td><td bgcolor='#eeeeec'>content_575a66aa7d5cb5_07663655(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>3.4651</td><td bgcolor='#eeeeec' align='right'>1020424</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php' bgcolor='#eeeeec'>..\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>3.4662</td><td bgcolor='#eeeeec' align='right'>1023536</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>3.4671</td><td bgcolor='#eeeeec' align='right'>1025368</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>3.4686</td><td bgcolor='#eeeeec' align='right'>1029088</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>3.4687</td><td bgcolor='#eeeeec' align='right'>1029232</td><td bgcolor='#eeeeec'>content_575a66981d9061_09816577(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>3.4687</td><td bgcolor='#eeeeec' align='right'>1029664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php' bgcolor='#eeeeec'>..\e3f68dc81636b2aa85cb814441372658944b8ff5_0.file.header_ajout_match.tpl.cache.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>3.4696</td><td bgcolor='#eeeeec' align='right'>1032688</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>3.4705</td><td bgcolor='#eeeeec' align='right'>1034496</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>3.4719</td><td bgcolor='#eeeeec' align='right'>1038888</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>20</td><td bgcolor='#eeeeec' align='center'>3.4720</td><td bgcolor='#eeeeec' align='right'>1039008</td><td bgcolor='#eeeeec'>content_575a669826ba26_16436609(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
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
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: saisons in C:\wamp\www\Appli_Synthese\app\templates_c\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0021</td><td bgcolor='#eeeeec' align='right'>141408</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>3.4412</td><td bgcolor='#eeeeec' align='right'>668144</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>50</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669424</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669824</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>3.4476</td><td bgcolor='#eeeeec' align='right'>786872</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>3.4538</td><td bgcolor='#eeeeec' align='right'>876608</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>3.4556</td><td bgcolor='#eeeeec' align='right'>903488</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>3.4600</td><td bgcolor='#eeeeec' align='right'>968824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>3.4649</td><td bgcolor='#eeeeec' align='right'>1017976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>3.4650</td><td bgcolor='#eeeeec' align='right'>1018424</td><td bgcolor='#eeeeec'>content_575a66aa7d5cb5_07663655(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Appli_Synthese\app\templates_c\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0021</td><td bgcolor='#eeeeec' align='right'>141408</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>3.4412</td><td bgcolor='#eeeeec' align='right'>668144</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>50</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669424</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>15</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>3.4414</td><td bgcolor='#eeeeec' align='right'>669824</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>3.4476</td><td bgcolor='#eeeeec' align='right'>786872</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>3.4538</td><td bgcolor='#eeeeec' align='right'>876608</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>3.4556</td><td bgcolor='#eeeeec' align='right'>903488</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>3.4600</td><td bgcolor='#eeeeec' align='right'>968824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>3.4649</td><td bgcolor='#eeeeec' align='right'>1017976</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>3.4650</td><td bgcolor='#eeeeec' align='right'>1018424</td><td bgcolor='#eeeeec'>content_575a66aa7d5cb5_07663655(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
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
<!-- 		  			<input type="hidden" name="saison" value=2 />
<input type="hidden" name="pays" value=1  />
<input type="hidden" name="division" value=1 /> -->
		  			<a class="btn btn-primary" href="index.php?page=generer_aleatoirement" name="generer_match_aleat"/>Générer Alétatoirement</a>
		  
		 	
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
</BODY>
</HTML>
<?php }
}
