<?php
$webRoot = '/home3/aeecotrading/public_html';
$logFile = $webRoot . '/deploy.log';

$output = [];
$return_var = 0;

// Log the start
file_put_contents($logFile, date('Y-m-d H:i:s') . " — Deploy triggered\n", FILE_APPEND);

// Run git pull with timeout
exec("cd $webRoot && git pull 2>&1", $output, $return_var);

// Log output
file_put_contents($logFile, implode("\n", $output) . "\nReturn code: $return_var\n\n", FILE_APPEND);

// Show output in browser
echo "<pre>";
echo implode("\n", $output);
echo "\nReturn code: $return_var";
echo "</pre>";
?>