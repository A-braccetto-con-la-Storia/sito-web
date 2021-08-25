<?

    /**
     * Definisce i blocchi di codice ricorrenti nelle pagine
     */

    $path = $_SERVER['DOCUMENT_ROOT'].'/templates/src/';

    //footer
    $footer = file_get_contents($path."footer.html");
    //navbar
    require_once $path.'navbar.php';

?>