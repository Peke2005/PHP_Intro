<?php
  session_start();
  
  if (!isset($_SESSION['array'])) {
      $_SESSION['array'] = [10, 20, 30];
  }
  
  $array = $_SESSION['array'];
  $average = null;
  
  if (isset($_POST['modify'])) {
      $position = $_POST['position'];
      $newValue = $_POST['new_value'];
      
      if (is_numeric($newValue) && isset($array[$position])) {
          $array[$position] = (int)$newValue;
          $_SESSION['array'] = $array;
      }
  }
  
  if (isset($_POST['average'])) {
      $average = array_sum($array) / count($array);
  }
  
  
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Modify array saved in session</title>
  </head>
  <body>
  
  <h1>Modify array saved in session</h1>
  
  <form method="post">
      <label for="position">Position to modify:</label>
      <select name="position" id="position">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
      </select>
      <br>
      <br>
  
      <label for="new_value">New value:</label>
      <input type="text" name="new_value" id="new_value">
  
      <br><br>
  
      <input type="submit" name="modify" value="Modify">
      <input type="submit" name="average" value="Average">
      <input type="reset" name="reset" value="Reset">
  </form>
  
  <p>Current array: <?php echo implode(', ', $array); ?></p>
  
  <?php if ($average !== null): ?>
      <p style="color: red;">Average: <?php echo round($average, 2); ?></p>
  <?php endif; ?>
  
  </body>
</html>