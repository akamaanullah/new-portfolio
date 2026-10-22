<?php
namespace App\Controllers;

use App\Core\Controller;

class ServiceController extends Controller {
    public function index() {
        $serviceModel = $this->model('ServiceModel');
        $services = $serviceModel ? $serviceModel->getAll() : [];

        $data = [
            'page_title' => "Services — Web, CRM, SaaS & AI Development | Amaanullah",
            'page_desc'  => "Custom CRMs, SaaS platforms, AI automation, and web applications built for scale and performance.",
            'active_nav' => "services",
            'page_css'   => "public/css/services.css",
            'page_js'    => "public/js/services.js",
            'services'   => $services
        ];
        $this->view('services/index', $data);
    }

    public function detail($slug = null) {
        $serviceKey = $slug ?: ($_GET['service'] ?? 'crm');
        $serviceModel = $this->model('ServiceModel');
        $service = $serviceModel ? $serviceModel->getBySlug($serviceKey) : null;

        $data = [
            'page_title' => ($service['title'] ?? 'Service Detail') . " — Amaanullah",
            'page_desc'  => $service['subtitle'] ?? "Comprehensive software engineering services by Amaanullah Khan.",
            'active_nav' => "services",
            'page_css'   => "public/css/service-detail.css",
            'page_js'    => "public/js/service-detail.js",
            'service'    => $service,
            'serviceKey' => $serviceKey
        ];
        $this->view('services/detail', $data);
    }
}
