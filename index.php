<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php
      // Creare una variabile con un paragrafo di testo.
      // Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la
      // badword passata in GET con tre *.

      // testo iniziale
      $testo = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      // per calcolare il numero di parole del testo
      $n_parole_testo = str_word_count($testo);
      // per calcolare il numero di caratteri del testo
      $n_caratteri_testo = (strlen($testo)-1);
    ?>

    <h3>Testo</h3>
    <p><?php echo $testo ?></p>
    <p>Numero di parole del testo: <?php echo $n_parole_testo ?></p>
    <p>Numero di caratteri totali del testo: <?php echo $n_caratteri_testo ?></p>

    <?php
      //mi faccio una copia del testo iniziale
      $testo_copy = $testo;
      // prendo la badword inserita
      $parola_da_censurare = $_GET['badword'];
      // se l'utente ha inserito una badword visualizzo il tutto, altrimenti nulla, rimane solo il testo senza modifiche
      if(strlen($parola_da_censurare) > 0){
        // per vedere se la parola che ha inserito l'utente è presente nel testo
        if(strpos($testo_copy, $parola_da_censurare)){
          $testo_copy = str_replace($parola_da_censurare, '***', $testo_copy);
          echo '<br><br><h3>Testo modificato con la parola da censurare</h3>' . $testo_copy;
        } else {
          echo 'La parola inserita non esiste nel testo';
        }
      }
    ?>
  </body>
</html>
