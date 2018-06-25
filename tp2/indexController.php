<?php
//Création des regex pour controler les données rentré dans le formulaire
$nameCheck = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexBadgeNumber = '/^[0-9]+$/';
//Création d'un tableau pour retranscrire les erreurs lord du remplissage du formulaire
$formError = array();
//Nom
//Si le post est rempli alors
if (isset($_POST['lastname'])){
    // Variable lastname qui vérifie que les caractères speciaux soit converti en entité html (protection)
    $lastname = htmlspecialchars($_POST['lastname']);
    // Si la variable lastname ne correspond pas à la regex
    if (!preg_match($nameCheck, $lastname)){
        // J'affiche l'erreur 
        $formError['lastname'] = 'Votre saisie ne doit comporter que des lettres';
   }
   // Si le post lastname n'est pas rempli (donc vide)
    if (empty($_POST['lastname'])){
        // J'affiche l'erreur 
        $formError['lastname'] = 'Information obligatoire';
    }          
}
//Prénom
// Si le post est rempli alors
if (isset($_POST['firstname'])){
    // Variable firstname qui vérifie que les caractères speciaux soient converti en entité html (protection)
    $firstname = htmlspecialchars($_POST['firstname']);
    // Si la variable firstname ne correspond pas à la regex
    if (!preg_match($nameCheck, $firstname)){
        // J'affiche l'erreur
        $formError['firstname'] = 'Votre saisie ne doit comporter que des lettres';
   }
   // Si le post est vide
    if (empty($_POST['firstname'])){
        // J'affiche le message d'erreur
        $formError['firstname'] = 'Information obligatoire';
    }          
}
//Numéro de badge
if (isset($_POST['age'])){
    $age = htmlspecialchars($_POST['age']);
    if (!preg_match($regexBadgeNumber, $age)){
        $formError['age'] = 'Etes vous sûr d\'avoir rentré un nombre';
   }
    if (empty($_POST['age'])){
        $formError['age'] = 'Information obligatoire';
    }          
}

if (isset($_POST['company'])){
    $company = htmlspecialchars($_POST['company']);
    if (empty($_POST['company'])){
        $formError['company'] = 'Information obligatoire';
    }          
}   
?>