1.
<?php

  /* Using PDO (for any supported database driver): */

  $stmt = $pdo->prepare('SELECT * FROM employees WHERE name = :name');

  $stmt->execute(array('name' => $name));

  foreach ($stmt as $row) {
      // do something with $row
  }
?>


2.
<?php
  /* Using MySQLi (for MySQL): */

  $stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
  $stmt->bind_param('s', $name);

  $stmt->execute();

  $result = $stmt->get_result();
  while ($row = $result->fetch_assoc()) {
      // do something with $row
  }
?>
