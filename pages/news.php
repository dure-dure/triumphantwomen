<?php
// Configurations
$githubRepo = 'dure-dure/triumphantwomen'; // Changez avec le nom de votre repo
$githubToken = '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'; // Token d'accès personnel GitHub

// URI de connexion
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
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Vérifier si un fichier a été envoyé
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    // Lire le fichier en tant que chaîne Base64
    $fileContent = file_get_contents($fileTmpPath);
    $base64Content = base64_encode($fileContent);

    // Préparer les données du commit GitHub
    $commitMessage = 'Ajout de l\'image ' . $fileName;
    $filePathInRepo = 'assets/img/' . $fileName; // Chemin du fichier dans le dépôt GitHub

    $postData = json_encode([
        'message' => $commitMessage,
        'content' => $base64Content,
        'path' => $filePathInRepo
    ]);

    $ch = curl_init('https://api.github.com/repos/' . $githubRepo . '/contents/' . $filePathInRepo);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'User-Agent: PHP-CURL',
        'Authorization: token ' . $githubToken,
        'Accept: application/vnd.github.v3+json',
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    var_dump($response);
    var_dump(curl_getinfo($ch, CURLINFO_HTTP_CODE));
    if (strpos($response, '404') !== false) {
        die('Erreur: Le dépôt ou le fichier n\'a pas été trouvé.');
    }

    // Récupérer la description et le thème depuis le formulaire
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $theme = isset($_POST['theme']) ? $_POST['theme'] : '';

    // Préparer et exécuter la requête SQL pour insérer les informations
    try {
        $stmt = $db->prepare("INSERT INTO slideImage (first ,second,file ) VALUES (:description, :theme, :filename)");
        $stmt->bindParam(':filename', $fileName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':theme', $theme);
        $stmt->execute();

        echo 'Image uploadée et enregistrée avec succès.';
        header("Location: AddContent.php?success=1"); // Redirige vers index.php avec un paramètre de succès
        exit(); // Terminer le script après la redirection

    } catch (PDOException $e) {
        die('Erreur lors de l\'insertion dans la base de données : ' . $e->getMessage());
    }
} else {
    echo 'Erreur lors de l\'upload de l\'image.';
}

// Fermer la connexion PDO
$pdo = null;
