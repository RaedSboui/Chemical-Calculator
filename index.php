<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
  integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
  crossorigin="anonymous"
/>

<?php
session_start();
if(!isset($_SESSION['user'])){
  echo "<script>window.location.href='login.php';</script>";
  exit;
}

include "Templates/heeader.php";

isset($_REQUEST['controller'])?$controller=$_REQUEST['controller']:$controller="Substance";
isset($_REQUEST['action'])?$action=$_REQUEST['action']:$action="list";

include "controllers/controller$controller.php";

include "Templates/footer.php";

?>