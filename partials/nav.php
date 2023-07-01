<?php
//Resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
   $domain = explode(":", $domain)[0];
}
$localWorks = false; //if have issues with localhost for cookie params make false

//extra condition to resolve localhost issue?
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
   session_set_cookie_params([
      "lifetime" => 60 * 60,
      "path" => "/Project",
      //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
      "domain" => $domain,
      "secure" => true,
      "httponly" => true,
      "samesite" => "lax"
   ]);
}
session_start();

//including nav will also include functions, which also includes the other thing
require(__DIR__ . "/../lib/functions.php");
?>
<nav>
   <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="logout.php">Logout</a></li>
   </ul>
</nav>