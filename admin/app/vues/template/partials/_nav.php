<?php

  /*
    ./app/vues/template/partials/_nav.php
  */

?>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Projet WED</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Site public</a></li>
        <li><a href="#about">Dashboard</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion du contenu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">Posts</li>
            <li><a href="posts">Liste des posts</a></li>
            <li><a href="#">Ajouter un post</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Catégories</li>
            <li><a href="categories">Liste des catégories</a></li>
            <li><a href="categories/add/form">Ajouter une catégorie</a></li>
            <li class="dropdown-header">Auteurs</li>
            <li><a href="#">Liste des auteurs</a></li>
            <li><a href="#">Ajouter un auteur</a></li>
          </ul>
        </li>
        <li><a href="user/logout">Logout</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
