<head>
   <title>Arcade Homepage</title>
</head>

<?php
require(__DIR__ . "/../../partials/nav.php");
if (isset($_GET['duration'])) {
   $_SESSION['duration'] = $_GET['duration'];
}
require_once(__DIR__ . "/../../partials/scoreTable.php");
unset($_SESSION['duration']);
?>

<br>
<h1>Arcade Project Homepage</h1>

<div id="description">
   Welcome to the arcade! This the the homepage for my pong website project. Pong is a game where you score goals by
   using a paddle to hit a ball past your enemy. To play, click down below!
</div>

<form action="<?php echo get_url('game.php'); ?>">
   <button class="mt-3 btn btn-primary" type="submit">Play Pong!</button>
</form>

<?php
if (is_logged_in(true)) {
   //comment this out if you don't want to see the session variables
   error_log("Session data: " . var_export($_SESSION, true));
}
if (isset($_SESSION['']))
?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>