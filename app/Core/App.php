<?php
namespace App\Core;

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    private $routes = [
        ''                             => ['controller' => 'HomeController', 'method' => 'index'],
        'home'                         => ['controller' => 'HomeController', 'method' => 'index'],
        'index'                        => ['controller' => 'HomeController', 'method' => 'index'],
        'about'                        => ['controller' => 'AboutController', 'method' => 'index'],
        
        // Services
        'services'                     => ['controller' => 'ServiceController', 'method' => 'index'],
        'service-detail'               => ['controller' => 'ServiceController', 'method' => 'detail'],
        'services/detail'              => ['controller' => 'ServiceController', 'method' => 'detail'],
        
        // Projects
        'projects'                     => ['controller' => 'ProjectController', 'method' => 'index'],
        'project-detail'               => ['controller' => 'ProjectController', 'method' => 'detail'],
        'case-study'                   => ['controller' => 'ProjectController', 'method' => 'caseStudy'],
        'projects/web-applications'    => ['controller' => 'ProjectController', 'method' => 'webApplications'],
        'projects-web-applications'    => ['controller' => 'ProjectController', 'method' => 'webApplications'],
        'projects/web-design'          => ['controller' => 'ProjectController', 'method' => 'webDesign'],
        'projects-web-design'          => ['controller' => 'ProjectController', 'method' => 'webDesign'],
        'projects/mobile-apps'         => ['controller' => 'ProjectController', 'method' => 'mobileApps'],
        'projects-mobile-apps'         => ['controller' => 'ProjectController', 'method' => 'mobileApps'],
        'projects/products'            => ['controller' => 'ProjectController', 'method' => 'products'],
        'projects-products'            => ['controller' => 'ProjectController', 'method' => 'products'],
        
        // Articles
        'articles'                     => ['controller' => 'ArticleController', 'method' => 'index'],
        'article'                      => ['controller' => 'ArticleController', 'method' => 'detail'],
        'article-detail'               => ['controller' => 'ArticleController', 'method' => 'detail'],
        'articles/automation-ai'       => ['controller' => 'ArticleController', 'method' => 'automationAi'],
        'articles-automation-ai'       => ['controller' => 'ArticleController', 'method' => 'automationAi'],
        'articles/career-insights'     => ['controller' => 'ArticleController', 'method' => 'careerInsights'],
        'articles-career-insights'     => ['controller' => 'ArticleController', 'method' => 'careerInsights'],
        'articles/laravel-php'         => ['controller' => 'ArticleController', 'method' => 'laravelPhp'],
        'articles-laravel-php'         => ['controller' => 'ArticleController', 'method' => 'laravelPhp'],
        'articles/mobile-flutter'      => ['controller' => 'ArticleController', 'method' => 'mobileFlutter'],
        'articles-mobile-flutter'      => ['controller' => 'ArticleController', 'method' => 'mobileFlutter'],
        'articles/saas-crm'            => ['controller' => 'ArticleController', 'method' => 'saasCrm'],
        'articles-saas-crm'            => ['controller' => 'ArticleController', 'method' => 'saasCrm'],
        'articles/web-development'     => ['controller' => 'ArticleController', 'method' => 'webDevelopment'],
        'articles-web-development'     => ['controller' => 'ArticleController', 'method' => 'webDevelopment'],
        
        // Contact
        'contact'                      => ['controller' => 'ContactController', 'method' => 'index'],
        'contact/send'                 => ['controller' => 'ContactController', 'method' => 'send']
    ];

    public function __construct() {
        $url = $this->parseUrl();
        $path = implode('/', $url);
        $pathKey = strtolower(trim($path));

        // Strip trailing .php if requested
        if (substr($pathKey, -4) === '.php') {
            $pathKey = substr($pathKey, 0, -4);
        }

        if (array_key_exists($pathKey, $this->routes)) {
            $this->controller = $this->routes[$pathKey]['controller'];
            $this->method     = $this->routes[$pathKey]['method'];
        } else {
            // Check prefix route matching
            $prefix = isset($url[0]) ? strtolower(trim($url[0])) : '';
            if (substr($prefix, -4) === '.php') {
                $prefix = substr($prefix, 0, -4);
            }

            if ($prefix === 'service' || $prefix === 'service-detail') {
                $this->controller = 'ServiceController';
                $this->method = 'detail';
                $this->params = isset($url[1]) ? [$url[1]] : [];
            } elseif ($prefix === 'project' || $prefix === 'project-detail') {
                $this->controller = 'ProjectController';
                $this->method = 'detail';
                $this->params = isset($url[1]) ? [$url[1]] : [];
            } elseif ($prefix === 'article' || $prefix === 'article-detail') {
                $this->controller = 'ArticleController';
                $this->method = 'detail';
                $this->params = isset($url[1]) ? [$url[1]] : [];
            } else {
                header("HTTP/1.0 404 Not Found");
                require_once dirname(__DIR__, 2) . '/views/errors/404.php';
                exit;
            }
        }

        $controllerClass = "\\App\\Controllers\\" . $this->controller;
        if (class_exists($controllerClass)) {
            $this->controller = new $controllerClass();
        } else {
            header("HTTP/1.0 404 Not Found");
            require_once dirname(__DIR__, 2) . '/views/errors/404.php';
            exit;
        }

        if (method_exists($this->controller, $this->method)) {
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            header("HTTP/1.0 404 Not Found");
            require_once dirname(__DIR__, 2) . '/views/errors/404.php';
            exit;
        }
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        $reqUri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
        $scriptDir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
        $path = substr($reqUri, strlen($scriptDir));
        $path = trim($path, '/');
        if (!empty($path)) {
            return explode('/', filter_var($path, FILTER_SANITIZE_URL));
        }
        return [];
    }
}
