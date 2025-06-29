<?php
$password_plain = "password123";
$hash = password_hash($password_plain, PASSWORD_DEFAULT);

echo "Password asli: $password_plain <br>";
echo "Password hash: $hash";
?>
