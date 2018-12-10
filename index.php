<?php 
  if (isset($_GET['p'])) {
     $page = $_GET['p'];
  } else {
    $page = 'home';
  }

  @require_once 'web/universal/header.php';
  @require_once 'web/views/' . $page . '.php';
  @require_once 'web/universal/footer.php';
?>