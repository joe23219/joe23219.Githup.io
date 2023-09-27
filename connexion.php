<?php

               $conn=mysqli_connect('localhost','root','','recrutement') or die(mysqli_error());
                   $nom = $_POST["nom"];
                   $prenom = $_POST["Prénom"];
                   $numero = $_POST["numero"];
                   $mail = $_POST["mail"];
                   $req = "INSERT INTO  personnels(nom, Prénom, numero, mail) VALUES('$nom', '$prenom', '$numero', '$mail')";
                   $res=mysqli_query($conn,$req);
                  


                 if ($conn->query($rep) === TRUE) {
                  echo "Enregistrement réussi.";
                  } else {
                  echo "Erreur : " . $req . "<br>" . $conn->error;
                  }

?>