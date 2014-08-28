<div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li><a href="index.php">Home</a><li>
      {if !$logged}
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      {else}
        <li><a href="logout.php">Logout</a></li>
      {/if}
    </ul>
  </div>
</div>