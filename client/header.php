<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2>Discuss</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <?php
        if(isset($_SESSION['user']['username'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>
        <?php }  ?>
        <?php
        if(!isset($_SESSION['user']['username'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
        </li>
        <?php }  ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Latest Question</a>        
        </li>
      </ul>
    </div>
  </div>
</nav>