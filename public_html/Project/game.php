<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<div class="h1">Play Pong</div>
<canvas id="canvas" width="800" height="600" tabindex="1"></canvas>

<style>
   #canvas {
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 5%;
      display: block;
      width: 800px;
      height: 600px;
   }
</style>

<script>
   var timer = 300;

   // Canvas Pong
   var canvas = document.getElementById('canvas');
   var context = canvas.getContext('2d');

   // Key Codes
   var W = 87;
   var S = 83;
   var UP = 38;
   var DOWN = 40;

   // Keep track of pressed keys
   var keys = {
      W: false,
      S: false,
      UP: false,
      DOWN: false
   };

   // Create a rectangle object - for paddles, ball, etc
   function makeRect(x, y, width, height, speed, color) {
      if (!color) color = '#000000';
      return {
         x: x,
         y: y,
         w: width,
         h: height,
         s: speed,
         c: color,
         draw: function () {
            context.fillStyle = this.c;
            context.fillRect(this.x, this.y, this.w, this.h);
         }
      };
   }

   // Create the paddles
   var paddleWidth = 15;
   var paddleHeight = 70;
   var leftPaddle = makeRect(25, canvas.height / 2 - paddleHeight / 2, paddleWidth, paddleHeight, 9, '#6E8EAF');
   var rightPaddle = makeRect(canvas.width - paddleWidth - 25, canvas.height / 2 - paddleHeight / 2, paddleWidth, paddleHeight, 9, '#895B06');

   // Keep track of the score
   var leftScore = 0;
   var rightScore = 0;
   var pointsToWin = 5;
   var pickedUp = 0;

   // Create the ball
   var ballLength = 15;
   var ballSpeed = 4;
   var ball = makeRect(0, 0, ballLength, ballLength, ballSpeed, '#FFFFFF');

   // Modify the ball object to have two speed properties, one for X and one for Y
   ball.sX = ballSpeed;
   ball.sY = ballSpeed / 2;

   // Reset the ball's position and speed after scoring
   function resetBall() {
      ball.x = canvas.width / 2 - ball.w / 2;
      ball.y = canvas.height / 2 - ball.w / 2;
      ball.sX = ballSpeed;
      ball.sY = ballSpeed / 2;
      if (Math.random() > 0.5) {
         ball.sX = -ball.sX;
      }

      if (Math.random() > 0.5) {
         ball.sY *= -1;
      }
   }

   // Bounce the ball off of a paddle
   function bounceBall(side) {
      // Increase and reverse the X speed
      // tu34 7/9/2023
      // Add variable to keep track of ball "center" to compare to paddle
      var ballCenter = ball.y + ball.h / 2;
      var paddleCenter;
      let speedIncrease = 1;
      if (Math.random() <= 0.5) {
         speedIncrease = 0;
      }
      // Change bounce properties so it's more accurate to original game
      // Ball direction depends on where it hits the paddle
      if (side == "rightPaddle") {
         ball.sX = -Math.abs(ball.sX);
         ball.sX -= speedIncrease;
         // Compare ball location to paddle location to determine the up/down bounce
         paddleCenter = rightPaddle.y + rightPaddle.h / 2;
      }

      if (side == "leftPaddle") {
         ball.sX = Math.abs(ball.sX);
         ball.sX += speedIncrease;
         // Compare ball location to paddle location to determine the up/down bounce
         paddleCenter = leftPaddle.y + leftPaddle.h / 2;
      }

      // Up/down bounce
      var diff = ballCenter - paddleCenter;
      if (diff > 0)
         diff += ball.s;
      else
         diff -= ball.s;
      ball.sY = diff / 3;
   }

   // Listen for keydown events
   canvas.addEventListener('keydown', function (e) {
      if (e.keyCode === W) {
         keys.W = true;
      }
      if (e.keyCode === S) {
         keys.S = true;
      }
   });

   // Listen for keyup events
   canvas.addEventListener('keyup', function (e) {
      if (e.keyCode === W) {
         keys.W = false;
      }
      if (e.keyCode === S) {
         keys.S = false;
      }
   });

   // Show the menu
   function menu() {
      erase();
      // Show the menu
      context.fillStyle = '#FFFFFF';
      context.font = '40px Monospace';
      context.textAlign = 'center';
      context.fillText('PONG', canvas.width / 2, canvas.height / 4);
      context.font = '28px Monospace';
      context.fillText('Click to Start', canvas.width / 2, canvas.height / 3);
      context.font = '18px Monospace';
      context.textAlign = 'center';
      context.fillText('Controls: W (up) and S (down)', canvas.width / 2, (canvas.height / 3) * 2);
      // Start the game on a click
      canvas.addEventListener('click', startGame);
   }

   //keep track of time for score
   function scoreTimer() {
      timer -= 1;
   }

   // Start the game
   function startGame() {
      // Don't accept any more clicks
      canvas.removeEventListener('click', startGame);
      // Put the ball in place
      resetBall();
      // Kick off the game loop
      draw();
      window.gametime = setInterval(scoreTimer, 400);
   }

   // Show the end game screen
   function endGame() {
      clearInterval(window.gametime);
      erase();
      context.fillStyle = '#FFFFFF';
      context.font = '40px Monospace';
      context.textAlign = 'center';
      // tu34 8/7/2023
      // sum player score
      score = 0;
      score += leftScore * 100;
      score += (5 - rightScore) * 50;
      score += pickedUp * 25;
      score += timer;

      if (rightScore > leftScore) {
         context.fillText('You lose!', canvas.width / 2, canvas.height / 2);
         score = Math.floor(score / 3);
      }
      else {
         context.fillText('You win!', canvas.width / 2, canvas.height / 2);
      }
      context.fillText('Score: ' + score, canvas.width / 2, canvas.height * 2 / 3);
      fetchRequest(score)
   }

   // tu34 8/7/2023 Post data to table
   function fetchRequest(score) {
      let val = score;
      fetch("api/save_score.php", {
         method: "POST",
         //if testing on a different domain or local you'll have to set this header
         //refer here: https://stackoverflow.com/a/13005183
         headers: {
            "Content-type": "application/x-www-form-urlencoded",
            "X-Requested-With": "XMLHttpRequest",
         },
         body: `score=${val}`
      }).then(async resp => {
         //uses a promise so we need to await it: https://www.w3schools.com/js/js_promise.asp
         let json = await resp.text(); //can only call this once

         console.log(resp, json);
         context.font = '20px Monospace';
         context.fillText('Score Saved', canvas.width / 2, canvas.height * 2 / 3 + 40)
         // alert(json);
      }).catch(err => {
         alert("Error: " + err);
      })
   }


   // Clear the canvas
   function erase() {
      context.fillStyle = '#243342';
      context.fillRect(0, 0, canvas.width, canvas.height);
   }

   //tu34 7/9/2023 keep track of powerup
   var spawned = false;
   var powerup;

   // Main draw loop
   function draw() {
      erase();
      middleLine = makeRect(canvas.width / 2 - 1, 0, 2, canvas.height, 0, 'gray'); //TODO
      ballCenter = ball.y + ball.h / 2;
      rightCenter = rightPaddle.y + rightPaddle.h / 2;
      rightDiff = rightCenter - ballCenter;
      middleLine.draw();
      rightSpeed = rightPaddle.s;
      if (Math.abs(rightDiff) < Math.abs(rightPaddle.s)) {
         rightSpeed = rightDiff;
      }
      // Move the paddles
      if (keys.W) {
         leftPaddle.y -= leftPaddle.s;
      }
      if (keys.S) {
         leftPaddle.y += leftPaddle.s;
      }
      if (rightCenter > ballCenter) {
         rightPaddle.y -= rightSpeed;
      }
      if (rightCenter < ballCenter) {
         rightPaddle.y += rightSpeed;
      }
      // Move the ball
      ball.x += ball.sX;
      ball.y += ball.sY;

      // Bounce the ball off the top/bottom
      if (ball.y < 0)
         ball.sY = Math.abs(ball.sY);
      if (ball.y + ball.h > canvas.height)
         ball.sY = -Math.abs(ball.sY);

      // Don't let the paddles go off screen
      [leftPaddle, rightPaddle].forEach(function (paddle) {
         if (paddle.y < 0) {
            paddle.y = 0;
         }
         if (paddle.y + paddle.h > canvas.height) {
            paddle.y = canvas.height - paddle.h;
         }
      });

      // Randomly spawn powerup
      // tu34 7/9/2023
      if (!spawned) {
         if (Math.random() < 0.005) {
            var powerUpSize = 40;
            powerup = makeRect((canvas.width - powerUpSize) / 2, (Math.random() * 500) + 50, powerUpSize, powerUpSize, 0, '#009999');
            spawned = true;
         }
      } else {
         powerup.draw();
         // Check if ball touches powerup and activate it
         if (ball.x + ball.w >= powerup.x && ball.x <= powerup.x + 50) {
            if (ball.y + ball.h >= powerup.y && ball.y < powerup.y + 50) {
               spawned = false;
               if (ball.sX > 0) {
                  leftPaddle.h += 10;
                  leftPaddle.y -= 5;
                  pickedUp += 1;
               }
               else {
                  rightPaddle.h += 10;
                  rightPaddle.y -= 5;
               }
            }
         }
      }

      // Bounce the ball off the paddles
      // tu34 7/9/2023
      // New variable to fix a bug where ball gets "hit" by paddle multiple times
      // if the ball hits the top/bottom of the paddle rather than the side
      var tracker = "";

      if (ball.y + ball.h >= leftPaddle.y && ball.y <= leftPaddle.y + leftPaddle.h) {
         if (ball.x <= leftPaddle.x + leftPaddle.w) {
            if (tracker != "leftPaddle") {
               bounceBall("leftPaddle");
               tracker = "leftPaddle";
            }
         }
      }
      if (ball.y + ball.h >= rightPaddle.y && ball.y <= rightPaddle.y + rightPaddle.h) {
         if (ball.x + ball.w >= rightPaddle.x) {
            if (tracker != "rightPaddle") {
               bounceBall("rightPaddle");
               tracker = "rightPaddle";
            }
         }
      }
      // Score if the ball goes past a paddle
      if (ball.x < leftPaddle.x) {
         rightScore++;
         resetBall();
      } else if (ball.x + ball.w > rightPaddle.x + rightPaddle.w) {
         leftScore++;
         resetBall();
      }
      // Draw the paddles and ball
      leftPaddle.draw();
      rightPaddle.draw();
      ball.draw();

      // Draw the scores
      context.fillStyle = '#FFFFFF';
      context.font = '50px Monospace';
      context.textAlign = 'center';
      context.fillText(leftScore + '   ' + rightScore, canvas.width / 2, 50);
      // End the game or keep going
      if (leftScore === pointsToWin || rightScore === pointsToWin) {
         endGame();
      } else {
         window.requestAnimationFrame(draw);
      }
   }

   // Show the menu to start the game
   menu();
   canvas.focus();
</script>