
{include file="header_ajout_match.tpl" title="Ajout d'un match de championnat"}

<!-- {$saisons[0]} -->

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">

	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">Ajouter des Match</h3>
		  	</div>

		  	<div class="form-group">
		  		<form action="index.php?page=generer_aleatoirement" method="post">
		  			<input type="submit" class="btn btn-primary" value="Générer matchs alétatoirement" name="generer_match_aleat"/>
		  			<input type="submit" class="btn btn primary" value="Générer score" name="generer_score"/>
		  	</form>
		 	
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
	  </div> <!-- col-md-8 -->
	  <div class="col-md-2"></div>
</div>
{include file="footer.tpl" title=foo}