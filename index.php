<?php
  // Ceci est un commentaire - UNI LIGNE

  /* 
        Ceci est un commentaire - MULTI LIGNE
      */

  // Afficher du texte 
  echo "Hello World";

  // ---------- VARIALBES ----------
  $string = "Ayhan";    //string
  $number = 1977;       //integer
  $float = 2010;        //float
  $bool = true;         //boolean

  // Convention 
  $agePersonnage = 32;  //camelcase
  $age_string = "38";

  // Concatenation
  $hello = "Hello";
  $world = "World";

  echo $hello . " " . $world . ", comment allez-vous ?";

  // Opérateurs & logique matématique 
  $nbr1 = 20;
  $nbr2 = 4;
  echo 4 + 2;
  echo 4 - 2;
  echo 4 / 2;
  echo 4 * 2;
  echo $nbr1 + $nbr2;

  $operationCalcul = ((5 * 5) / 5) + 158;
  // $operationCalcul = $operationCalcul / 5;
  $operationCalcul *= 2;    // Reprendre le résultat et le traiter
  echo $operationCalcul;

  $count = 1;
  $count++;                 //incrimente de 1
  echo $count;


  // ---------- TABLEAUX ----------
  // cette façon de faire avec l'ajout d'une key et sa valeur est le plus utilisé car sql fonctionne ainsi
  $idendite = array(
    // 'key' => 'valeur'; 
    'id'      => 0,
    "prenom"  => "Ayhan",
    "age"     => 24,
    "code"    => true,
  );
  echo $idendite['id'];
  echo $idendite['prenom'];
  echo 'Bonjour' . " " . $idendite["prenom"] . " !";

  //  cette façon de faire est la manière classique de créer des tableaux (moins utilisé en backend)
  $idenditeB = array(1, "Elias");
  echo $idenditeB[1];

  // ---------- STRUCTURE DE CONTROLE ----------
  // condition IF ELSEIF IF
  $data = 20;
  if ($data > 18) {
    echo "Vous êtes majeur !";
  } elseif ($data === 18) {
    echo "Vous êtes enfin majeur !";
  } else {
    echo "Vous êtes mineur !";
  }

  // condition IF multiples
  $pseudo = "Admin";
  $mdp = "azerty";
  if ($pseudo == "Admin" && $mdp == "azerty") {    // condition 1 ET condition 2
    echo "Mot de passe valide. (condition AND)";
  }
  if ($pseudo == "Admin" || $mdp == "azerty") {    // condition 1 OU condition 2
    echo "Mot de passe valide. (condition OR)";
  }

  // condition ternaire
  $ternaire = 10;
  echo $ternaire % 2 == 0 ? "pair" : "false";

  // contition switch
  $notes = 20;
  switch ($notes) {
    case 0:
      echo 'Vous avez raté ! ';
      break;
    case 10:
      echo 'Vous avez réussi de justesse';
      break;
    case 20:
      echo 'Vous avez réussi !';
      break;
    default:
      echo "ERROR";
      break;
  }

  echo "<br /> <br />";
  // ---------- BOUCLES ----------
  // while
  $ligne = 0;
  while ($ligne < 10) {
    echo 'Voici le numéro de ligne : ' . $ligne . "<br />";
    $ligne++;
  }
  // for
  for ($i = 0; $i < 10; $i++) {
    echo 'Voici le numéro de ligne : ' . $i . "<br />";
  }
  // foreach
  $user = array("Ayhan", "Elias", "Cactus", "Nicolas");
  foreach ($user as $item) {   // comprend qu'il doit boucler sur les index
    echo $item . "<br />";
  }

  $personnage = array(
    'prenom'  => "Ayhan",
    "age"     => 23,
    "code"    => true,
  );
  foreach ($personnage as $key => $value) {   // on récupère les keys + la valeur de chaque données 
    echo "key : " . $key . " | " . "value :" . $value . "<br />";
  }

  // ---------- FONCTION ----------
   function formule($x, $y)
  {
    $temp = $x * $y;
    $temp /= 5;
    $temp = $x + $temp - ($x + $y);
    return $temp;
  }
  $resultat = formule(10, 25);
  echo $resultat;

  // fonction native
  // méthode string
  $ma_phrase = 'Bienvenue sur mon compte Github ! ';
  echo 'Nombre de caractères : ' . strlen($ma_phrase);  //compte le nbr de caractère
  echo 'Phrase transformé : ' . str_replace('Bienvenue', 'Welcome', $ma_phrase);  // remplace un mot ciblé
  echo strtolower($ma_phrase);  // transforme en minuscule
  echo strtoupper($ma_phrase);  // transforme en majuscule
  echo substr($ma_phrase, 0, 9); // coupe la chaine de caractère

  // méthode math
  echo abs(-82);  // retourne la valeur absolue de la donnée
  echo max(4, 7, 2, 8, 7);  // retourne la plus grande valeur
  echo min(4, 7, 2, 8, 7);  // retourne la plus petite valeur
  echo rand(0,10);  // génére un nombre aléatoire
  echo round(2157.5575, 2); // arroundi le nombre

  // méthode tableau
  $array = array("Ayhan", "Elias", "Cactus");
  $array_two = array_flip($array);      // permuter entre la key et la valeur
  echo $array_two["Ayhan"]; // me répond zéro
  
  if (array_key_exists(0, $array)) {  // vérifie si la key existe dans mon tableau
      echo "Yes";
  }

  echo count($array);  //compte le nbr d'élèment dans mon tableau

  sort($array);  //réarange par ordre aphabétique 
  foreach ($array as $name) {
    echo $name; // test pour montrer le résultat de la méthode sort()
  }

?>



<!-- exercices d'introduction 
    1. Créer plusieurs variables de différents type

    2. Faire un tableau (id, prenom, nom, age)
    Afficher l'age de la personne dans 50 ans 
      -> Bonjour PRENOM NOM ! Dans 50ans vous auez x ans. 
    3. Créer un tableau (personnage) et boucle dessus afin d'afficher la key et la valeur du personnage

    4. Copier le code ci-dessous et analyser le résultat ! (tableau à double dimmension)
      // ---------------------------------------------------      
      // TABLEAUX DE MULTIPLICITE ( tableau à double dimmension)
      // echo '<table border style="border-collapse: collapse;">
      //       <tr>
      //         <th></th>
      //         <th>1</th>
      //         <th>2</th>
      //         <th>3</th>
      //         <th>4</th>
      //         <th>5</th>
      //         <th>6</th>
      //         <th>7</th>
      //         <th>8</th>
      //         <th>9</th>
      //         <th>10</th>
      //       </tr>';

      // for ($i = 1; $i <= 10; $i++) {
      //   echo '<tr>';
      //   echo '<th>' . $i . '</th>';

      //   for ($j = 1; $j <= 10; $j++) {
      //     echo '<td>' . $i * $j . '</td>';
      //   }

      //   echo '</tr>';
      // }
      // ---------------------------------------------------

      5. Refaire les méthodes strings comme dans l'exemple et trouver en d'autres via la documentation
      5. Refaire les méthodes maths comme dans l'exemple et trouver en d'autres via la documentation
      5. Refaire les méthodes array comme dans l'exemple et trouver en d'autres via la documentation
-->

