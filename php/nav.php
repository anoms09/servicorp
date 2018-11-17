<div class="row" id="header">
      <div class="col-4">
        <div style="float:left; margin-left:10px; margin-top:12px;">
          <img src="./image/anomski.jpg" alt = "serviCorp" width="100px" height="80px"/>
        </div>
      </div>
        <div class="col-8">
          <div style="margin-top:12px; margin-left: 50px;">
            <h1> SERVICORP </h1>
          </div>
        </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <?php if (!isset($username)){ ?> 
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Sign Up / Login</a>
      </li>
    <?php } ?>
    </ul>
  </div>
</nav>