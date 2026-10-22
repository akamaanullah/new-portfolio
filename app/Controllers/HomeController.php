<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $data = [
            'page_title' => "Amaanullah Khan — Web Developer & Custom Software Solutions",
            'page_desc'  => "Custom CRMs, SaaS applications, automation tools, and mobile apps by Amaanullah Khan.",
            'active_nav' => "home",
            'has_splash' => true,
            'page_css'   => "public/css/style.css",
            'page_js'    => "public/js/main.js"
        ];
        $this->view('home/index', $data);
    }
}
