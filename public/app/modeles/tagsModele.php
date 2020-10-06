<?php

  /*
    ../app/modeles/tagsModele.php
  */

    namespace App\Modeles\TagsModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *
              FROM tags
              ORDER BY name ASC;";
      $rs = $connexion->query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    function findOneById(\PDO $connexion, int $id) :array {
      $sql = "SELECT *
              FROM posts
              WHERE id = :id;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return $rs->fetch(\PDO::FETCH_ASSOC);
    }
