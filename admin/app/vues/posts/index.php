<?php

  /*
    ./app/vues/posts/index.php
  */

?>

<h1><?php echo TITRE_POSTS_INDEX; ?></h1>
<div><a href="posts/add/form">Ajouter un enregistrement</a></div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created_at</th>
        <th>Image</th>
        <th>Author</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($posts as $post): ?>
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['title']; ?></td>
        <td><?php echo \Noyau\Fonctions\tronquer($post['content'], 100); ?></td>
        <td><?php echo $post['created_at']; ?></td>
        <td><?php echo $post['image']; ?></td>
        <td><?php echo $post['firstname']; ?> <?php echo $post['lastname']; ?></td>
        <td>
          <a href="posts/edit/form/<?php echo $post['id']; ?>">Editer</a> |
          <a href="posts/delete/<?php echo $post['id']; ?>" class="delete">Supprimer</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
