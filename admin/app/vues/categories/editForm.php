<?php

  /*
    ./app/vues/categories/editForm.php
  */

?>

<h1><?php echo TITRE_CATEGORIES_EDITFORM; ?></h1>
<div>
  <a href="categories">Retour vers la liste des catégories</a>
</div>
<form class="edit" action="categories/edit/<?php echo $categorie['id']; ?>" method="post">
  <div>
    <label for="name">Titre</label>
    <input type="text" name="name" id="name" value="<?php echo $categorie['name']; ?>">
  </div>
  <input type="submit">
</form>
