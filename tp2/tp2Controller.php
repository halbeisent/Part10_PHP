<?php
$genderList = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autre');
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexAge = '/^[0-9]+$/';

//Prénom
// Si le post est remplis
if (isset($_POST['firstname'])){
    // On protège l'input en convertissant les caractères html en texte basique
    $firstname = htmlspecialchars($_POST['firstname']);
    // Si la variable $firstname ne correspond pas à la regex
    if (!preg_match($regexName, $firstname)){
        // J'affiche le message
        $formError['firstname'] = 'Ce n\'est pas un prénom valide';
   }
   // Si le post est vide
    if (empty($_POST['firstname'])){
        // J'affiche le message
        $formError['firstname'] = 'Champ obligatoire';
    }          
}

//Nom
//Si le post est rempli alors
if (isset($_POST['lastname'])){
    // On protège l'input en convertissant les caractères html en texte basique
    $lastname = htmlspecialchars($_POST['lastname']);
    // Si la variable $lastname ne correspond pas à la regex
    if (!preg_match($regexName, $lastname)){
        // J'affiche le message
        $formError['lastname'] = 'Ce n\'est pas un prénom valide';
   }
   // Si mon post est vide
    if (empty($_POST['lastname'])){
        // J'affiche le message
        $formError['lastname'] = 'Champ obligatoire';
    }          
}


//Numéro de l'âge
if (isset($_POST['ageNumber'])){
    $age = htmlspecialchars($_POST['ageNumber']);
    if (!preg_match($regexAge, $age)){
        $formError['age'] = 'Etes vous sûr d\'avoir rentré un nombre';
   }
    if (empty($_POST['age'])){
        $formError['age'] = 'Champ obligatoire';
    }          
}
?>