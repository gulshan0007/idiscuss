<?php
include '_dbconnection.php';
session_start();

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forum/index.php">Home</a>
        </li>
      
        
      </ul>';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  echo '<form class="d-flex" action="search.php" method="get">
        
        <a href="partials/_logout.php" class="btn btn-outline-success">Logout</a>
       </form>';
} else {
  echo '<button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</button>
        <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>';
}

echo '</div>
      </div>
    </nav>';

include 'partials/_loginmodal.php';
include 'partials/_signupmodal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
  echo '<div class="my-0 alert alert-success alert-dismissible fade show" role="alert" style="margin-left: 15px;">
  <strong>Success!</strong> You can login now!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>
