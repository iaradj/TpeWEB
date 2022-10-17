<?php

    class vinilosModel {

        private function connect() {
            $db = new PDO('mysql:host=localhost;'.'dbname=tienda_vinilos;charset=utf8', 'root', '');
            return $db;
        }

        function getVinilos() {
            $db = $this->connect();

            $query = $db->prepare('SELECT * FROM vinilos INNER JOIN generos on vinilos.generosfk = generos.id_g');
            $query->execute();

            return $vinilos = $query->fetchAll(PDO::FETCH_OBJ);
        }

    function getGenerobyId($generos){
            $db = $this->connect();
            $query = $db->prepare('SELECT * FROM vinilos INNER JOIN generos on vinilos.generosfk = generos.id_g WHERE `generosfk`  = ?');
            $query->execute([$generos]);
            return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getGeneroId($generos){
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM generos WHERE `id_g`  = ?');
        $query->execute([$generos]);
        return $query->fetchAll(PDO::FETCH_OBJ);
}

    function getVinilosbyId($id){
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM vinilos INNER JOIN generos on vinilos.generosfk = generos.id_g WHERE `id`  = ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getGeneros(){
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM generos');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function agregarVinilo($vinilo,$artista,$precio,$lanzamiento,$genero){
        $db = $this->connect();
        $query = $db->prepare('INSERT INTO vinilos (vinilo, artista, precio, lanzamiento, generosfk) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$vinilo,$artista,$precio,$lanzamiento,$genero]);
    }

    function modificartabla($vinilo,$artista,$precio,$lanzamiento,$genero,$id){ 
        $db = $this->connect();
        $query = $db->prepare('UPDATE vinilos SET vinilo = ?, artista = ?, precio = ?,  lanzamiento = ?, generosfk = ? WHERE id = ?');
        $query->execute([$vinilo,$artista,$precio,$lanzamiento,$genero,$id]);
    }
   
    function deleteVinilo($id){
        $db =  $this->connect();
        $query = $db->prepare('DELETE FROM vinilos WHERE id = ?');
        $query->execute([$id]);
    }
    function modificarGenero($generos,$id){
        $db =  $this->connect();
        $query = $db->prepare('UPDATE generos SET genero = ? WHERE id_g = ?');
        $query->execute([$generos,$id]);
    }

    function deleteGenero($id) {
        $db =  $this->connect();
        $query = $db->prepare('DELETE FROM generos WHERE id_g = ?');
        $query->execute([$id]);
    }
    function agregarGenero($generos) {
        $db = $this->connect();
        $query = $db->prepare('INSERT INTO generos (genero) VALUES (?)');
        $query->execute([$generos]);
    }
    }