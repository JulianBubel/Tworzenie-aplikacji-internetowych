<?php

if (!isset($_FILES['obrazy'])) {
    die("nie wysłano");
}

$zipName = 'paczka_' . time() . '.zip';
$zipPath = __DIR__ . '/' . $zipName;

$zip = new ZipArchive();

if ($zip->open($zipPath, ZipArchive::CREATE) !== TRUE) {
    die("nie można utworzyć ZIP");
}

foreach ($_FILES['obrazy']['tmp_name'] as $index => $tmpName) {

    if ($_FILES['obrazy']['error'][$index] !== UPLOAD_ERR_OK) {
        continue;
    }

    $originalName = $_FILES['obrazy']['name'][$index];
    $fileTmpPath  = $_FILES['obrazy']['tmp_name'][$index];

    $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    if (!in_array($ext, ['jpg', 'jpeg', 'png'])) {
        continue;
    }

    // Dodatkowa blokada
    if (in_array($ext, ['php', 'exe'])) {
        continue;
    }

    $zip->addFile($fileTmpPath, $originalName);
}

$zip->close();

echo "<a href='$zipName' download>pobierz obrazy w zip</a>";

?>