<?php
/**
 * On peut personnaliser le resultat du require en renseignant ces options:
 * -title : Personnalise le titre de la page (le h1)
 * -article : Permet d'ajouter du code avant le menu de navigation
 * -style : permet d'ajouter du style interne directement dans le head
 * -creation : permet de personnaliser la date de creation    (YYYY-MM-DD)
 * -lastUpdate : permet de personnaliser la date de la derniere mise a jour    (YYYY-MM-DD)
 */

$title = "Navi'go";
require './include/header.inc.php';
require './include/functions.inc.php';

?>
<?php
    echo nasaAPOD();
?>

<?php
$lastUpdate = "2024-03-14";
$creation = "2024-03-13";
require './include/footer.inc.php';
?>
