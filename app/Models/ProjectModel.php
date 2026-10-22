<?php
namespace App\Models;

use App\Core\Model;

class ProjectModel extends Model {
    private $projects = [
        [
            'id' => 1,
            'title' => 'Chatrox — Real-Time Chat Platform',
            'category' => 'web-applications',
            'tag' => 'Product',
            'slug' => 'chatrox',
            'desc' => 'Multi-tenant WebSocket messaging platform serving web and mobile clients with sub-50ms message delivery.'
        ],
        [
            'id' => 2,
            'title' => 'Enterprise Multi-Tenant CRM',
            'category' => 'web-applications',
            'tag' => 'CRM',
            'slug' => 'multi-tenant-crm',
            'desc' => 'Complete customer relationship management with pipeline automation and automated invoicing.'
        ],
        [
            'id' => 3,
            'title' => 'HRM & Payroll Engine',
            'category' => 'products',
            'tag' => 'Web App',
            'slug' => 'hrm-payroll',
            'desc' => 'Unified attendance tracking, shift scheduling, automated payroll slips, and tax reporting.'
        ]
    ];

    public function getAll() {
        return $this->projects;
    }

    public function getByCategory($category) {
        return array_values(array_filter($this->projects, function($p) use ($category) {
            return $p['category'] === $category;
        }));
    }
}
