<?php

  /*
    ./app/routeurs/usersRouteur.php
  */

  use \App\Controleurs\UsersControleur;
  include_once '../app/controleurs/usersControleur.php';

  switch ($_GET['users']):
    case 'loginForm':
    // FORMULAIRE DE LOGIN
    // PATTERN: index.php?users=loginForm
    // CTRL: usersControleur
    // ACTION: loginForm
        UsersControleur\loginFormAction($connexion);
      break;
    case 'login':
    // CONNEXION
    // PATTERN: index.php?users=login
    // CTRL: usersControleur
    // ACTION: login
        UsersControleur\loginAction($connexion, [
          'login' => $_POST['login'],
          'password' => $_POST['password']
        ]);
  endswitch;
