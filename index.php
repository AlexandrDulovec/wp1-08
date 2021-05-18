<?php

$submit = filter_input (INPUT_POST, 'submit');

if(isset($_POST ['genres']))
$genres = $_POST ['genres'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hry</title>
</head>
<body>
<?php
if(isset($submit)) {
  echo "Formulář byl odeslán <br>";
  //var_dump($genres);
  
  
  foreach ($genres as $genre) {
          echo $genre . "<br>";
  }
} else { ?>
<form action= "index.php" method="post">

<h1>Vyber oblíbené hry</h1>
<br>
<input type="checkbox" id="genre1" name="genres[]" value="Akční">
<label for="akcni">Akční</label><br>
<br>
<input type="checkbox" id="genre2" name="genres[]" value="strilecky">
<label for="strilecky">Střílečky</label><br>
<br>
<input type="checkbox" id="genre3" name="genres[]" value="Dobrodružné">
<label for="dobrodruzne">Dobrodružné</label><br>
<br>
<input type="checkbox" id="genre4" name="genres[]" value="Sportovní">
<label for="sportovni"> Sportovní</label><br>
<br>
<input type="checkbox" id="genre5" name="genres[]" value="Závodní">
<label for="zavodni">Závodní</label><br>
<br>
<input type="checkbox" id="genre6" name="genres[]" value="bojove">
<label for="bojove"> Bojové</label><br>
<br>
<input type="checkbox" id="genre7" name="genres[]" value="Simulátory">
<label for="simulatory">Simulátory</label><br>
<br>
<input type="checkbox" id="genre8" name="genres[]" value="Logické">
<label for="logicke">Logické</label><br>
<br>
<input type="checkbox" id="genre9" name="genres[]" value="Scifi">
<label for="scifi"> Scifi</label><br>
<br>
<input type="checkbox" id="genre10" name="genres[]" value="RPG">
<label for="rpg">RPG</label><br>
<br>
<input type= "submit" value="Odeslat" name="submit">

</form>
<?php } ?>
</body>
</html>