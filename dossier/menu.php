<?php
if (!function_exists('nav_item')) {
    function nav_item(string $lien, string $titre, string $classLink): string {
        $classe = 'nav-item';
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe = $classe . ' ' . 'active';
        }

        return '<li class=" ' . $classe . ' ">
        <a class="' . $classLink .'" href=" '  . $lien . '"> ' . $titre . '</a>
        </li>';
    }
}


?>


<?= nav_item('/index.php', 'Accueil', $class);?>
<?= nav_item('/contact.php', 'Contact', $class);?>