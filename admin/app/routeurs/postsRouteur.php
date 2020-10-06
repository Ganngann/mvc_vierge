<?php

  /*
    ./app/routeurs/postsRouteur.php
  */

  use \App\Controleurs\PostsControleur;
  include_once '../app/controleurs/postsControleur.php';

  switch ($_GET['posts']):
    default:
    // LISTE DES POSTS
    // PATTERN: index.php?posts=index
    // CTRL: postsControleur
    // ACTION: index
        PostsControleur\indexAction($connexion);
      break;
  endswitch;
