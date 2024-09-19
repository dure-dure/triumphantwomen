<?php
session_start();
print($_POST['email']);
print($_POST['mot_de_passe']);

if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    
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
        print("________________________________________");
        print($fields["user"]);
        print($fields["pass"]);
        // Définir le mode d'erreur de PDO pour qu'il lance des exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Impossible de se connecter à la base de données : ' . $e->getMessage());
    }



    // On applique htmlspecialchars pour éviter les attaques XSS
    $username = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['mot_de_passe']);
    
    if ($username !== "" && $password !== "") {
        // Préparation de la requête SQL
        $stmt = $db->prepare("SELECT * FROM utilisateur WHERE email = ? AND mot_de_passe= ? ");
        // Exécution de la requête avec les paramètres
        $stmt->execute([$username,$password]);
        print("--------------------------------------");
        print($stmt->fetch()[0]);
        // Récupération du résultat
        // $hashed_password_from_db = $stmt->fetchColumn();
        // echo "---------------------------";
        // echo $hashed_password_from_db;
        // echo "---------------------------";

        // if ($hashed_password_from_db && password_verify($password, $hashed_password_from_db)) {
        if ($stmt->rowCount() >0) {
            // Nom d'utilisateur et mot de passe corrects
            $_SESSION['email'] = $username;
            header('Location: ..//material-kit-master/indexLog.php');
            exit();
        } else {
            header('Location: ../material-kit-master/pages/sign-in.php?erreur=1'); // Email ou mot de passe incorrect
            exit();
            
        }
    } else {
        header('Location: ../material-kit-master/pages/sign-in.php?erreur=2'); // Email ou mot de passe vide
        exit();
    }
} else {
    header('Location: ../material-kit-master/index.php');
    exit();
}
