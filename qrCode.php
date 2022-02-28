<?php

include './phpqrcode/qrlib.php';

  if (isset($_POST['Url'], $_POST['name'])) {
      //$Directory pas besoin
      // purifier mes données
      $Url = htmlspecialchars(trim($_POST['Url']));
      $name = htmlspecialchars(trim($_POST['name']));

      // Mettre en minuscule

      $Url = strtolower($Url);
      $name = strtolower($name);

      // Supprimer les espaces
      $Url = str_replace(' ', '', $Url);
      $name = str_replace(' ', '', $name);

      // Nom du Fichier
      $filename = $name.'.png';

      // génération du Qr code
      if (!file_exists($filename)) {
        QRcode::png($Url,$filename);
        $succes = "Fichier générer💪🎉✨⭐🎊🏆 ";
      }else{
        $errors = "Fichier déjà généré ! ❌ ";
      }


  }
   