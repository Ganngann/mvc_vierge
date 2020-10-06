<?php

  /*
    ../app/controleurs/postsControleur.php
  */

    namespace App\Controleurs\PostsControleur;
    use \App\Modeles\PostsModele;

    function indexAction(\PDO $connexion) {
      include_once '../app/modeles/postsModele.php';
      $posts = PostsModele\findAll($connexion);

      GLOBAL $content, $title;
      $title = TITRE_POSTS_INDEX;
      ob_start();
        include '../app/vues/posts/index.php';
      $content = ob_get_clean();
    }
