<?php
// define variables and set to empty values
$civilite = $nom = $prenom = $ddNaissance = $pdNaissance = $nationalite = $codePostal = $commune = $rue = $adresse = "";
$email = $tel = $Diplome = $nDPoleEmploi = $numBadge = $LiensCodecademy = $questionHeros = $questionhakes = $questionExperience = "";
$civiliteErr = $nomErr = $prenomErr = $ddNaissanceErr = $pdNaissanceErr = $nationaliteErr = $codePostalErr = $communeErr = $rueErr = $adresseErr = "";
$emailErr = $telErr = $DiplomeErr = $nDPoleEmploiErr = $numBadgeErr = $LiensCodecademyErr = $questionHerosErr = $questionhakesErr = $questionExperienceErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['civilite']) && !empty($_POST['civilite'])) {
        $civilite = test_input($_POST["civilite"]);
        if (filter_var($civilite, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z-'_.]*$/", $civilite)) {
            $civiliteErr = "Only letters and white space allowed";
        } else {
            echo $_POST['civilite'] . '<br>';
        }
    } else {
        $civiliteErr = "Veuillez sélectionner et saisir un des champs.

";
    }

    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        $nom = test_input($_POST["nom"]);
        if (filter_var($nom, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z-' ]*$/", $nom)) {
            $nomErr = "Only letters and white space allowed";
        } else {
            echo $nom . '<br>';
        }
    } else {
        $nomErr = "Veuillez sélectionner et saisir un des champs.

";
    }

    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $prenom = test_input($_POST["prenom"]);
        if (filter_var($prenom, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z-' ]*$/", $prenom)) {
            $prenomErr = "Only letters and white space allowed";
        } else {
            echo $prenom . '<br>';
        }
    } else {
        $prenomErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['ddNaissance']) && !empty($_POST['ddNaissance'])) {
        $ddNaissance = test_input($_POST["ddNaissance"]);
        if (filter_var($ddNaissance, FILTER_SANITIZE_STRING) && !preg_match('~^\d{4}\-\d{2}\-\d{2}$~', $ddNaissance)) {
            $ddNaissanceErr = "Only letters and white space allowed";
        } else {
            echo $ddNaissance . '<br>';
        }
    } else {
        $ddNaissanceErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['pdNaissance']) && !empty($_POST['pdNaissance']) && $_POST['pdNaissance'] != 'NULL') {
        $pdNaissance = test_input($_POST["pdNaissance"]);
        if (filter_var($pdNaissance, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z-'_éèàçâô]*$/", $pdNaissance)) {
            $pdNaissanceErr = "Only letters and white space allowed";
        } else {
            echo $pdNaissance . '<br>';
        }
    } else {
        $pdNaissanceErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['nationalite']) && !empty($_POST['nationalite'])) {
        $nationalite = test_input($_POST["nationalite"]);
        if (filter_var($nationalite, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z-'_éèàçâô]*$/", $nationalite)) {
            $nationaliteErr = "Only letters and white space allowed";
        } else {
            echo $nationalite . '<br>';
        }
    } else {
        $nationaliteErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['codePostal']) && !empty($_POST['codePostal'])) {
        $codePostal = test_input($_POST["codePostal"]);
        if (filter_var($codePostal, FILTER_SANITIZE_NUMBER_INT) && !preg_match("~^\d{5}$~", $codePostal)) {
            $codePostalErr = "Only letters and white space allowed";
        } else {
            echo $codePostal . '<br>';
        }
    } else {
        $codePostalErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['commune']) && !empty($_POST['commune']) && $_POST['commune'] != 'NULL') {
        $commune = test_input($_POST["commune"]);
        if (filter_var($commune, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z-'_]*$/", $commune)) {
            $communeErr = "Only letters and white space allowed";
        } else {
            echo $commune . '<br>';
        }
    } else {
        $communeErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['rue']) && !empty($_POST['rue'])) {
        $rue = test_input($_POST["rue"]);
        if (filter_var($rue, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z0-9-' ]*$/", $rue)) {
            $rueErr = "Only letters and white space allowed";
        } else {
            echo $rue . '<br>';
        }
    } else {
        $rueErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['adresse']) && !empty($_POST['adresse'])) {
        $adresse = test_input($_POST["adresse"]);
        if (filter_var($adresse, FILTER_SANITIZE_STRING) && !preg_match("/^[a-zA-Z0-9-' ]*$/", $adresse)) {
            $adresseErr = "Only letters and white space allowed";
        } else {
            echo $adresse . '<br>';
        }
    } else {
        $adresseErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = test_input($_POST["email"]);
        if (filter_var($email, FILTER_SANITIZE_EMAIL) && !preg_match("~^[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}$~", $email)) {
            $emailErr = "Only letters and white space allowed";
        } else {
            echo $email . '<br>';
        }
    } else {
        $emailErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['tel']) && !empty($_POST['tel'])) {
        $tel = test_input($_POST["tel"]);
        if (filter_var($tel, FILTER_SANITIZE_NUMBER_INT) && !preg_match('~^\d{10}$~', $tel)) {
            $telErr = "Only letters and white space allowed";
        } else {
            echo $tel . '<br>';
        }
    } else {
        $telErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['Diplome']) && !empty($_POST['Diplome']) && $_POST['Diplome'] != 'NULL') {
        $Diplome = test_input($_POST["Diplome"]);
        if (filter_var($Diplome, FILTER_SANITIZE_EMAIL) && !preg_match("/^[A-Za-z0-9[:punct:]]{2,300}$/", $Diplome)) {
            $DiplomeErr = "Only letters and white space allowed";
        } else {
            echo $Diplome . '<br>';
        }
    } else {
        $DiplomeErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['nDPoleEmploi']) && !empty($_POST['nDPoleEmploi'])) {
        $nDPoleEmploi = test_input($_POST["nDPoleEmploi"]);
        if (filter_var($nDPoleEmploi, FILTER_SANITIZE_STRING) && !preg_match("/^[A-Za-z0-9]{2,300}$/", $nDPoleEmploi)) {
            $nDPoleEmploiErr = "Only letters and white space allowed";
        } else {
            echo $nDPoleEmploi . '<br>';
        }
    } else {
        $nDPoleEmploiErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['numBadge']) && !empty($_POST['numBadge']) && $_POST['numBadge'] != 'NULL') {
        $numBadge = test_input($_POST["numBadge"]);
        if (filter_var($numBadge, FILTER_SANITIZE_NUMBER_INT) && !preg_match("/^[0-9]{1,300}$/", $numBadge)) {
            $numBadgeErr = "Only letters and white space allowed";
        } else {
            echo $numBadge . '<br>';
        }
    } else {
        $numBadgeErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['LiensCodecademy']) && !empty($_POST['LiensCodecademy'])) {
        $LiensCodecademy = test_input($_POST["LiensCodecademy"]);
        if (filter_var($LiensCodecademy, FILTER_SANITIZE_STRING) && !preg_match("/^[A-Za-z0-9[:punct:]]{2,300}$/", $LiensCodecademy)) {
            $LiensCodecademyErr = "Only letters and white space allowed";
        } else {
            echo $LiensCodecademy . '<br>';
        }
    } else {
        $LiensCodecademyErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['questionHeros']) && !empty($_POST['questionHeros'])) {
        $questionHeros = test_input($_POST["questionHeros"]);
        if (filter_var($questionHeros, FILTER_SANITIZE_STRING) && !preg_match("/^[A-Za-z0-9[:punct:]]{2,300}$/", $questionHeros)) {
            $questionHerosErr = "Only letters and white space allowed";
        } else {
            echo $questionHeros . '<br>';
        }
    } else {
        $questionHerosErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['questionhakes']) && !empty($_POST['questionhakes'])) {
        $questionhakes = test_input($_POST["questionhakes"]);
        if (filter_var($questionhakes, FILTER_SANITIZE_STRING) && !preg_match("/^[A-Za-z0-9[:punct:]]{2,300}$/", $questionhakes)) {
            $questionhakesErr = "Only letters and white space allowed";
        } else {
            echo $questionhakes . '<br>';
        }
    } else {
        $questionhakesErr = "Veuillez sélectionner et saisir un des champs.

";
    }
    if (isset($_POST['questionExperience']) && !empty($_POST['questionExperience'])) {
        $questionExperience = test_input($_POST["questionExperience"]);
        if (filter_var($questionExperience, FILTER_SANITIZE_STRING) && !preg_match("/^[A-Za-z0-9[:punct:]]{2,300}$/", $questionExperience)) {
            $questionExperienceErr = "Only letters and white space allowed";
        } else {
            echo $questionExperience . '<br>';
        }
    } else {

        $questionExperienceErr = "Veuillez sélectionner et saisir un des champs.

";
    }
}
function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha31212-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr12RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container" style="background-image: url(digital.jpg); color: white;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="text">

            <div name="civilite">
                <i class="far fa-address-card fa-5x col-lg-4 col-md-4 col-12"></i>
                <div class="form-check form-check-inline col-lg-4 col-md-3 col-5">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" <?php if (isset($civilite) && $civilite =="Madame") echo "checked";?> value="Madame">Madame
                    </label>

                </div>
                <div class="form-check form-check-inline col-lg-3 col-md-4 col-5">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" <?php if (isset($civilite) && $civilite=="Monsieur") echo "checked";?> value="Monsieur">Monsieur
                    </label>
                </div>
            </div>
            <span class="error">* <?php echo $civiliteErr; ?></span>
            <div class="form-group row mb-3">
                <label for="nom" class="col-md-12 col-12 col-form-label"><i class="fas fa-user"> Nom</i></label>
                <div class="col-md-12 col-12">
                    <input type="text" class="form-control" id="nom" name="nom"  placeholder="Votre Nom" value="<?php if(isset($nom)){echo $nom;} ?>">
                </div>
                <span class="error">* <?php echo $nomErr; ?></span>
            </div>
            <div class="form-group row mb-3">
                <label for="prenom" class="col-md-12 col-12 col-form-label"><i class="fas fa-user"> Prenom</i></label>
                <div class="col-md-12 col-12">
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prenom" value="<?php if(isset($prenom)){echo $prenom;} ?>">
                    <span class="error">* <?php echo $prenomErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="ddNaissance" class="col-md-12 col-12 col-form-label"><i class="fas fa-calendar-check"> Date de naissance</i></label>
                <div class="col-md-12 col-12">
                    <input class="form-control" type="date" name="ddNaissance" id="ddNaissance" value="<?php if(isset($ddNaissance)){echo $ddNaissance;} ?>">
                    <span class="error">* <?php echo $ddNaissanceErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="pdNaissance" class="col-md-12 col-12 col-form-label"><i class="fas fa-globe-americas"> Pays de naissance</i></label>
                <div class="col-md-12 col-12">
                    <select class="form-control" name="pdNaissance" value="<?php if(isset($pdNaissance)){echo $pdNaissance;} ?>">
                        <option value="NULL"><?php if(isset($pdNaissance)&& $pdNaissance != NULL){echo $pdNaissance;}else{echo 'Pays';} ?></option>
                        <option value="Allemagne">Allemagne</option>
                        <option value="Belgique">Belgique</option>
                        <option value="Espagne">Espagne</option>
                        <option value="France">France</option>
                        <option value="Italie">Italie</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Algerie">Algérie</option>
                        <option value="suede">suède</option>
                    </select>
                    <span class="error">* <?php echo $pdNaissanceErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nationalite" class="col-md-12 col-12 col-form-label"><i class="fas fa-flag"> Nationalité</i></label>
                <div class="col-md-12 col-12">
                    <input type="text" class="form-control" id="nationalite" name="nationalite" placeholder="votre Nationalité" value="<?php if(isset($nationalite)){echo $nationalite;} ?>">
                    <span class="error">* <?php echo $nationaliteErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="codePostal" class="col-md-12 col-12 col-form-label"><i class="fas fa-map-marker-alt"> Adresse</i></label>
                <div class="mb-3 col-md-6 col-12">
                    <input type="text" class="form-control" id="codePostal" name="codePostal" placeholder="Code postal" value="<?php if(isset($codePostal)){echo $codePostal;} ?>">
                    <span class="error">* <?php echo $codePostalErr; ?></span>

                </div>
                <div class="form-group mb-3 col-md-6 col-12">
                    <select class="form-control" name="commune" value="<?php if(isset($commune)){echo $commune;} ?>">
                        <option value="NULL">Sélectionner une commune</option>
                        <option value="AMIENS">AMIENS</option>
                        <option value="ALLONVILLE">ALLONVILLE</option>
                        <option value="BERTANGLES">BERTANGLES</option>
                        <option value="BOVES">BOVES</option>
                        <option value="CAGNY">CAGNY</option>
                        <option value="CAMON">CAMON</option>yy
                        <option value="DURY">DURY</option>
                        <option value="GLISY">GLISY</option>
                        <option value="LONGUEAU">LONGUEAU</option>
                    </select>
                    <span class="error">* <?php echo $communeErr; ?></span>
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <input type="text" class="form-control" id="rue" name="rue" placeholder="Numéro, type et libellé de la voie" value="<?php if(isset($rue)){echo $rue;} ?>">
                    <span class="error">* <?php echo $rueErr; ?></span>
                </div>
                <div class="mb-3 col-md-6 col-12">
                    <input type="text" class="form-control" id="adresse" name="adresse" value="<?php if(isset($adresse)){echo $adresse;} ?>" placeholder="Compléments destination. Ex: n° d'appartement ou la boite aux lettres Champ facultatif">
                    <span class="error">* <?php echo $adresseErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="email" class="col-md-12 col-12 col-form-label"><i class="fas fa-paper-plane"> Email</i></label>
                <div class="col-md-12 col-12">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Exemple@gamil.fr" value="<?php if(isset($email)){echo $email;} ?>">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </div>
            </div>

            <div class="form-group row mb-3" style="display: flex;">
                <label for="tel" class="col-md-12 col-12 col-form-label"><i class="fas fa-mobile-alt"> Téléphone</i></label>
                <div class="col-md-12 col-12">
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="1-(555)-555-5555" value="<?php if(isset($tel)){echo $tel;} ?>">
                    <span class="error">* <?php echo $telErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="Diplome" class="col-md-12 col-12 col-form-label">
                    <class class="fas fa-stamp"> Diplôme</class>
                </label>
                <div class="form-group">
                    <select class="form-control col-md-12 col-12" name="Diplome" value="<?php if(isset($Diplome)){echo $Diplome;} ?>">
                        <option value="NULL"><?php if(isset($Diplome)&& $Diplome != NULL){echo $Diplome;}else{echo 'Diplôme';} ?></option>
                        <option value="CAP">CAP</option>
                        <option value="Bac">Bac</option>
                        <option value="Bac+2">Bac+2</option>
                        <option value="Bac+3">Bac+3</option>
                        <option value="superieur">supérieur</option>
                        <option value="sans">sans</option>
                    </select>
                    <span class="error">* <?php echo $DiplomeErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nDPoleEmploi" class="col-md-12 col-12 col-form-label"><i class="fas fa-building"> Numéro pôle emploi</i></label>
                <div class="col-md-12 col-12">
                    <input type="text" class="form-control" id="nDPoleEmploi" name="nDPoleEmploi" placeholder="Numéro pôle emploi" value="<?php if(isset($nDPoleEmploi)){echo $nDPoleEmploi;} ?>">
                    <span class="error">* <?php echo $nDPoleEmploiErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="Diplome" class="col-md-12 col-12 col-form-label"><i class="fas fa-id-badge"> Nombre de badge</i></label>
                <div class="form-group">
                    <select class="form-control col-md-12 col-12" name="numBadge">
                        <option value="NULL"><?php if(isset($numBadge)&& $numBadge != NULL){echo $numBadge;}else{echo 'Nombre de badge';} ?></option>
                        <?php for ($i = 1; $i <= 10; $i++) {
                            echo '<option value".$numBadge.">' . $i . '</option>';
                        } ?>
                    </select>
                    <span class="error">* <?php echo $numBadgeErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="LiensCodecademy" class="col-md-12 col-12 col-form-label"><i class="fas fa-link"> Liens codecademy</i></label>
                <div class="col-md-12 col-12">
                    <input type="text" class="form-control" id="LiensCodecademy" name="LiensCodecademy" placeholder="Liens codecademy" value="<?php if(isset($LiensCodecademy)){echo $LiensCodecademy;} ?>">
                    <span class="error">* <?php echo $LiensCodecademyErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="questionHeros" class="col-6 col-md-6 col-12 col-form-label"><i class="fas fa-question-circle"> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</i></label>
                <div class="col-6 col-md-6 col-12">
                    <textarea class="form-control" id="questionHeros" name="questionHeros" value="<?php if(isset($questionHeros)){echo $questionHeros;} ?>" placeholder="  Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?"></textarea>
                    <span class="error">* <?php echo $questionHerosErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3 col-md-mb-1">
                <label for="questionhakes" class="col-6 col-md-6 col-12 col-form-label"><i class="fas fa-question-circle"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</i></label>
                <div class="col-6 col-md-6 col-12">
                    <textarea class="form-control" id="questionhakes" name="questionhakes" value="<?php if(isset($questionhakes)){echo $questionhakes;} ?>" placeholder="  Racontez-nous un de vos ' hacks ' (pas forcément technique ou informatique)"></textarea>
                    <span class="error">* <?php echo $questionhakesErr; ?></span>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="questionExperience" class="col-6 col-md-6 col-12 col-form-label"><i class="fas fa-question-circle"> Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</i></label>
                <div class="col-6 col-md-6 col-12">
                    <textarea class="form-control" id="questionExperience" name="questionExperience" value="<?php if(isset($questionExperience)){echo $questionExperience;} ?>" placeholder="  Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?"></textarea>
                    <span class="error">* <?php echo $questionExperienceErr; ?></span>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-50 mb-5"><i class="fas fa-paper-plane"> Valider</i></button>
            </div>

        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>