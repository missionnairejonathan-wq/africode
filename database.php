<?php
require_once __DIR__ . '/sqlsrv_stubs.php';
require_once __DIR__ . '/config.php';

function africodeSaveContact(array $data): array
{
    $conn = africode_db_connect();
    if ($conn === false) {
        return [
            'success' => false,
            'message' => 'Connexion SQL Server indisponible. Vérifiez la configuration de la base.',
        ];
    }

    $name = trim((string)($data['name'] ?? ''));
    $phone = trim((string)($data['phone'] ?? ''));
    $email = trim((string)($data['email'] ?? ''));
    $need = trim((string)($data['need'] ?? ''));
    $message = trim((string)($data['message'] ?? ''));

    if ($name === '' || $phone === '' || $need === '' || $message === '') {
        sqlsrv_close($conn);
        return [
            'success' => false,
            'message' => 'Les champs nom, téléphone, besoin et message sont obligatoires.',
        ];
    }

    $params = [
        [$name, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING('UTF-8')],
        [$phone, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING('UTF-8')],
        [$email !== '' ? $email : null, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING('UTF-8')],
        [$need, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING('UTF-8')],
        [$message, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STRING('UTF-8')],
    ];

    $sql = "INSERT INTO dbo.africode_contacts (name, phone, email, need, message) VALUES (?, ?, ?, ?, ?);";
    $stmt = sqlsrv_prepare($conn, $sql, $params);

    if ($stmt === false) {
        error_log('AFRICODE: SQL Server statement preparation failed: ' . print_r(sqlsrv_errors(), true));
        sqlsrv_close($conn);
        return [
            'success' => false,
            'message' => 'Erreur de préparation de la requête SQL Server.',
        ];
    }

    $executed = sqlsrv_execute($stmt);
    if ($executed === false) {
        error_log('AFRICODE: SQL Server contact insert failed: ' . print_r(sqlsrv_errors(), true));
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
        return [
            'success' => false,
            'message' => 'Enregistrement impossible. Veuillez réessayer plus tard.',
        ];
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);

    return [
        'success' => true,
        'message' => 'Votre demande a bien été enregistrée.',
    ];
}
