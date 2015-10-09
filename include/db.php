<?php
 require 'plugins/NotORM.php';
            /* Database Configuration */
            $dbhost   = 'localhost';
            $dbuser   = 'root';
            $dbpass   = '';
            $dbname   = 'school';
            $dbmethod = 'mysql:dbname=';

            $dsn = $dbmethod.$dbname;
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $db = new NotORM($pdo);
?>

