<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Pokédex</title>
</head>
<body>
	
	<p><a href="?pkmn=combat&id=<?php echo rand (0 ,151) ?>">Marcher dans les hautes herbes</a></p>

	<table>
		<tr>
			<td>ID</td>
			<td>Nom</td>
			<td>Capturé ?</td>
		</tr>

		<?php foreach( $data['pokedex'] as $pokemon ): ?>
			<tr>
				<td><?php echo $pokemon['id'] ?></td>
				<td>
					<p>
						<?php echo ($pokemon['vu'] == 0) ? '----------' : $pokemon['nom']; ?>
					</p>
				</td>
				<td>
					<?php if ($pokemon['vu'] == 1) {
						echo '<img src="http://th07.deviantart.net/fs71/PRE/f/2013/060/0/6/pokeball_by_callmefrozenx-d5wm0v9.png" width="50" height="50" alt="Capturé"/>';
					} else {
						echo '<img src="http://www.allodessin.com/tuts/027/dessiner-une-pokeball-027-06.jpg" width="50" height="50" alt="Non-capturé"/>';
					}

					?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>