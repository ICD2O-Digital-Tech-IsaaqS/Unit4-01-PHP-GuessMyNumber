<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Guess the number, with PHP">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (13)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (13)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (13)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (13)/site.webmanifest">
  <title>Guess the Number!</title>
  <!-- Link to external CSS file -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h1>Guess the Number!</h1>
    <p>Pick a number between <strong>1 and 10</strong>:</p>

    <!-- Form for user to enter guess -->
    <form method="POST">
        <input type="number" name="guess" min="1" max="10" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    <div class="result">
        <?php
        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Generate a random number between 1 and 10
            $randomNumber = rand(1, 10);

            // Get user's guess and convert to integer
            $userGuess = (int)$_POST['guess'];

            // First IF: user guessed correctly
            if ($userGuess === $randomNumber) {
                echo "<span class='success'>🎉 Congratulations! You guessed it right!</span>";
            }

            // Second IF: user guessed wrong
            if ($userGuess !== $randomNumber) {
                echo "<span class='error'>❌ Wrong! The correct number was $randomNumber.</span>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>