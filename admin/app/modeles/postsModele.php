<?php

  /*
    ./app/modeles/postsModele.php
  */

    namespace App\Modeles\PostsModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *
              FROM posts p
              JOIN authors a ON p.author_id = a.id
              ORDER BY p.created_at DESC;";
      $rs = $connexion->query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    function findOneById(\PDO $connexion, int $id) {
      $sql = "SELECT *
              FROM categories
              WHERE id = :id;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_STR);
      $rs->execute();
      return $rs->fetch(\PDO::FETCH_ASSOC);
    }

    function insert(\PDO $connexion, array $data = null) {
      $sql = "INSERT INTO categories
              SET name = :name,
                  created_at = CURRENT_TIMESTAMP();";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
      $rs->execute();
      return $connexion->lastInsertId();
    }

    function delete(\PDO $connexion, int $id) {
      $sql = "DELETE FROM categories
              WHERE id = :id;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      return intval($rs->execute());
    }

    function update(\PDO $connexion, array $data = null) {
      $sql = "UPDATE categories
              SET name = :name,
                  created_at = CURRENT_TIMESTAMP()
              WHERE id = :id;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
      $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
      $rs->execute();
      return intval($rs->execute());
    }
