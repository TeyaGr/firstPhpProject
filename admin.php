<?php
session_start();
require("app/app.php");
ensure_user_is_auth();

echo $_SESSION['email'];

?>