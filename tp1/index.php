<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Partie 10 TP1 PHP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link rel="stylesheet" href="../style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </head>
    <body>
        <h1>Partie 10 TP1 PHP</h1>
        <?php
        // On initialise la variable $displayForm à true pour afficher le formulaire au chargement
        $displayForm = True;
        if (isset($_POST['submit'])) {
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $birthday = $_POST['birthday'];
            $birthcountry = $_POST['birthcountry'];
            $nationality = $_POST['nationality'];
            $postalAddress = $_POST['postalAddress'];
            $mailAddress = $_POST['mailAddress'];
            //Cette regEx va vérifier l'indicatif national du numéro de téléphone puis que le numéro est vaide et comporte bien en tout 8 chiffres
            $phonePattern = '/^(\+33|0033|0)(6|7)[0-9]{8}$/g';
            $phoneNumber = $_POST['phoneNumber'];
            $diplomaList = array(1 => 'Aucun', 2 => 'Bac', 3 => 'Bac+2', 4 => 'Bac+3', 5 => 'Supérieur');
            $selectedDiploma = $diplomaList[$_POST['diplomaSelector']];
            $workSeekerID = $_POST['workSeekerID'];
            $codecademyURL = $_POST['codecademyURL'];
            $superpower = $_POST['superpower'];
            $lifeHack = $_POST['lifeHack'];
            $devExperience = $_POST['devExperience'];
            ?>
            <!-- Une fois la validation du formulaire effectuée, on affiche ce message et on cache le formulaire -->
            <p>Bonjour <?= $lastname, $firstname; ?>, tu es né le <?= $birthday; ?> à <?= $birthcountry; ?> et tu possèdes la nationalité <?= $nationality; ?>.
                Tu habites à cette adresse <?= $postalAddress; ?> ton adresse mail est <?= $mailAddress; ?> et ton numéro de téléphone est le <?= $phoneNumber; ?>
                Ton niveau d'études est <?= $selectedDiploma; ?>, ton identifiant pôle emploi est le <?= $workSeekerID; ?> et ton URL codecademy est <?= $codecademyURL; ?>
            </p>
            <p>Ton test de personnalité a révélé les éléments suivants:
                Si tu étais un super héros, ton super pouvoir serait <?= $superpower; ?>, ton petit lifeHack préféré est <?= $lifeHack; ?> et a précédente expérience de dev est <?= $devExperience; ?>
            </p>
            <?php
            $displayForm = False;
        } else { ?>
            <div class="row">
                <form class="col s12" method="POST" action="index.php">
                    <fieldset>
                        <legend>Votre identité</legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="lastname" name="lastname" type="text" />
                                <label for="lastname">Nom</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="firstname" name="firstname" type="text" />
                                <label for="firstname">Prénom</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="birthday" name="birthday" type="date" />
                                <label for="birthday">Date de naissance</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="birthcountry" name="birthcountry" type="text" />
                                <label for="birthcountry">Pays de naissance</label>
                            </div>
                                <div class="input-field col s4">
                                    <input id="nationality" name="nationality" type="text" />
                                    <label for="nationality">Nationalité<label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="postalAddress" name="postalAddress" type="text" />
                                    <label for="postalAddress">Adresse</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="mailAddress" name="mailAddress" type="email" />
                                    <label for="mailAddress">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="phoneNumber" name="phoneNumber" type="text" />
                                    <label for="phoneNumber">Téléphone</label>
                                </div>
                            </div>
                    </fieldset>
                    <fieldset>
                            <legend>Vos informations professionnelles</legend>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select id="qualifications" name="diplomaSelector" >
                                        <option value="0" disabled selected>Diplôme</option>
                                        <option value="1">Aucun</option>
                                        <option value="2">Bac</option>
                                        <option value="3">Bac+2</option>
                                        <option value="4">Bac+3</option>
                                        <option value="5">Supérieur</option>
                                    </select>
                                    <label for="qualifications">Niveau d'études</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="workSeekerID" name="workSeekerID" type="text" />
                                    <label for="workSeekerID">Numéro pôle emploi</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="codecademyURL" name="codecademyURL" type="text" />
                                    <label for="codecademyURL">Lien codecademy</label>
                                </div>
                            </div>
                    </fieldset>
                    <fieldset>
                            <legend>Votre personnalité</legend>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="superpower" class="materialize-textarea" name="superpower" ></textarea>
                                    <label for="superpower">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="lifeHack" class="materialize-textarea" name="lifeHack" ></textarea>
                                    <label for="lifeHack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="devExperience" class="materialize-textarea" name="devExperience" ></textarea>
                                    <label for="devExperience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                </div>
                            </div>
                    </fieldset>
                        <input class="waves-effect waves-light btn" type="submit" name="submit" value="Valider le formulaire" />
                    </form>
                </div>
        <?php } ?>
    </body>
        <script src="../script.js"></script>
</html>