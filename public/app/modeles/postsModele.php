<?php

  /*
    ../app/modeles/postsModele.php
  */

    namespace App\Modeles\PostsModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *
              FROM posts
              JOIN posts_has_tags ON posts.id = posts_has_tags.post_id
              JOIN tags ON tags.id = posts_has_tags.tag_id
              ORDER BY posts.created_at DESC
              LIMIT 10;";
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
