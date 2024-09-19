<?php
session_start();


$uri = "mysql://avnadmin:AVNS_nQWLgfw78Yo-s2EJOWr@mysql-1fe3a468-duredure2402-e1c4.g.aivencloud.com:19845/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
    $connexion = new PDO($conn, $fields["user"], $fields["pass"]);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connexion;
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}