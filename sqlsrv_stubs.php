<?php

if (!defined('SQLSRV_PARAM_IN')) {
    define('SQLSRV_PARAM_IN', 1);
}

if (!function_exists('sqlsrv_connect')) {
    function sqlsrv_phptype_string(?string $encoding = null): string
    {
        return '';
    }

    function sqlsrv_connect(string $serverName, array $connectionInfo = []): mixed
    {
        return false;
    }

    function sqlsrv_close(mixed $connection): bool
    {
        return false;
    }

    function sqlsrv_prepare(mixed $connection, string $sql, array $params = [], array $options = []): mixed
    {
        return false;
    }

    function sqlsrv_execute(mixed $statement): bool
    {
        return false;
    }

    function sqlsrv_free_stmt(mixed $statement): bool
    {
        return false;
    }

    function sqlsrv_errors(): array|false
    {
        return false;
    }
}