<?php
function LogStdOut(string $level, string $message): void
{
    // Level tag + space + message + newline
    $line = "{$level} {$message}\n";

    // stdout
    file_put_contents('php://stdout', $line, FILE_APPEND);
}

function LogStdErr(string $level, string $message): void
{
    // Level tag + space + message + newline
    $line = "{$level} {$message}\n";

    // stderr
    file_put_contents('php://stderr', $line, FILE_APPEND);
}

// Examples
LogStdOut('DEBUG', 'This is an debug message written to stdout.');
LogStdOut('INFO',  'This is an informational message written to stdout.');
LogStdOut('WARN',  'This is a warning message written to stdout.');
LogStdErr('ERROR', 'This is an error message written to stderr.');
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
