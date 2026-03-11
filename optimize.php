<?php
// Safe single buffer
ob_start('sanitize_output'); // or use ob_gzhandler if you prefer compression

// Security headers
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");

// Cache control
header("Cache-Control: no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 3600) . " GMT");

// Error handling
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Minify function
function sanitize_output($buffer) {
    $replace = [
        '/\>[^\S ]+/s' => '>',
        '/[^\S ]+\</s' => '<',
        '/(\s)+/s'     => '\\1'
    ];
    return preg_replace(array_keys($replace), array_values($replace), $buffer);
}
?>