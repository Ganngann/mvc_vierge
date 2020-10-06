<?php

  /*
    ../app/controleurs/usersControleur.php
  */

    namespace App\Controleurs\UsersControleur;
    use App\Modeles\UsersModele;

    function loginFormAction(\PDO $connexion) {
      if (isset($_SESSION['user'])):
        header('location: '. BASE_URL_ADMIN);
      endif;
      // Je charge la vue loginForm dans $content
      GLOBAL $content, $title;
      $title = TITRE_USERS_LOGINFORM;
      ob_start();
        include '../app/vues/users/loginForm.php';
      $content = ob_get_clean();
    }

    function loginAction(\PDO $connexion, array $data = null) {
      // Je demande le user qui correspond au login/pwd
      include '../app/modeles/usersModele.php';
      $user = UsersModele\findOneByLoginPwd($connexion, $data);

      // Je redirige vers le backoffice si c'est OK
      // Et vers le formulaire de connexion sinon
      if ($user):
        // On donne un badge à l'utilisateur
        $_SESSION['user'] = $user;
        header('location: '. BASE_URL_ADMIN);
      else:
        header('location: '. BASE_URL_PUBLIC .'users/login/form');
      endif;
    }
