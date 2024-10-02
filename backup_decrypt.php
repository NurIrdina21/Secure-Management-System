<?php
// Function to decrypt data using AES-256-CBC
function decryptData($data, $encryptionKey) {
    $key = base64_decode($encryptionKey);
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2), 2, null);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

// Function to restore the backup from an encrypted file
function restoreEncryptedBackup($encryptedBackupFilePath, $restoredFilePath, $encryptionKey) {
    // Read the contents of the encrypted backup file
    $encryptedData = file_get_contents($encryptedBackupFilePath);

    // Decrypt the data
    $decryptedData = decryptData($encryptedData, $encryptionKey);

    // Write the decrypted data to the restored file path
    if (file_put_contents($restoredFilePath, $decryptedData) === false) {
        echo "Failed to write decrypted data to restored file: $restoredFilePath\n";
        return false;
    }

    echo "Decryption and restoration completed successfully. Restored file: $restoredFilePath\n";
    return true;
}

// Directory containing encrypted backups
$backupDir = 'C:/xampp/htdocs/dans1/backups';

// Directory to save restored files
$restoreDir = 'C:/xampp/htdocs/dans1/restored';

// Ensure the restore directory exists
if (!is_dir($restoreDir)) {
    mkdir($restoreDir, 0755, true);
}


$encryptionKey = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';

// List of backup files to decrypt
$backupFiles = [
    'manager login.php.bak',
    'employee login.php.bak',
    'finance officer login.php.bak',
    'update employee profile.php.bak',
    'update manager profile.php.bak',
    'update finance officer profile.php.bak',
    'customphone.sql.bak',
];

// Decrypt each backup file in the list
foreach ($backupFiles as $backupFile) {
    $encryptedBackupFilePath = $backupDir . '/' . $backupFile;
    $restoredFilePath = $restoreDir . '/' . basename($backupFile, '.bak');
    restoreEncryptedBackup($encryptedBackupFilePath, $restoredFilePath, $encryptionKey);
}
?>
