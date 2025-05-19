<?php
// Report all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log various message types
error_log("INFO: Informational message");
error_log("WARNING: Warning message");
error_log("ERROR: Error message");
error_log("DEBUG: Debug message");

// Log a simulated exception
try {
    throw new Exception("Simulated exception for logging test");
} catch (Exception $e) {
    error_log("EXCEPTION: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Logger Demo</title>
  <style>
    body { font-family: sans-serif; margin: 2rem; }
    h1 { color: #0078D4; }
    p { font-size: 1.1rem; }
  </style>
</head>
<body>
  <h1>✅ PHP Logger Demo</h1>
  <p>This page is live! Check your Azure “Log stream” to see INFO, WARN, and ERROR entries.</p>
  <button onclick="location.reload()">Reload &amp; Log Again</button>
</body>
</html>

