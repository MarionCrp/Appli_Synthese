<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-06-10 14:30:45
=======
/* Smarty version 3.1.29, created on 2016-06-10 14:55:17
>>>>>>> d5766b4248b99477fb09af1910d522bc1fa6f0d9
  from "C:\wamp\www\Appli_Synthese\app\templates\ajout_match_championnat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_575ab2f5daae07_17416225',
=======
  'unifunc' => 'content_575ab8b513e913_07657274',
>>>>>>> d5766b4248b99477fb09af1910d522bc1fa6f0d9
  'file_dependency' => 
  array (
    '39c38fb9cdc8415dd39ad4aac1e327da006a7f38' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\ajout_match_championnat.tpl',
      1 => 1465549221,
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
      1 => 1465560404,
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
<<<<<<< HEAD
function content_575ab2f5daae07_17416225 ($_smarty_tpl) {
=======
function content_575ab8b513e913_07657274 ($_smarty_tpl) {
>>>>>>> d5766b4248b99477fb09af1910d522bc1fa6f0d9
?>

<!DOCTYPE html>
<html lang="fr">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="desc">
		<meta name="author" content="auteur">
<<<<<<< HEAD
		<title>Ajouter un match</title>
=======
		<title>Ajouter un match - </title>
>>>>>>> d5766b4248b99477fb09af1910d522bc1fa6f0d9
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

<<<<<<< HEAD
<!-- <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: saisons in C:\wamp\www\Appli_Synthese\app\templates_c\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0017</td><td bgcolor='#eeeeec' align='right'>139968</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0670</td><td bgcolor='#eeeeec' align='right'>687064</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0671</td><td bgcolor='#eeeeec' align='right'>687152</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0671</td><td bgcolor='#eeeeec' align='right'>687552</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0736</td><td bgcolor='#eeeeec' align='right'>804440</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0822</td><td bgcolor='#eeeeec' align='right'>894184</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0843</td><td bgcolor='#eeeeec' align='right'>921064</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0886</td><td bgcolor='#eeeeec' align='right'>986400</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0931</td><td bgcolor='#eeeeec' align='right'>1034584</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0931</td><td bgcolor='#eeeeec' align='right'>1034984</td><td bgcolor='#eeeeec'>content_575a822b1432e9_21708496(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\Appli_Synthese\app\templates_c\39c38fb9cdc8415dd39ad4aac1e327da006a7f38_0.file.ajout_match_championnat.tpl.cache.php on line <i>32</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0017</td><td bgcolor='#eeeeec' align='right'>139968</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0670</td><td bgcolor='#eeeeec' align='right'>687064</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php'</font> )</td><td title='C:\wamp\www\Appli_Synthese\app\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>53</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0671</td><td bgcolor='#eeeeec' align='right'>687152</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\Appli_Synthese\app\controllers\ajout_match_championnat_controller.php' bgcolor='#eeeeec'>..\ajout_match_championnat_controller.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0671</td><td bgcolor='#eeeeec' align='right'>687552</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0736</td><td bgcolor='#eeeeec' align='right'>804440</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0822</td><td bgcolor='#eeeeec' align='right'>894184</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0843</td><td bgcolor='#eeeeec' align='right'>921064</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0886</td><td bgcolor='#eeeeec' align='right'>986400</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0931</td><td bgcolor='#eeeeec' align='right'>1034584</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0931</td><td bgcolor='#eeeeec' align='right'>1034984</td><td bgcolor='#eeeeec'>content_575a822b1432e9_21708496(  )</td><td title='C:\wamp\www\Appli_Synthese\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
 -->
=======
<!--  -->
>>>>>>> d5766b4248b99477fb09af1910d522bc1fa6f0d9

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Ajouter des Match</h3>
		  	</div>

		  	<div class="form-group">
		  		<form action="" method="post">

		  			<input type="submit" class="btn btn-primary" value="Générer matchs alétatoirement" name="generer_match_aleat"/>
		  			<input type="submit" class="btn btn-primary" value="Générer score" name="generer_score"/>
		  			<input type="submit" class="btn btn-primary" value="Afficher Calendrier" name="afficher_calendrier"/>
		  			<input type="submit" class="btn btn-primary" value="Afficher classement" name="afficher_classement"/>
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
