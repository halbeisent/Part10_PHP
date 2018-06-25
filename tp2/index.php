<?php
include 'indexController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 10 TP 1 </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </head>
    <body>
        <h1>PHP Partie 10 TP 1</h1>
        <div class="container">
            <div class="order">
                <p>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :</p>
                <ul>
                    <li>Civilité (liste déroulante)</li>
                    <li>Nom</li>
                    <li>Prénom</li>
                    <li>Âge</li>
                    <li>Société</li>
                </ul>
                <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>
            </div>
        </div>
        <form action="index.php" method="POST">
            <h2>Votre identité</h2>
            <div class="row">
                <div class="input-field col s6">
                    <label for="gender">Civilité</label><br />
                    <select class="gender" name="gender" >
                        <option selected disabled>Civilité</option>
                        <option value="1" <?= (isset($_POST['gender'] ) && $_POST['gender'] == 1) ? 'selected' : ''; ?>>Mr</option>
                        <option value="2" <?= (isset($_POST['gender'] ) && $_POST['gender'] == 2) ? 'selected' : ''; ?>>Mme</option>
                        <option value="3" <?= (isset($_POST['gender'] ) && $_POST['gender'] == 3) ? 'selected' : ''; ?>>Autre</option>
                    </select>
                    <p><?= isset($formError['nationality']) ? $formError['nationality'] : '' ?></p> 
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="lastname">Nom</label><br />
                    <input type="text" name="lastname" id="lastname" placeholder="Nom" value="<?= isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '' ?>" />
                    <p><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></p>
                </div>
                <div class="input-field col s6">
                    <label for="firstname">Prénom</label><br />
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom" value="<?= isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '' ?>" />
                    <p><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="age">Âge</label><br />
                    <input type="number" name="age" id="age" placeholder="0" value="<?= isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '' ?>" />
                    <p><?= isset($formError['age']) ? $formError['age'] : '' ?></p>
                </div>
                <div class="input-field col s6">
                    <label for="company">Société</label><br />
                    <input type="text" name="company" id="company" placeholder="Société" value="<?= isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '' ?>" />
                    <p><?= isset($formError['company']) ? $formError['company'] : '' ?></p>
                </div>
            </div>
            <div class="text-center buttonSend">
                <input type="submit" name="sendForm" value="Envoyer" />
            </div>
        </div>
    </form>
    <?php
    // Si il n'y a pas d'erreur dans le tableau et qu'on valide le formulaire
    if (count($formError) == 0 && isset($_POST['sendForm'])) {
        // J'affiche le resulat                     
        ?>

        <div>
            <h2>Récapitulatif des données saisies</h2>
            <p>Nom : <?= $lastname ?></p>
            <p>Prénom : <?= $firstname ?></p>
            <p>Age: <?= $age ?></p>
            <p>Société: <?= $company ?></p>
        </div>
    <?php } else { ?>

        <?php
    }
    ?>
        <script src="../script.js"></script>
</body>
</html>