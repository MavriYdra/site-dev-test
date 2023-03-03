<!DOCTYPE html>
<html>
<head>
	<title>Réponses du Sondage</title>
</head>
<body>

	<h1>Réponses du Sondage</h1>

	<?php
		// Vérifier si le formulaire a été soumis
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Récupérer la réponse à la question 1
			$fruit = $_POST["fruit"];

			// Récupérer les réponses à la question 2
			$couleurs = $_POST["couleur"];

			// Récupérer la réponse à la question 3
			$animal = $_POST["animal"];

			// Afficher les réponses
			echo "<p>Votre fruit préféré est : " . $fruit . "</p>";

			if (!empty($couleurs)) {
				echo "<p>Vos couleurs préférées sont : " . implode(", ", $couleurs) . "</p>";
			}

			echo "<p>Votre animal préféré est : " . $animal . "</p>";
		}
	?>

</body>
</html>
