<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rémi Willebrouck</title>
</head>
<body>
<?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['_replyto'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('willremi@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['_replyto']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
</body>
</html>