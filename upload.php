<?php 
// In PHP kleiner als 4.1.0 sollten Sie $HTTP_POST_FILES anstatt 
// $_FILES verwenden.

$uploaddir = '/Users/luk/Cloud/Server/htdocs/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File uploaded...\n";
} else {
    echo "Upload failed...\n";
}

print_r($_FILES);

print "</pre>";

?>
