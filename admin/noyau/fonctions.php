<?php

  /*
    ./noyau/fonctions.php
  */

  namespace Noyau\Fonctions;

  function slugify(string $str) {
    return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
  }

  function datify(string $date, string $format) {
    return date_format(date_create($date), $format);
  }

  function tronquer(string $chaine, int $nbreCaracteres = 200) :string {
    if (strlen($chaine) > $nbreCaracteres):
      $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
      return substr($chaine, 0, $positionEspace);
    else:
      return $chaine;
    endif;
  }
