<?php
// creare una variabile con un paragrafo di testo
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
//visualizzare a schermo il paragrafo con le relative lunghezze e sostituire la badword
$lunghezza_stringa = strlen($testo);
var_dump($lunghezza_stringa);
// passata in GET con ***
$_GET['badword'];
$sostituzione_stringa = str_replace($_GET, '***', $testo);
echo "$sostituzione_stringa";

?>
