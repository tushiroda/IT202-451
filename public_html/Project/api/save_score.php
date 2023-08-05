<?php
require_once(__DIR__ . "/../../../lib/functions.php");
error_log("save_score received data: " . var_export($_REQUEST, true));

//handle the potentially incoming post request
$score = (int) se($_POST, "score", 0, false);

//if data is valid pass it to save_score
save_score($score);

//This demo will be setup to demonstrate a front end game
//vs one where the logic is mostly done on the back end
function save_score($score, $echo = true)
{
   $response = ["status" => 400, "message" => "Unhandled error"];
   http_response_code(400);
   if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
   }
   if (is_logged_in()) {
      //todo save
      $db = getDB();
      $stmt = $db->prepare("INSERT INTO Scores(user_id, score) VALUES (:uid, :s)");
      try {
         $stmt->execute([":uid" => get_user_id(), ":s" => $score]);
         $response["status"] = 200;
         $response["message"] = "Saved Score";
         http_response_code(200);
      } catch (PDOException $e) {
         error_log("Error saving score: " . var_export($e, true));
         $response["message"] = "Error saving score details";
      }
   } else {
      $response["message"] = "Not logged in";
      http_response_code(403);
   }
   if ($echo) {
      echo json_encode($response);
      die();
   }
   return $response;
}