<?php
// Emit logs to App Service log stream:
// INFO → STDOUT
fwrite(STDOUT, "[INFO]  " . date('c') . " Page viewed: Welcome page loaded.\n");
// WARN → STDERR
fwrite(STDERR, "[WARN]  " . date('c') . " Just a sample warning.\n");
// ERROR → STDERR via error_log()
error_log("[ERROR] " . date('c') . " Sample error occurred.\n");
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
