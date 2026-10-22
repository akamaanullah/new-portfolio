<?php
namespace App\Core;

abstract class Controller {

    /**
     * Render view with extracted data
     */
    protected function view($viewPath, $data = []) {
        if (!headers_sent()) {
            header('Cache-Control: private, no-store, no-cache, must-revalidate, max-age=0, s-maxage=0');
            header('Pragma: no-cache');
            header('Expires: 0');
        }

        extract($data, EXTR_SKIP);
        $fullPath = dirname(__DIR__, 2) . '/views/' . $viewPath . '.php';

        if (file_exists($fullPath)) {
            require $fullPath;
        } else {
            Logger::error("View file not found: views/{$viewPath}.php");
            http_response_code(404);
            $notFound = dirname(__DIR__, 2) . '/views/errors/404.php';
            if (file_exists($notFound)) {
                require $notFound;
            } else {
                echo "<h1>404 Not Found</h1>";
            }
            exit;
        }
    }

    /**
     * Instantiate Model
     */
    protected function model($modelName) {
        $className = "\\App\\Models\\" . $modelName;
        if (class_exists($className)) {
            return new $className();
        }
        return null;
    }

    /**
     * Return JSON response
     */
    protected function json($data, $statusCode = 200) {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit;
    }

    /**
     * Redirect to relative path
     */
    protected function redirect($url) {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }
        header("Location: " . base_url($url));
        exit;
    }
}
