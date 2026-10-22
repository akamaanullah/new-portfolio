<?php
namespace App\Models;

use App\Core\Model;

class ArticleModel extends Model {
    private $articles = [
        [
            'title' => 'How I structure multi-tenant SaaS apps in Laravel',
            'slug' => 'multi-tenant-laravel',
            'category' => 'saas-crm',
            'date' => 'Mar 2026',
            'read_time' => '8 min read'
        ],
        [
            'title' => 'Build your CRM around your sales process — not the other way round',
            'slug' => 'crm-around-sales-process',
            'category' => 'saas-crm',
            'date' => 'Feb 2026',
            'read_time' => '7 min read'
        ],
        [
            'title' => 'Five manual tasks most businesses should automate first',
            'slug' => 'automate-repetitive-work',
            'category' => 'automation-ai',
            'date' => 'Feb 2026',
            'read_time' => '5 min read'
        ]
    ];

    public function getAll() {
        return $this->articles;
    }

    public function getByCategory($category) {
        return array_values(array_filter($this->articles, function($a) use ($category) {
            return $a['category'] === $category;
        }));
    }
}
