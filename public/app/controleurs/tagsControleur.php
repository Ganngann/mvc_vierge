<?php

  /*
    ../app/controleurs/tagsControleur.php
  */

    namespace App\Controleurs\Tags;
    use App\Modeles\TagsModele;

    function indexAction(\PDO $connexion) {
      // Je mets dans $tags la liste des 10 derniers tags que je demande au modèle
      include_once '../app/modeles/tagsModele.php';
      $tags = TagsModele\findAll($connexion);

      // Je charge directement la vue index
        include '../app/vues/tags/index.php';
    }

    function showAction(\PDO $connexion, int $id) {
      // Je mets dans $post les infos du post que je demande au modèle
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);

      // Je charge la vue show dans $content
      GLOBAL $content, $title;
      $title = $post['title'];
      ob_start();
        include '../app/vues/posts/show.php';
      $content = ob_get_clean();
    }
