{include file="header.tpl" title=foo}

<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 deconnected">
	<h1> {$message} </h1>
	
	{foreach from=$liste_matchs item=match}
	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 class="panel-title">{$match.date_match_championnat}</h3>
		  	</div>
		  
		 	<div class="panel-body">
		 		<table class="table table-striped" style="border:0;">
		 			<tr>
					    <td> Match aller </td>
					    <td></td>
					    <td>{$match.equipe_visiteur}</td>
					    <td>{$match.equipe_domicile}</td>
					    <td></td>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td>{$match.buts_equipe_visiteur}</td>
					    <td>{$match.buts_equipe_domicile}</td>
					    <td></td>
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td>{$match.arbitre1}, {$match.arbitre2}, {$match.arbitre3}, {$match.arbitre4}, {$match.remplacant}</td>
					    <td></td>
					    <td></td>
					    
					</tr>
				</table>

		 	</div>
		</div>
		{/foreach}
		<form action="" method="post" style="text-align:center;">
		<ul class="pagination">
			{for $i=1 to $nb_page}
				<li><input type="submit" class="btn btn-default" value="{$i}" name="afficher_calendrier"/></li>
			{/for}
		</ul>
	</form>
	</div>
</div>

{include file="footer.tpl" title=foo}


<p>TEST</p>