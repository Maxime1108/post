<?php

// Les cookies 

// $_COOKIE est la superglobale qui contiendra les cookies qu'on a enregistrée 

// Recuperer le cookie 

// Si on clique sur un lien contenant le paramètre langue
isset($_COOKIE['langue']) ? var_dump($_COOKIE['langue']) : '';
echo '<br>';
var_dump($_GET);
if (isset($_GET['langue'])) {
    // On créer une variable langue qui prendra la valeur du paramètre cliqué
    $langue = $_GET['langue'];
    // création d'un cookie
    $un_an = 365 * 24 * 60 * 60;
    setcookie('langue', $langue, time() + $un_an);
} else if (isset($_COOKIE['langue'])) {
    $langue = $_COOKIE['langue'];
} else {
    $langue = 'fr';
}


// pour supprimer un cookie soit on met une date perimée, soit on le met à 0
// var_dump($_COOKIE['langue']);
?>
<h2>La langue actuelle est : <?= $langue ?></h2>
<div>
    <?php
    if (isset($_COOKIE['langue'])) {
        if ($_COOKIE['langue'] == 'it') {
            echo '<h1> 
    Scegli la tua lingua </h1>';
        } else if ($_COOKIE['langue'] == 'en') {
            echo '<h1> Pick your language </h1>';
        } else if ($_COOKIE['langue'] == 'ru') {
            echo '<h1> Выберите свой язык </h1>';
        } else if ($_COOKIE['langue'] == 'fr') {
            echo '<h1> Choisissez votre langue </h1>';
        }
    } else {
        echo '<h1> Choisissez votre langue </h1>';
    }
    ?>
    <ul>
        <!-- on laisse avant le '?' vide pour signifier que la requête ciblera la page actuelle, le ? signifie que l'on va envoyer un ou des paramètres  -->

        <!-- Ici on lui envoie un paramètre qui s'appelle langue et qui aura comme valeur fr -->
        <li><a href="?langue=fr">Français</a></li>
        <li><a href="?langue=en">Anglais</a></li>
        <li><a href="?langue=it">Italien</a></li>
        <li><a href="?langue=ru">Russe</a></li>
    </ul>
</div> 