<?php

  /*
    ./app/routeur.php
  */

  if (isset($_GET['posts'])):
    include '../app/routeurs/postsRouteur.php';

  elseif (isset($_GET['categories'])):
    include '../app/routeurs/categoriesRouteur.php';

  elseif (isset($_GET['user'])):
    include '../app/routeurs/usersRouteur.php';

  else:
    include '../app/controleurs/usersControleur.php';
    \App\Controleurs\UsersControleur\dashboardAction($connexion);
  endif;
