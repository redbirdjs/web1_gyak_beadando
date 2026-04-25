<?php
if (!isset($_SESSION["login"])) {
  header("Location: /");
  return;
}

$data = $_SESSION;
unset($_SESSION["csn"]);
unset($_SESSION["un"]);
unset($_SESSION["login"]);
?>