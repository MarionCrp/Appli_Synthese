<?php
/* Smarty version 3.1.29, created on 2016-06-10 15:56:21
  from "C:\wamp\www\Appli_Synthese\app\templates\accueil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ac705d48753_95946986',
  'file_dependency' => 
  array (
    '6bfd33c33a9f1349c1fd497ada1ea51631dcf251' => 
    array (
      0 => 'C:\\wamp\\www\\Appli_Synthese\\app\\templates\\accueil.tpl',
      1 => 1465566923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_ajout_match.tpl' => 1,
  ),
),false)) {
function content_575ac705d48753_95946986 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_ajout_match.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Accueil'), 0, false);
?>



<div id="page_accueil">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">FootDeal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Application Synthèse<h3>
  <img src="assets/images/euro2016.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>Bienvenue sur notre projet de fin d'année</h3>
</div>

<!--  Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Voir une démo</h3>
  <p>Vos compétitions vous accompagne où vous voulez. Toujours accessible à travers Internet. Ligue 1, Ligue des Champions ou encore Ligue Europa, toutes les résultats et classements toujours à porter de main. De plus, vous pouvez ajouter des compétitions, des équipes ou de match avec leur résultat.</p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-play-circle"></span> Tester
  </a>
</div>

<!--  Third Container (Grid) -->

<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Ce que nous faisons</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Ligue 1 et de Ligue 2 de tous les pays européens sont intégrés. Sélection automatique des vainqueurs pour les inscrire dans les compétitions suivantes.</p>
      <img src="assets/images/ligue1.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Gestion de la grande messe du football européen : la Ligue des Champions. Toutes les équipes de tous les pays et automatise les classements.</p>
      <img src="assets/images/liguedeschampions.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Intégration de plus petite compétitions, tel que la Ligue Europa. Même fonctionnalités que dans les autres championats.</p>
      <img src="assets/images/ligueEuropa.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>
</div><?php }
}
