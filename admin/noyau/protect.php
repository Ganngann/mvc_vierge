<?php

  /*
    ./noyau/protect.php
    Vérification des badges
  */

  if (!isset($_SESSION['user'])):
    header('location: '. BASE_URL_PUBLIC .'users/login/form');
  endif;
