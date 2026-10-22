<?php
/**
 * Amaanullah Portfolio — Front Controller Entry Point
 * Custom PHP MVC Architecture
 */

// Load Helper functions
require_once __DIR__ . '/app/Helpers/functions.php';

// PSR-4 / Custom Class Autoloader
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Configure Error Reporting according to APP_DEBUG
$appDebug = function_exists('env') ? (strtolower(trim((string)env('APP_DEBUG', 'false'))) === 'true') : false;
if ($appDebug) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
}

// Global Exception Handler
set_exception_handler(function ($e) use ($appDebug) {
    \App\Core\Logger::error("Uncaught Exception: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
    if ($appDebug) {
        echo "<pre style='background:#1a1010;color:#f87171;padding:24px;border:1px solid #ef4444;border-radius:12px;font-family:monospace;font-size:14px;line-height:1.5;'>";
        echo "<h2 style='margin-top:0;color:#ef4444;'>Application Exception</h2>";
        echo "<strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "\n";
        echo "<strong>File:</strong> " . htmlspecialchars($e->getFile()) . ":" . $e->getLine() . "\n\n";
        echo "<strong>Stack Trace:</strong>\n" . htmlspecialchars($e->getTraceAsString());
        echo "</pre>";
    } else {
        http_response_code(500);
        $errorPage = __DIR__ . '/views/errors/500.php';
        if (file_exists($errorPage)) {
            require $errorPage;
        } else {
            echo "<!DOCTYPE html><html><head><title>500 Error</title></head><body style='background:#0f1016;color:#fff;text-align:center;padding:50px;'><h2>System Maintenance</h2><p>Please try again shortly.</p></body></html>";
        }
    }
    exit(1);
});

// Initialize Application Router
$app = new App\Core\App();
