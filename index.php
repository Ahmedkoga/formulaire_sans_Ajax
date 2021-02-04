
<?php
include('controller.php');
// style="background-color:#001F29;"
// define variables and set to empty values
// $civilite = $nom = $prenom = $ddNaissance = $pdNaissance = $nationalite = $codePostal = $commune = $rue = $adresse = "";
// $email = $tel = $Diplome = $nDPoleEmploi = $numBadge = $LiensCodecademy = $questionHeros = $questionhakes = $questionExperience = "";
// $civiliteErr = $nomErr = $prenomErr = $ddNaissanceErr = $pdNaissanceErr = $nationaliteErr = $codePostalErr = $communeErr = $rueErr = $adresseErr = "";
// $emailErr = $telErr = $DiplomeErr = $nDPoleEmploiErr = $numBadgeErr = $LiensCodecademyErr = $questionHerosErr = $questionhakesErr = $questionExperienceErr = "";
// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (!isset($_POST["civilite"]) && empty($_POST["civilite"])) {
//         $civiliteErr = "civilité is required";
//       } else {
//         $civilite = test_input($_POST["civilite"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$civilite)) {
//           $civiliteErr = "Only letters and white space allowed";
//         }
//       }
//     if (empty($_POST["nom"])) {
//         $nomErr = "nom is required";
//       } else {
//         $nom = test_input($_POST["nom"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
//           $nomErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["prenom"])) {
//         $prenomErr = "prenom is required";
//       } else {
//         $prenom = test_input($_POST["prenom"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
//           $prenomErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["ddNaissance"])) {
//         $ddNaissanceErr = "Date de naissance is required";
//       } else {
//         $ddNaissance = test_input($_POST["ddNaissance"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g",$ddNaissance)) {
//           $ddNaissanceErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["pdNaissance"] && $_POST["pdNaissance"] == NULL)) {
//         $pdNaissanceErr = "Pays de naissance is required";
//       } else {
//         $pdNaissance = test_input($_POST["pdNaissance"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$pdNaissance)) {
//           $pdNaissanceErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["nationalite"])) {
//         $nationaliteErr = "Nationalité is required";
//       } else {
//         $pdnationalite = test_input($_POST["nationalite"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$nationalite)) {
//           $nationaliteErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["codePostal"])) {
//         $codePostalErr = "Code Postal is required";
//       } else {
//         $codePostal = test_input($_POST["codePostal"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$codePostal)) {
//           $codePostalErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["commune"])) {
//         $communeErr = "commune is required";
//       } else {
//         $commune = test_input($_POST["commune"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$commune)) {
//           $communeErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["rue"])) {
//         $rueErr = "rue is required";
//       } else {
//         $rue = test_input($_POST["rue"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$rue)) {
//           $rueErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["adresse"])) {
//         $adresseErr = "adresse is required";
//       } else {
//         $adresse = test_input($_POST["adresse"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$adresse)) {
//           $adresseErr = "Only letters and white space allowed";
//         }
//       }
    
//       if (empty($_POST["email"])) {
//         $emailErr = "Email is required";
//       } else {
//         $email = test_input($_POST["email"]);
//       }
//       if (empty($_POST["tel"])) {
//         $telErr = "télephone is required";
//       } else {
//         $tel = test_input($_POST["tel"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$tel)) {
//           $telErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["Diplome"])) {
//         $DiplomeErr = "Diplome is required";
//       } else {
//         $Diplome = test_input($_POST["Diplome"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$Diplome)) {
//           $DiplomeErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["nDPoleEmploi"])) {
//         $nDPoleEmploiErr = "Numero de Pole Emploi is required";
//       } else {
//         $nDPoleEmploi = test_input($_POST["nDPoleEmploi"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$nDPoleEmploi)) {
//           $nDPoleEmploiErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["numBadge"])) {
//         $numBadgeErr = "Numero de Badge is required";
//       } else {
//         $numBadge = test_input($_POST["numBadge"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$numBadge)) {
//           $numBadgeErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["LiensCodecademy"])) {
//         $LiensCodecademyErr = "Liens Codecademy is required";
//       } else {
//         $LiensCodecademy = test_input($_POST["LiensCodecademy"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$LiensCodecademy)) {
//           $LiensCodecademyErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["questionHeros"])) {
//         $questionHerosErr = "reponse is required";
//       } else {
//         $questionHeros = test_input($_POST["questionHeros"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$questionHeros)) {
//           $questionHerosErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["questionhakes"])) {
//         $questionhakesErr = "reponse is required";
//       } else {
//         $questionhakes = test_input($_POST["questionhakes"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$questionhakes)) {
//           $questionhakesErr = "Only letters and white space allowed";
//         }
//       }
//       if (empty($_POST["questionExperience"])) {
//         $questionExperienceErr = "reponse is required";
//       } else {
//         $questionExperience = test_input($_POST["questionExperience"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$questionExperience)) {
//           $questionExperienceErr = "Only letters and white space allowed";
//         }
//       }
//     }
    ?>
  