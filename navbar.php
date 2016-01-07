<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="//kooldawgstar.xyz">Trick or Treat Rater</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="//kooldawgstar.xyz">Home</a></li>
        <?php if (isset($_SESSION['user'])): ?>
        <li><a href="/logout.php">Log out</a></li>
        <li><a href="/edit_account.php">Edit Account</a></li>
        <?php else: ?>
        <li><a href="/login.php">Log in</a></li>
        <?php endif; ?>
      </ul>
      <form class="navbar-form navbar-right" role="search" method="get" action="reviews.php">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo( isset( $address ) ? $address : "" ); ?>">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning">Go!</button>
            </span>
          </div>
        </div>
      </form>
      <?php if (isset($_SESSION['user'])): ?>
      <p class="navbar-text navbar-right">Hello <?php echo( $_SESSION['user']['username'] ); ?>.</p>
      <?php endif; ?>
    </div>
  </div>
</nav>
