<?php
/**
 * Configuration de connexion SQL Server pour AFRICODE.
 * Configure les variables d'environnement sur le serveur d'hebergement.
 */

$africodeDbServer = getenv('AFRICODE_DB_SERVER') ?: 'mysql-africode.alwaysdata.net';
$africodeDbName = getenv('AFRICODE_DB_NAME') ?: 'africode_africode';
$africodeDbUser = getenv('AFRICODE_DB_USER') ?: 'africode_jonathan';
$africodeDbPassword = getenv('AFRICODE_DB_PASSWORD') ?: 'joanna@10?1';

function africode_db_connect(): mixed
{
    global $africodeDbServer, $africodeDbName, $africodeDbUser, $africodeDbPassword;

    if (!extension_loaded('sqlsrv')) {
        error_log('AFRICODE: the PHP sqlsrv extension is not installed.');
        return false;
    }

    if ($africodeDbServer === '' || $africodeDbName === '' || $africodeDbUser === '' || $africodeDbPassword === '') {
        error_log('AFRICODE: one or more required database environment variables are missing.');
        return false;
    }

    $encrypt = getenv('AFRICODE_DB_ENCRYPT');

    $connectionInfo = [
        'Database' => $africodeDbName,
        'UID' => $africodeDbUser,
        'PWD' => $africodeDbPassword,
        'CharacterSet' => 'UTF-8',
        'Encrypt' => $encrypt === false ? true : filter_var($encrypt, FILTER_VALIDATE_BOOLEAN),
        'TrustServerCertificate' => filter_var(getenv('AFRICODE_DB_TRUST_SERVER_CERTIFICATE') ?: '0', FILTER_VALIDATE_BOOLEAN),
        'LoginTimeout' => 10,
    ];

    $conn = sqlsrv_connect($africodeDbServer, $connectionInfo);
    if ($conn === false) {
        error_log('AFRICODE: SQL Server connection failed.');
    }

    return $conn ?: false;
}
