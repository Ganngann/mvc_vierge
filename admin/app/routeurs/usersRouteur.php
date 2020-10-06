<?php

  /*
    ./app/routeurs/usersRouteur.php
  */

  use \App\Controleurs\UsersControleur;
  include_once '../app/controleurs/usersControleur.php';

  switch ($_GET['user']):
    case 'logout':
    // DECONNEXION DU USER
    // PATTERN: index.php?user=logout
    // CTRL: userControleur
    // ACTION: logout
        UsersControleur\logoutAction($connexion);
      break;
  endswitch;
