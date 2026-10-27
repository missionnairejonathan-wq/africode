-- Script SQL Server pour AFRICODE
-- 1) Créer la base si elle n'existe pas
IF DB_ID('AFRICODE') IS NULL
BEGIN
    CREATE DATABASE AFRICODE;
END;
GO

USE AFRICODE;
GO

-- 2) Créer la table pour stocker les demandes de contact
IF OBJECT_ID('dbo.africode_contacts', 'U') IS NULL
BEGIN
    CREATE TABLE dbo.africode_contacts (
        id INT IDENTITY(1,1) PRIMARY KEY,
        name NVARCHAR(255) NOT NULL,
        phone NVARCHAR(50) NOT NULL,
        email NVARCHAR(255) NULL,
        need NVARCHAR(255) NOT NULL,
        message NVARCHAR(MAX) NOT NULL,
        created_at DATETIME2 NOT NULL DEFAULT SYSUTCDATETIME()
    );
END;
GO

-- 3) Vérification rapide
SELECT TOP 10 * FROM dbo.africode_contacts;
GO
