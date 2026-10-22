<?php
namespace App\Models;

use App\Core\Model;

class ServiceModel extends Model {
    private $services = [
        'crm' => [
            'slug'      => 'crm',
            'tag'       => 'CORE EXPERTISE',
            'title'     => 'Custom CRM Development',
            'subtitle'  => 'Tailored Customer Relationship Platforms Built Around Your Exact Sales Process',
            'hero_desc' => 'Off-the-shelf CRMs force your team into someone else\'s workflow. We engineer proprietary CRM solutions that mirror your actual customer lifecycle, automate lead distribution, eliminate repetitive entry, and deliver real-time operational visibility.',
            'stat_1'    => ['3.4x', 'Pipeline Velocity Increase'],
            'stat_2'    => ['100%', 'Ownership & Zero Recurring Seats'],
            'stat_3'    => ['<350ms', 'Average Query Response Time']
        ],
        'ai' => [
            'slug'      => 'ai',
            'tag'       => 'INTELLIGENT SYSTEMS',
            'title'     => 'AI Automation Services',
            'subtitle'  => 'LLM Assistants, Smart Workflows & Autonomous Data Pipelines',
            'hero_desc' => 'Move beyond gimmick chatbots. We integrate custom AI models, RAG pipelines, and automated agent workflows directly into your operational software, saving hundreds of hours weekly.',
            'stat_1'    => ['70%', 'Reduction in Manual Triaging'],
            'stat_2'    => ['24/7', 'Instant Lead Engagement'],
            'stat_3'    => ['99.4%', 'Accuracy in Form Extraction']
        ],
        'web' => [
            'slug'      => 'web',
            'tag'       => 'SCALABLE ARCHITECTURE',
            'title'     => 'Web App & CMS Development',
            'subtitle'  => 'High-Performance Custom Web Applications Built with Clean Code',
            'hero_desc' => 'From high-concurrency client portals to headless content management platforms, we engineer responsive web systems prioritizing sub-second load times and modular architectures.',
            'stat_1'    => ['98+', 'Google PageSpeed Score'],
            'stat_2'    => ['99.9%', 'Production Uptime'],
            'stat_3'    => ['25k+', 'Concurrent User Scalability']
        ],
        'saas' => [
            'slug'      => 'saas',
            'tag'       => 'MULTI-TENANT PLATFORMS',
            'title'     => 'SaaS Application Development',
            'subtitle'  => 'Subscription Billing, Tenant Isolation & Scalable Microservices',
            'hero_desc' => 'End-to-end development of software-as-a-service products from initial data modeling and multi-tenant schema isolation to Stripe billing integration and automated user onboarding.',
            'stat_1'    => ['Zero', 'Cross-Tenant Data Bleed'],
            'stat_2'    => ['Stripe', 'Built-in Prorated Billing'],
            'stat_3'    => ['SOC-2', 'Security Standard Architecture']
        ],
        'mobile' => [
            'slug'      => 'mobile',
            'tag'       => 'CROSS-PLATFORM',
            'title'     => 'Mobile App Development',
            'subtitle'  => 'High-Performance Native-Feeling Apps for iOS & Android with Flutter',
            'hero_desc' => 'Single codebase, native compilation. We build Flutter mobile apps backed by robust Laravel REST APIs, offline data sync, push notifications, and biometric authentication.',
            'stat_1'    => ['60 FPS', 'Fluid UI Animations'],
            'stat_2'    => ['1 Codebase', 'iOS & Android Sync'],
            'stat_3'    => ['Offline', 'Full Local Cache Engine']
        ],
        'performance' => [
            'slug'      => 'performance',
            'tag'       => 'SPEED & OPTIMIZATION',
            'title'     => 'Performance Tuning & Auditing',
            'subtitle'  => 'Database Optimization, Caching Layers & Sub-Second Query Tuning',
            'hero_desc' => 'Sluggish applications bleed revenue. We profile slow database queries, implement Redis multi-layer caching, optimize asset payloads, and fix memory bottlenecks in production apps.',
            'stat_1'    => ['82%', 'Database Load Reduction'],
            'stat_2'    => ['<150ms', 'TTFB Across Global CDN'],
            'stat_3'    => ['4.2x', 'Throughput Boost']
        ]
    ];

    public function getAll() {
        return array_values($this->services);
    }

    public function getBySlug($slug) {
        $key = strtolower(trim($slug));
        return $this->services[$key] ?? $this->services['crm'];
    }
}
