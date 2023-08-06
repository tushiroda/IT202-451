<?php
//requires functions.php
require_once(__DIR__ . "/../lib/functions.php");

//Depending on the file using the table, choose what to display
//Only for one page though?...
if (isset($_SESSION['duration'])) {
   $duration = $_SESSION['duration'];
} else
   $duration = "day";


if (in_array($duration, ["day", "week", "month", "lifetime"])) {
   $results = get_top_10($duration);
} else if ($duration === "latest") {
   if (!isset($user_id)) {
      $user_id = get_user_id();
   }
   $results = get_latest_scores($user_id);
}
switch ($duration) {
   case "day":
      $title = "Top Scores Today";
      break;
   case "week":
      $title = "Top Scores This Week";
      break;
   case "month":
      $title = "Top Scores This Month";
      break;
   case "lifetime":
      $title = "All Time Top Scores";
      break;
   case "latest":
      $title = "Your Latest Scores";
      break;
   default:
      $title = "Invalid Scoreboard";
      break;
}
?>
<div class="card bg-dark">
   <div class="card-body">
      <div class="card-title">
         <div class="fw-bold fs-3">
            <?php se($title); ?>
         </div>
      </div>

      <!-- If it's not the profile page, show options for switching between daily, weekls, etc. boards -->
      <?php if ($duration != 'latest'): ?>
         <div class="container">
            <li class="scoreoption"> <a href="<?php echo get_url('home.php'); ?>?duration=day">Daily</a></li>
            <li class="scoreoption"> <a href="<?php echo get_url('home.php'); ?>?duration=week">Weekly</a></li>
            <li class="scoreoption"> <a href="<?php echo get_url('home.php'); ?>?duration=month">Monthly</a></li>
            <li class="scoreoption"> <a href="<?php echo get_url('home.php'); ?>?duration=lifetime">All Time</a></li>
         </div>
         <br>
      <?php endif; ?>

      <div class="card-text">
         <table class="table">
            <?php if (count($results) == 0): ?>
               <p>No results to show</p>
            <?php else: ?>
               <?php foreach ($results as $index => $record): ?>
                  <?php if ($index == 0): ?>
                     <thead>
                        <?php foreach ($record as $column => $value): ?>
                           <th>
                              <?php se($column); ?>
                           </th>
                        <?php endforeach; ?>
                     </thead>
                  <?php endif; ?>
                  <tr>
                     <?php foreach ($record as $column => $value): ?>
                        <td>
                           <?php se($value, null, "N/A"); ?>
                        </td>
                     <?php endforeach; ?>
                  </tr>
               <?php endforeach; ?>
            </table>
         <?php endif; ?>
         </table>
      </div>
   </div>
</div>