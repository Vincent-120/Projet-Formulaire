<form method="get" action="">
    <h1>contact: </h1>
	<label for="nom">nom:</label>
    <input type="text" name="nom">
    <label for="prénom">prénom:</label>
	<input type="text" name="prénom">
    <label for="age">age:</label>
	<input type="number" name="age">
    <label>Sexe : </label> <input method="get" type="radio" name="sexe" value="homme"> H <input method="get" type="radio" name="sexe" value="femme"> F
    <label for="email">email</label>
    <input type="text" name="email">
  <br>
  
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

if ((isset($_GET['age']))&&(isset($_GET['sexe']))&&(isset($_GET['nom']))){

}
?>