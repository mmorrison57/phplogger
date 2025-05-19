<?php
/**
 * Log a message to both stdout and stderr, with the level at the very start.
 *
 * @param string $level   "DEBUG", "INFO", "WARN", "ERROR", etc.
 * @param string $message Your log text.
 */
function dualLog(string $level, string $message): void
{
    // Level tag + space + message + newline
    $line = "{$level} {$message}\n";

    // stdout
    file_put_contents('php://stdout', $line, FILE_APPEND);
    // stderr
    file_put_contents('php://stderr', $line, FILE_APPEND);
}

// Examples
dualLog('DEBUG', 'Starting page render.');
dualLog('INFO',  'Page viewed: Welcome page loaded.');
dualLog('WARN',  'Just a sample warning.');
dualLog('ERROR', 'Sample error occurred.');
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
  <p>This page is live! Check your Azure “Log stream” to see DEBUG, INFO, WARN, and ERROR entries.</p>
  <button onclick="location.reload()">Reload &amp; Log Again</button>
</body>
</html>

