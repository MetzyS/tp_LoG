<?php

class Connexion
{
    private static $dsn = "mysql:host=localhost;dbname=lord_of_geek;charset=utf8";
    private static $username = "root";
    private static $password = "";
    private static $pdo;

    public static function getPdo()
    {
        if (Connexion::$pdo == null) {
            Connexion::$pdo = new PDO(Connexion::$dsn, Connexion::$username, Connexion::$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return Connexion::$pdo;
    }

    public static function query(string $requete_sql)
    {
        return Connexion::getPdo()->query($requete_sql);
    }

    public static function exec(string $requete_sql)
    {
        return Connexion::getPdo()->exec($requete_sql);
    }
}
