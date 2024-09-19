<?php
header('Content-Type: application/json');

// Configuration
$token = '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'; 
$repo = 'dure-dure/triumphantwomen'; 
// Récupérer le chemin du fichier à supprimer
$data = json_decode(file_get_contents('php://input'), true);
$filePath = $data['path'] ?? null;
$fileName = $data['fileName'] ?? null;

if ($filePath && $fileName) {
    // Étape 1 : Supprimer de la base de données
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
        $stmt = $db->prepare("DELETE FROM slideImage WHERE file = :nom_image");
        $stmt->execute(['nom_image' => $fileName]);
        // Étape 2 : Obtenir le SHA du fichier pour la suppression
        $sha = obtenirShaFichier($token, $repo, $filePath);
        
        if ($sha) {
            // Étape 3 : Supprimer le fichier du dépôt GitHub
            $resultat = supprimerFichierGithub($token, $repo, $filePath, $sha);
            
            echo json_encode(['success' => true]);

        } else {
            echo json_encode(['success' => false, 'message' => 'Fichier non trouvé sur GitHub']);
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

} else {
    echo json_encode(['success' => false, 'message' => 'Chemin du fichier manquant']);
}

    function supprimerFichierGithub($token, $repo, $path, $sha) {
        $url = "https://api.github.com/repos/$repo/contents/$path";

        $data = [
            'message' => 'Supprimer le fichier',
            'sha' => $sha,
            'path' => $path
        ];

        $options = [
            'http' => [
                'header'  => [
                    "Authorization: token $token",
                    "User-Agent: PHP-Script",
                    "Content-Type: application/json"
                ],
                'method'  => 'DELETE',
                'content' => json_encode($data),
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return $result;
    }

    function obtenirShaFichier($token, $repo, $path) {
        $url = "https://api.github.com/repos/$repo/contents/$path";
        $options = [
            'http' => [
                'header' => [
                    "Authorization: token $token",
                    "User-Agent: PHP-Script"
                ],
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result, true)['sha'] ?? null; // Retourne le SHA ou null
    }   
?>
