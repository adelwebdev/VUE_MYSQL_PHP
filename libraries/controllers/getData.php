<!-- ici on intèrpréte les lists en Js -->
<!-- on va dans controllers et getData (donc obtenir la data) et là on va taper du php (seul truc en php) -->

<?php

require_once (dirname(__DIR__).'/models/Wines.php');

$model = new Wines();
$sql = $model->list();

var_dump($sql);
// echo $sql; car on fait un var_dump à la place de echo $sql (echo ne renvoit pas)

echo json_encode($sql->fetchAll());

?>

<!-- faut verifier si getData marche!! aller dans le navigateur et taper: -->
<!-- et taper : http://127.0.0.1/vuejs-php-starting_file/libraries/controllers/getData.php  -->
<!-- notre db doit apparaitre dans le navigateur!! ça signifie notre db est bien configuré -->
<!-- maintenant on va aller chercher Vue.js !!!! son sdn sur son site et le coller dans layout.html.php-->
<!-- maintenant on travaille dans layout.html.php -->