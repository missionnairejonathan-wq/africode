# AFRICODE — site vitrine PHP + SQL Server

Application web PHP qui conserve la même structure et la même logique du site AFRICODE, avec un formulaire de contact enregistrable dans une table SQL Server existante.

## Fonctionnalités

- Page d'accueil et sections marketing identiques à la version actuelle
- Formulaire de contact avec envoi AJAX
- Enregistrement des demandes dans `dbo.africode_contacts` (table existante)
- Compatibilité PHP 8+ avec le pilote `sqlsrv`
- Configuration par variables d'environnement, sans identifiants par défaut

## Architecture

- `index.php` : page principale du site
- `config.php` : paramètres de connexion SQL Server
- `database.php` : enregistrement des demandes dans la table existante
- `process_contact.php` : endpoint PHP pour recevoir le formulaire
- `images/` : visuels du site
- `static/` : fichiers statiques

## Configuration SQL Server

L'hébergeur doit fournir PHP 8+, l'extension `sqlsrv` avec le pilote Microsoft ODBC, et un accès réseau à SQL Server. Configure les variables suivantes dans l'environnement PHP ou le panneau de l'hébergeur :

```text
AFRICODE_DB_SERVER=sql.example.com,1433
AFRICODE_DB_NAME=AFRICODE
AFRICODE_DB_USER=africode_app
AFRICODE_DB_PASSWORD=<secret fourni par l'hebergeur>
AFRICODE_DB_ENCRYPT=1
AFRICODE_DB_TRUST_SERVER_CERTIFICATE=0
```

Le chiffrement SQL est activé par défaut. N'utilise `AFRICODE_DB_TRUST_SERVER_CERTIFICATE=1` que si l'hébergeur impose un certificat non validable. Donne au compte SQL uniquement les droits nécessaires à l'insertion.

L'application ne crée ni ne modifie la base ou ses tables; `dbo.africode_contacts` doit déjà exister et correspondre au schéma attendu dans `sql_server_setup.sql`. Le déploiement n'exécute pas ce script. Un hébergement limité à MySQL/MariaDB n'est pas compatible sans migration ou adaptation de la base, non incluse ici.

## Lancement local

1. Démarrer WAMP / XAMPP.
2. Copier le dossier dans le dossier web local.
3. Ouvrir l'URL du projet dans le navigateur.

Exemple :

```text
http://localhost/AFRICODE/
```

## Notes

- L'application conserve la même logique et le même design visuel.
- Les erreurs SQL détaillées sont écrites dans les journaux PHP et ne sont pas renvoyées au navigateur.
- Tester un envoi après avoir configuré les variables et vérifié que le pilote `sqlsrv` est chargé.
