<?php

if (isset($_POST['user_name'], $_POST['user_email'], $_POST['sujet'], $_POST['user_phone'], $_POST['user_message'])) {
    echo 'Merci ' . htmlspecialchars($_POST['user_name']) . ' de nous avoir contacté à propos de <strong>' . htmlspecialchars($_POST['sujet']) . '</strong>';
    echo '<br>Un de nos conseiller vous contactera soit à l’adresse ' . htmlspecialchars($_POST['user_email']) . ' ou par téléphone au ' . htmlspecialchars($_POST['user_phone']) . ' dans les plus brefs délais pour traiter votre demande : ' . htmlspecialchars($_POST['user_message']);
} else {
    header('Location: index.php');
}
