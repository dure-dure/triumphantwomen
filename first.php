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

  $stmt = $db->query("SELECT VERSION()");

//--------------------TEST--------------------
//   $stmt = $db->query("CREATE TABLE slideImage (
//     id INT AUTO_INCREMENT PRIMARY KEY,  
//     first LONGTEXT,           
//     second VARCHAR(255) NOT NULL,
//     file VARCHAR(255) NOT NULL,                
//     date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP );
// ");

// $stmt = $db->query("DELETE FROM utilisateur WHERE email='triumphantwomenint@gmail.com'");
// $stmt = $db->query("TRUNCATE TABLE slideImage");

// $stmt = $db->query("INSERT INTO slideImage (first, second, file)
// VALUES ('Most wonderful online Master Class by Triumphant Women . lead by Prophetess Deborah TSOGBE.', ' Divine destiny', 'TW-Zoom3.png');");

// $stmt = $db->query("INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, date_naissance)
// VALUES ('TSOGBE', 'Deborah', 'triumphantwomenint@gmail.com', '#Triumphant24', '1990-05-15');
// ");
// if ($stmt->rowCount() > 0) {
//     // Récupérer et afficher les résultats ligne par ligne
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo "ID: " . $row["id"] . " - Nom: " . $row["nom"] . " - Prénom: " . $row["prenom"] . " - Email: " . $row["email"] . " - Date de Naissance: " . $row["date_naissance"] . "</br>";
//     }
// } else {
//     echo "0 résultats";
// }

  print($stmt->fetch()[0]);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}