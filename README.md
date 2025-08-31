# Waja General Company Website 🌟

A modern, enterprise-grade website showcasing Waja General Company's diverse portfolio of services across Bio-Medical, Insurance, and Education sectors.

## Table of Contents
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Development](#development)
- [Testing](#testing)
- [Deployment](#deployment)
- [Maintenance](#maintenance)
- [Support](#support)

## ⭐ Features

### Core Functionality
- **Multi-Division Support**
  - Waja Bio-Medical Services
  - Waja Insurance Services 
  - Waja Schools & Education
  
- **Interactive UI Components**
  - Dynamic mega menu navigation
  - Responsive image galleries
  - Animated statistics counters
  - Interactive forms with validation
  - Real-time newsletter subscription
  - Floating action buttons
  - Smooth scroll behaviors

- **Performance Optimizations**
  - Lazy loading images
  - Code splitting
  - Asset minification
  - Cache management
  - CDN integration
  - Database query optimization

- **SEO & Analytics**
  - Meta tags optimization
  - Schema markup
  - Sitemap generation
  - Google Analytics integration
  - Social media meta tags
  - Structured data implementation

### Business Features
- **Bio-Medical Division**
  - Product catalogs
  - Technical specifications
  - Research publications
  - Equipment documentation

- **Insurance Services**
  - Policy comparisons
  - Premium calculators
  - Claims management
  - Client portals

- **Education Division**
  - Course catalogs
  - Student portals
  - Academic calendars
  - Resource libraries

## 🛠️ Tech Stack

### Frontend
- HTML5/CSS3
- Tailwind CSS 3.x
- Alpine.js 3.x
- JavaScript ES6+
- Swiper.js
- GSAP (Animations)

### Backend
- Laravel 10.x
- PHP 8.1+
- MySQL 8.0+
- Redis (Caching)
- Mailgun (Email)

### DevOps & Tools
- Git
- Docker
- Vite
- npm
- Composer
- GitHub Actions
- Laravel Mix

## 📋 Requirements

### System Requirements
- PHP >= 8.1
- MySQL >= 8.0
- Node.js >= 16.x
- Composer 2.x
- npm >= 8.x

### Server Requirements
- Apache/Nginx
- SSL Certificate
- 2GB RAM minimum
- 20GB storage minimum

## 💻 Installation

### Windows Setup

```powershell
# Install Required Tools
choco install php composer nodejs mysql -y

# Clone Repository
git clone https://github.com/your-username/waja-general.git
cd waja-general

# Install Dependencies
composer install
npm install

# Configure Environment
copy .env.example .env
php artisan key:generate

# Setup Database
php artisan migrate --seed
