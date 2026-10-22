<?php
/**
 * Global Helper Functions
 * Custom PHP MVC Framework
 */

if (!headers_sent()) {
    header_remove('Expires');
    header_remove('Pragma');
    header("Cache-Control: private, no-store, no-cache, must-revalidate, max-age=0, s-maxage=0");
    header("Pragma: no-cache");
    header("Expires: 0");
}

if (!function_exists('env')) {
    function env($key, $default = null) {
        static $envVars = null;
        if ($envVars === null) {
            $envVars = [];
            $envPath = dirname(__DIR__, 2) . '/.env';
            if (file_exists($envPath)) {
                $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($lines as $line) {
                    $line = trim($line);
                    if ($line === '' || strpos($line, '#') === 0) continue;
                    if (strpos($line, '=') !== false) {
                        list($k, $v) = explode('=', $line, 2);
                        $k = trim($k);
                        $v = trim($v, " \t\n\r\0\x0B\"'");
                        $envVars[$k] = $v;
                    }
                }
            }
        }
        $val = $envVars[$key] ?? getenv($key);
        return ($val !== false && $val !== null && $val !== '') ? $val : $default;
    }
}

$isHttps = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
    || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
    || (!empty($_SERVER['HTTP_CF_VISITOR']) && strpos($_SERVER['HTTP_CF_VISITOR'], 'https') !== false)
    || ((int)($_SERVER['SERVER_PORT'] ?? 0) === 443);

if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', '1');
    ini_set('session.use_only_cookies', '1');
    if (PHP_VERSION_ID >= 70300) {
        session_set_cookie_params([
            'lifetime' => 0,
            'path'     => '/',
            'domain'   => '',
            'secure'   => $isHttps,
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
    } else {
        session_set_cookie_params(0, '/; samesite=Lax', '', $isHttps, true);
    }
    session_start();
}

/**
 * Generates the absolute or root-relative Base URL
 */
function base_url($path = '') {
    static $baseUrl = null;

    if ($baseUrl === null) {
        $protocol = ((!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
            || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
            || ((int)($_SERVER['SERVER_PORT'] ?? 0) === 443)) ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

        $appRoot = realpath(__DIR__ . '/../../');
        $docRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');

        if ($appRoot && $docRoot && strpos($appRoot, $docRoot) === 0) {
            $basePath = str_replace('\\', '/', substr($appRoot, strlen($docRoot)));
        } else {
            $basePath = '/' . trim(env('APP_BASE_PATH', 'web3d'), '/');
        }

        $baseUrl = $protocol . '://' . $host . $basePath;
    }

    return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
}

/**
 * Generates URL for static assets in /public
 */
function asset_url($path = '') {
    return base_url('public/' . ltrim($path, '/'));
}

/**
 * Simple alias for asset_url
 */
function asset($path = '') {
    return asset_url($path);
}

/**
 * View helper
 */
function view($viewPath, $data = []) {
    extract($data, EXTR_SKIP);
    $file = dirname(__DIR__, 2) . '/views/' . $viewPath . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        http_response_code(404);
        $notFound = dirname(__DIR__, 2) . '/views/errors/404.php';
        if (file_exists($notFound)) {
            require $notFound;
        } else {
            echo "<h1>404 View Not Found: " . htmlspecialchars($viewPath) . "</h1>";
        }
    }
}

/**
 * Sanitize strings
 */
function sanitize($input) {
    if (is_array($input)) {
        return array_map('sanitize', $input);
    }
    return htmlspecialchars(trim((string)$input), ENT_QUOTES, 'UTF-8');
}

/**
 * CSRF token helper
 */
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}
