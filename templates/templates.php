<?

    /**
     * Definisce i blocchi di codice ricorrenti nelle pagine
     */

    $path = $_SERVER['DOCUMENT_ROOT'].'/templates/src/';

    //footer
    $footer = file_get_contents($path."footer.html");
    //navbar
    $navbar = file_get_contents($path."navbar.html");

?>