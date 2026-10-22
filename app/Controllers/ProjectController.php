<?php
namespace App\Controllers;

use App\Core\Controller;

class ProjectController extends Controller {
    public function index() {
        $data = [
            'page_title' => "Projects — Selected Work & Case Studies | Amaanullah",
            'page_desc'  => "Production web apps, multi-tenant CRMs, real-time chat platforms, and mobile apps built by Amaanullah.",
            'active_nav' => "projects",
            'page_css'   => "public/css/projects.css",
            'page_js'    => "public/js/projects.js"
        ];
        $this->view('projects/index', $data);
    }

    public function detail($slug = null) {
        $data = [
            'page_title' => "Project Case Study — Amaanullah",
            'page_desc'  => "In-depth case study and technical breakdown of architectural design and business results.",
            'active_nav' => "projects",
            'page_css'   => "public/css/project-detail.css",
            'page_js'    => "public/js/project-detail.js",
            'slug'       => $slug
        ];
        $this->view('projects/detail', $data);
    }

    public function caseStudy() {
        $data = [
            'page_title' => "Case Study — Chatrox Real-Time Chat Platform | Amaanullah",
            'page_desc'  => "Full case study: Architecture, real-time messaging, WebSocket scaling, and results for Chatrox.",
            'active_nav' => "projects",
            'page_css'   => "public/css/project-detail.css",
            'page_js'    => "public/js/project-detail.js"
        ];
        $this->view('projects/case-study', $data);
    }

    public function webApplications() {
        $data = [
            'page_title' => "Web Applications — Projects | Amaanullah",
            'page_desc'  => "Custom web applications, dashboards, workflows, and portals built with modern PHP and JavaScript.",
            'active_nav' => "projects",
            'page_css'   => "public/css/projects.css",
            'page_js'    => "public/js/projects.js"
        ];
        $this->view('projects/web-applications', $data);
    }

    public function webDesign() {
        $data = [
            'page_title' => "Web Design & Development — Projects | Amaanullah",
            'page_desc'  => "High-converting, responsive websites and interactive web experiences.",
            'active_nav' => "projects",
            'page_css'   => "public/css/projects.css",
            'page_js'    => "public/js/projects.js"
        ];
        $this->view('projects/web-design', $data);
    }

    public function mobileApps() {
        $data = [
            'page_title' => "Mobile Applications — Projects | Amaanullah",
            'page_desc'  => "Cross-platform iOS and Android mobile apps built with Flutter and robust REST APIs.",
            'active_nav' => "projects",
            'page_css'   => "public/css/projects.css",
            'page_js'    => "public/js/projects.js"
        ];
        $this->view('projects/mobile-apps', $data);
    }

    public function products() {
        $data = [
            'page_title' => "Products — Projects | Amaanullah",
            'page_desc'  => "Independent products, SaaS platforms, and software tools built and scaled.",
            'active_nav' => "projects",
            'page_css'   => "public/css/projects.css",
            'page_js'    => "public/js/projects.js"
        ];
        $this->view('projects/products', $data);
    }
}
