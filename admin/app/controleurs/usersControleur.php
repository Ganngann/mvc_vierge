<?php

  /*
    ../app/controleurs/usersControleur.php
  */

    namespace App\Controleurs\UsersControleur;

    function dashboardAction(\PDO $connexion) {
      GLOBAL $content, $title;
      $title = TITRE_USERS_DASHBOARD;
      ob_start();
        include '../app/vues/users/dashboard.php';
      $content = ob_get_clean();
    }

    function logoutAction() {
      // Je tue la variable de session
      unset($_SESSION['user']);
      // Je redirige vers le formulaire de connexion
      header('location: '. BASE_URL_PUBLIC .'users/login/form');
    }
