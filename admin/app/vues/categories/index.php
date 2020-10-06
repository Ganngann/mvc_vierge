<?php

  /*
    ./app/vues/categories/index.php
  */

?>

<h1><?php echo TITRE_CATEGORIES_INDEX; ?></h1>
<div><a href="categories/add/form">Ajouter un enregistrement</a></div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($categories as $categorie): ?>
      <tr>
        <td><?php echo $categorie['id']; ?></td>
        <td><?php echo $categorie['name']; ?></td>
        <td><?php echo $categorie['created_at']; ?></td>
        <td>
          <a href="categories/edit/form/<?php echo $categorie['id']; ?>">Editer</a> |
          <a href="categories/delete/<?php echo $categorie['id']; ?>" class="delete">Supprimer</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
