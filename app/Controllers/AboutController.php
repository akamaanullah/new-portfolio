<?php
namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller {
    public function index() {
        $data = [
            'page_title' => "About — Amaanullah Khan | PHP, Laravel & Full-Stack Developer",
            'page_desc'  => "8+ years building production web apps, multi-tenant CRMs, real-time chat, and automated systems.",
            'active_nav' => "about",
            'page_css'   => "public/css/about.css",
            'page_js'    => "public/js/about.js"
        ];
        $this->view('about/index', $data);
    }
}
