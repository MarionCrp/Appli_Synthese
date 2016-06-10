<?php
/* Smarty version 3.1.29, created on 2016-06-10 10:46:38
  from "C:\wamp\www\Appli_Synthese\app\templates\matchs_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a7e6e64e605_10545224',
  'file_dependency' => 
  array (
    'b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\matchs_championnat.tpl',
      1 => 1465548396,
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
function content_575a7e6e64e605_10545224 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="desc">
		<meta name="author" content="auteur">
		<title>foo - <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: Name in C:\wamp\www\Appli_Synthese\app\templates_c\6306a70380c6cdf5c9b8f562d5a8f236c23f8104_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0010</td><td bgcolor='#eeeeec' align='right'>142024</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1532</td><td bgcolor='#eeeeec' align='right'>675008</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.2661</td><td bgcolor='#eeeeec' align='right'>1087728</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.2661</td><td bgcolor='#eeeeec' align='right'>1087856</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2698</td><td bgcolor='#eeeeec' align='right'>1105656</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.2703</td><td bgcolor='#eeeeec' align='right'>1109080</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.2716</td><td bgcolor='#eeeeec' align='right'>1134640</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2720</td><td bgcolor='#eeeeec' align='right'>1152072</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.3272</td><td bgcolor='#eeeeec' align='right'>2765320</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.3272</td><td bgcolor='#eeeeec' align='right'>2765704</td><td bgcolor='#eeeeec'>content_575a7e6e5e48d6_09267906(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.3273</td><td bgcolor='#eeeeec' align='right'>2767648</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762_0.file.matchs_championnat.tpl.cache.php' bgcolor='#eeeeec'>..\b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762_0.file.matchs_championnat.tpl.cache.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.3278</td><td bgcolor='#eeeeec' align='right'>2770792</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.3282</td><td bgcolor='#eeeeec' align='right'>2772600</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.3288</td><td bgcolor='#eeeeec' align='right'>2777104</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.3288</td><td bgcolor='#eeeeec' align='right'>2777224</td><td bgcolor='#eeeeec'>content_575a669826ba26_16436609(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Appli_Synthese\app\templates_c\6306a70380c6cdf5c9b8f562d5a8f236c23f8104_0.file.header.tpl.cache.php on line <i>36</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0010</td><td bgcolor='#eeeeec' align='right'>142024</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1532</td><td bgcolor='#eeeeec' align='right'>675008</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.2661</td><td bgcolor='#eeeeec' align='right'>1087728</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.2661</td><td bgcolor='#eeeeec' align='right'>1087856</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2698</td><td bgcolor='#eeeeec' align='right'>1105656</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.2703</td><td bgcolor='#eeeeec' align='right'>1109080</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.2716</td><td bgcolor='#eeeeec' align='right'>1134640</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2720</td><td bgcolor='#eeeeec' align='right'>1152072</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.3272</td><td bgcolor='#eeeeec' align='right'>2765320</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.3272</td><td bgcolor='#eeeeec' align='right'>2765704</td><td bgcolor='#eeeeec'>content_575a7e6e5e48d6_09267906(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.3273</td><td bgcolor='#eeeeec' align='right'>2767648</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_SubTemplate->render(  )</td><td title='C:\wamp\www\Appli_Synthese\app\templates_c\b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762_0.file.matchs_championnat.tpl.cache.php' bgcolor='#eeeeec'>..\b9bc2d54fc3a5bcefe8e1f9f49f26d762cf56762_0.file.matchs_championnat.tpl.cache.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.3278</td><td bgcolor='#eeeeec' align='right'>2770792</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_subtemplate.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_subtemplate.php<b>:</b>174</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.3282</td><td bgcolor='#eeeeec' align='right'>2772600</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>159</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.3288</td><td bgcolor='#eeeeec' align='right'>2777104</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.3288</td><td bgcolor='#eeeeec' align='right'>2777224</td><td bgcolor='#eeeeec'>content_575a669826ba26_16436609(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
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


<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">#message</h3>
		  	</div>
		  
		 	<div class="panel-body">
		 		<table style="border:0;">
		 			<tr>
		 				<td>	</td>
		 				<td>	</td>
		 				<td>date</td>
		 				<td>	</td>
		 				<td>	</td>
		 			</tr>
		 			<tr>
					    <td> Match aller 		.</td>
					    <td></td>
					    <td>Equipe 1</td>
					    <td>Equipe 2</td>
					    <td></td>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td>buts1</td>
					    <td>buts2</td>
					    <td></td>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td>Arbritre, arbitre, arbitre, arbitre, arbitre</td>
					    <td></td>
					    <td></td>
					    
					</tr>
				</table>

		 	</div>
		</div>
	</div>
</div>

</BODY>
</HTML>



<p>TEST</p><?php }
}
