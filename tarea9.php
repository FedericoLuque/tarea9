<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DWES: Tarea 9</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 20px;
            }

            h1 {
                color: #333;
            }

            p {
                font-style: italic;
                color: #666;
            }
        </style>
    </head>
    <body>
        <h1> Pokémons </h1>
        <?php
            //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $bulbasaur_json = file_get_contents('https://pokeapi.co/api/v2/pokemon/bulbasaur');
             // Se decodifica el fichero JSON y se convierte a objeto
            $bulbasaur = json_decode($bulbasaur_json);
			//Metemos la url del pokemon en una variable
			$imagen_bulbasaur = $bulbasaur->sprites->front_default;
			//Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $charmander_json = file_get_contents('https://pokeapi.co/api/v2/pokemon/charmander');
             // Se decodifica el fichero JSON y se convierte a objeto
            $charmander = json_decode($charmander_json);
			//Metemos la url del pokemon en una variable
			$imagen_charmander = $charmander->sprites->front_default;
			$squirtle_json = file_get_contents('https://pokeapi.co/api/v2/pokemon/squirtle');
             // Se decodifica el fichero JSON y se convierte a objeto
            $squirtle = json_decode($squirtle_json);
			//Metemos la url del pokemon en una variable
			$imagen_squirtle = $squirtle->sprites->front_default;
        ?>
		<form method="post">
		<button type="submit" name="mostrarImagenBulbasaur">Bulbasaur</button>
		<button type="submit" name="mostrarImagenCharmander">Charmander</button>
		<button type="submit" name="mostrarImagenSquirtle">Squirtle</button>
		</form>
		<?php
			// Verificar si se ha hecho clic en el botón
			if (isset($_POST['mostrarImagenBulbasaur'])) {
			// Mostrar la imagen de Bulbasaur en una etiqueta
			echo '<img src="' . $imagen_bulbasaur . '" alt="Imagen de Bulbasaur">';
			}
			// Verificar si se ha hecho clic en el botón
			if (isset($_POST['mostrarImagenCharmander'])) {
			// Mostrar la imagen de Bulbasaur en una etiqueta
			echo '<img src="' . $imagen_charmander . '" alt="Imagen de charmander">';
			}// Verificar si se ha hecho clic en el botón
			if (isset($_POST['mostrarImagenSquirtle'])) {
			// Mostrar la imagen de Bulbasaur en una etiqueta
			echo '<img src="' . $imagen_squirtle . '" alt="Imagen de squirtle">';
			}
		?>
    </body>
</html>
