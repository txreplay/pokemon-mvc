<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Combat</title>
</head>
<body>

	<img src="http://assets2.pokemon.com/assets/cms2/img/pokedex/detail/<?php echo str_pad($data['id'], 3 , "0", STR_PAD_LEFT); ?>.png" alt="">

	<p><b>Pokémon rencontré :</b> <?php echo $data['nom'] ?></p>
	<p><b>ID :</b> <?php echo $data['id'] ?></p>
	<p><b>Déjà vu ? :</b> <?php echo ($data['vu'] == 0) ? 'Non' : 'Oui'; ?></p>
	<p><b>Déjà capturé ? :</b> <?php echo ($data['vu'] == 0) ? 'Non' : 'Oui'; ?></p>

	<br>

	<p><a href="#" onclick="toggleDisplay('resultat_capt')">Capture</a></p>
	<p id="resultat_capt" style="display:none;"><b>Résultat de la capture :</b>
		<?php echo ($data['resultat_capt'] > 50) ? 'Gagné' : 'Perdu'; ?>
	</p>

	<p><a href="?pkmn=combat&id=<?php echo rand (0 ,151) ?>">Continuer à marcher dans les hautes herbes</a></p>
<script>
	function toggleDisplay(elmt) {
		elmt = document.getElementById(elmt);
		elmt.style.display = "block";
	}
</script>
</body>
</html>