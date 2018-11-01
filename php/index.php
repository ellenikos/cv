
      <!--*****************ENVOI PAR MAIL*****************--> 
<?php

$headers ='From:'."\n"; 

$headers .='Reply-To: jeromeroncq@hotmail.fr'."\n"; 
      $headers .='Content-Type: text/html; charset="utf-8"'."\n";
      $headers .='Content-Transfer-Encoding: 8bit';
      $destinataire = $_POST['mail']; 
      $sujet = 'Infos '.$libelle; ini_set("SMTP","192.168.92.15" ); if(mail($destinataire, $sujet, $message, $headers))
      { $message .= 'Le message a été envoyé'; } 
      
    else { $message .= 'Le message n\'a pu être envoyé'; } ?>
    ?>

