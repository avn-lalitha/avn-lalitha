<?php
session_start(); 

if (!isset($_SESSION['user'])) {
  echo "<script type = \"text/javascript\">
  window.location = (\"./index.html\");
  </script>";
}


?>