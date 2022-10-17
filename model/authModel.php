<?php
class authModel {

private $db;

private function connect() {
    $db = new PDO('mysql:host=localhost;'.'dbname=login;charset=utf8', 'root', '');
    return $db;
}

public function getUserByEmail($email) {
    $db = $this->connect();
    $query = $db->prepare("SELECT * FROM logeate WHERE email = ?");
    $query->execute([$email]);
    return $query->fetch(PDO::FETCH_OBJ);
}

}