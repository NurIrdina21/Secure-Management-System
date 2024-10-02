<?php
// Function to encrypt data using AES-256-CBC
function encryptData($data, $encryptionKey) {
    $key = base64_decode($encryptionKey);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

// Function to create an encrypted backup of a file
function createEncryptedBackup($filePath, $backupDir, $encryptionKey) {
    $fileName = basename($filePath);
    $backupFilePath = $backupDir . '/' . $fileName . '.bak';

    // Read the contents of the original file
    if (!is_file($filePath)) {
        echo "File not found: $filePath\n";
        return false;
    }

    $data = file_get_contents($filePath);
    if ($data === false) {
        echo "Failed to read file: $filePath\n";
        return false;
    }

    // Encrypt the data
    $encryptedData = encryptData($data, $encryptionKey);

    // Write the encrypted data to the backup file
    if (file_put_contents($backupFilePath, $encryptedData) === false) {
        echo "Failed to create backup file for: $filePath\n";
        return false;
    }

    echo "Backup created for: $filePath\n";
    return true;
}

// Directory to save backups
$backupDir = 'C:/xampp/htdocs/dans1/backups';

// Ensure the backup directory exists
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0755, true);
}


$encryptionKey = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';

// List of files to encrypt
$filesToEncrypt = [
    'C:/xampp/htdocs/dans1/manager login.php',
    'C:/xampp/htdocs/dans1/employee login.php',
    'C:/xampp/htdocs/dans1/finance officer login.php',
    'C:/xampp/htdocs/dans1/update employee profile.php',
    'C:/xampp/htdocs/dans1/update manager profile.php',
    'C:/xampp/htdocs/dans1/update finance officer profile.php',
    'C:/xampp/htdocs/dans1/customphone.sql',
];

// Encrypt each file in the list
foreach ($filesToEncrypt as $filePath) {
    createEncryptedBackup($filePath, $backupDir, $encryptionKey);
}
?>
