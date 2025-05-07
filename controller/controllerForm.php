<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = htmlspecialchars($_POST['login']);
        $motdepasse = htmlspecialchars($_POST['motdepasse']);

        $motdepasseCrypte = password_hash($motdepasse, PASSWORD_DEFAULT);

        echo "<p>Nom : $login</p>";
        echo "<p>Mot de passe crypté :  $motdepasseCrypte</p>";
    }
    ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $admin = isset($_POST['admin']) ? 1 : 0;

        print "<p>Valeur à enregistrer en base : " . $admin."</p>";
    }
?>