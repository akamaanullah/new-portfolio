<?php
namespace App\Controllers;

use App\Core\Controller;

class ArticleController extends Controller {
    public function index() {
        $data = [
            'page_title' => "Articles — Notes on Web Architecture & Laravel | Amaanullah",
            'page_desc'  => "Practical notes on multi-tenant SaaS, Laravel queues, Flutter offline sync, and real-world web architecture.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/index', $data);
    }

    public function detail($slug = null) {
        $data = [
            'page_title' => "How I structure multi-tenant SaaS apps in Laravel — Amaanullah",
            'page_desc'  => "Single database or one per tenant? The trade-offs I weigh before writing the first migration.",
            'active_nav' => "articles",
            'page_css'   => "public/css/article-detail.css",
            'page_js'    => "public/js/article-detail.js",
            'slug'       => $slug
        ];
        $this->view('articles/detail', $data);
    }

    public function automationAi() {
        $data = [
            'page_title' => "Automation & AI Articles — Amaanullah",
            'page_desc'  => "Practical workflow automation and AI integrations without losing business control.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/automation-ai', $data);
    }

    public function careerInsights() {
        $data = [
            'page_title' => "Career & Insights Articles — Amaanullah",
            'page_desc'  => "Lessons from transitioning from developer to team lead, engineering architecture and mentoring.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/career-insights', $data);
    }

    public function laravelPhp() {
        $data = [
            'page_title' => "Laravel & PHP Articles — Amaanullah",
            'page_desc'  => "Deep dives into Laravel queues, multi-tenancy architecture, caching, and database design.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/laravel-php', $data);
    }

    public function mobileFlutter() {
        $data = [
            'page_title' => "Mobile & Flutter Articles — Amaanullah",
            'page_desc'  => "Building cross-platform mobile apps, offline sync strategies, and REST API integration.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/mobile-flutter', $data);
    }

    public function saasCrm() {
        $data = [
            'page_title' => "SaaS & CRM Articles — Amaanullah",
            'page_desc'  => "Structuring subscription billing, customer pipelines, and multi-tenant architectures.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/saas-crm', $data);
    }

    public function webDevelopment() {
        $data = [
            'page_title' => "Web Development Articles — Amaanullah",
            'page_desc'  => "Performance checklists, custom ecommerce architectures, and clean code principles.",
            'active_nav' => "articles",
            'page_css'   => "public/css/articles.css",
            'page_js'    => "public/js/articles.js"
        ];
        $this->view('articles/web-development', $data);
    }
}
