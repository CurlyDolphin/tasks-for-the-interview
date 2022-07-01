<?php

$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];

$file = fopen($fileTmpPath, 'r+');

$text = $fileName . ',Привет';
if (fwrite($file, $text)) {
    echo 'Успешная запись';
}
fclose($file);

$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));

$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

if (in_array($fileExtension, $allowedfileExtensions)) {
    $uploadFileDir = './uploads/';
    $dest_path = $uploadFileDir . $fileName;

    move_uploaded_file($fileTmpPath, $dest_path);
}
