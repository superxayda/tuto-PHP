<?php
function nav_item(string $lien, string $titre, string $classLink): string {
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe . ' ' . 'active';
    }

    return '<li class=" ' . $classe . ' ">
    <a class="' . $classLink .'" href=" '  . $lien . '"> ' . $titre . '</a>
    </li>';
}
    




function nav_menu(string $classLink = '') : string {
    return
        nav_item('/index.php', 'Accueil', $classLink) .
        nav_item('/contact.php', 'Contact', $classLink);

}
?>