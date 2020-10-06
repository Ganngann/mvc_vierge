<?php

  /*
    ../app/vues/users/loginForm.php
    Variables disponibles:

  */

?>

<div class="container">
  <h5><?php echo TITRE_USERS_LOGINFORM; ?></h5>
  <br />
  <form action="users/login/submit" method="post">
    <div class="form-group">
      <label for="login">Login</label>
      <input type="text" class="form-control" id="login" name="login" placeholder="Enter login">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
