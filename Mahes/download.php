<?php
// download.php - Gestionnaire de téléchargement
$allowed_files = [
    'brochure_complete' => [
        'path' => 'brochures/brochure_complete.pdf',
        'name' => 'EduManager_Brochure_Complete.pdf',
        'type' => 'application/pdf'
    ],
    'presentation' => [
        'path' => 'brochures/presentation.pptx',
        'name' => 'EduManager_Presentation.pptx',
        'type' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation'
    ]
];

if (isset($_GET['file']) && array_key_exists($_GET['file'], $allowed_files)) {
    $file = $allowed_files[$_GET['file']];
    
    // Vérifier si le fichier existe
    if (file_exists($file['path'])) {
        // Headers pour forcer le téléchargement
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $file['type']);
        header('Content-Disposition: attachment; filename="' . $file['name'] . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file['path']));
        
        // Lire le fichier et l'envoyer au navigateur
        readfile($file['path']);
        exit;
    } else {
        // Fichier non trouvé - redirection vers une page d'erreur
        header('Location: brochure.php?error=file_not_found');
        exit;
    }
} else {
    // Fichier non autorisé - redirection
    header('Location: brochure.php?error=invalid_file');
    exit;
}