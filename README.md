# Amaanullah — Custom Software & Web Development Portfolio

A 3D-interactive, modern portfolio and agency website showcasing full-stack development, custom CRMs, SaaS solutions, mobile applications, and AI integrations.

## 🚀 Features

- **3D Interactive Hero**: Three.js-powered 3D visuals with interactive camera and particles.
- **Dynamic Header & Footer**: Modular PHP header and footer architecture included across all pages.
- **Modern Dark Theme Aesthetic**: Sleek glassmorphism, responsive grid layouts, and custom typography (Plus Jakarta Sans & Caveat).
- **Service & Project Details**: Comprehensive case studies, category filters, and detail pages.
- **AI Chatbot Widget**: Interactive assistant with quick reply chips, simulated quotes, and human handoff (WhatsApp integration).
- **Interactive Contact Page**: Multi-step quote request, attachment uploader, and validation.

## 🛠️ Tech Stack

- **Backend**: Custom PHP 8.x MVC Framework (Router, Controllers, Models, PDO Database, File Logger)
- **Frontend**: Vanilla JavaScript (ES6+), Three.js 3D Canvas, CSS3 Design System
- **Server**: Apache / LiteSpeed / Nginx compatible with URL rewrites

## 📂 Custom MVC Project Structure

```
web3d/
├── app/                  # Application core
│   ├── Controllers/      # Controllers (Home, About, Service, Project, Article, Contact)
│   ├── Core/             # Framework engines (App router, Controller, Database, Model, Logger)
│   ├── Helpers/          # Global helper functions (env, base_url, asset_url, sanitize, view)
│   └── Models/           # Data & Business models (ServiceModel, ProjectModel, ArticleModel, ContactModel)
├── bin/                  # CLI and maintenance utilities
├── config/               # App & Database configurations (app.php, database.php)
├── database/             # Database schema migrations & tables (schema.sql)
├── public/               # Public document root & static assets
│   ├── css/              # Stylesheets (style.css, chatbot.css, services.css, etc.)
│   ├── js/               # Client scripts (main.js, chatbot.js, etc.)
│   ├── images/           # Web visuals, icons & banners
│   ├── logo-v2/          # Favicon icons
│   ├── .htaccess         # Public Apache rewrite rules
│   └── index.php         # Public entry point
├── storage/              # Runtime data
│   ├── logs/             # Application exception & activity logs (app.log)
│   └── cache/            # Caching layer
├── views/                # Presentation layer
│   ├── layouts/          # Reusable layouts (header.php, footer.php)
│   ├── home/             # Landing view (index.php)
│   ├── about/            # About biography view (index.php)
│   ├── services/         # Services catalog & detail views
│   ├── projects/         # Work portfolio & case study views
│   ├── articles/         # Technical insights & category views
│   ├── contact/          # Inquiries & appointment views
│   └── errors/           # Error pages (404.php, 500.php)
├── .env                  # Local environment configuration
├── .env.example          # Template environment configuration
├── .gitignore            # Git exclusion rules
├── .htaccess             # Root URL routing & security headers
├── composer.json         # PSR-4 Autoloading registry
└── index.php             # Master Front Controller bootstrap
```

## 💻 Local Setup

1. Place the project directory in your web server root (e.g. `xampp/htdocs/web3d`).
2. Start Apache via XAMPP Control Panel.
3. Open `http://localhost/web3d/` in your browser. All clean routes (`/about`, `/services`, `/projects`, `/articles`, `/contact`) work out-of-the-box.

## 👤 Author

**Amaanullah Khan**
- Website: [amaanullah.com](https://amaanullah.com)
- WhatsApp: [+92 319 6935307](https://wa.me/923196935307)
- Email: [info@amaanullah.com](mailto:info@amaanullah.com)
