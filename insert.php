<?php

$uri = "mysql://avnadmin:AVNS_nQWLgfw78Yo-s2EJOWr@mysql-1fe3a468-duredure2402-e1c4.g.aivencloud.com:19845/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
  $db = new PDO($conn, $fields["user"], $fields["pass"]);

  //--------------------INSERTION--------------------
  // $stmt = $db->query("SELECT * FROM utilisateur");
  $stmt = $db->query("SELECT * FROM slideImage ORDER BY id DESC");
  // $stmt = $db->query("SELECT mot_de_passe FROM utilisateur WHERE email ='john.doe@example.com'");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // Affichage des résultats
  if ($results) {
    foreach ($results as $row) {
        echo '<pre>';
        print_r($row);  // Affiche chaque ligne du résultat
        echo '</pre>';
    }
  } else {
    echo 'Aucun résultat trouvé.';
  }
  
  // $plain_password = '#Triumphant24'; // Mot de passe en clair
  // // Hachage du mot de passe
  // $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

  // $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, date_naissance)
  //       VALUES ('TSOGBE', 'Deborah', 'triumphantwomenint@gmail.com', :mot_de_passe, '1990-05-15')";
  // $stmt = $db->prepare($sql);
  // $stmt->execute([
  //   ':mot_de_passe' => $hashed_password,
  // ]);

//   $stmt = $db->query("INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, date_naissance)
// VALUES ('TSOGBE', 'Deborah', 'triumphantwomenint@gmail.com', '#Triumphant24', '1990-05-15')");

// print($stmt->fetch()[0]);
 
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}