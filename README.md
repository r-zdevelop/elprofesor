# ElProfesor - Personal Portfolio & Blog

A modern personal portfolio website built with Laravel 11 and React, featuring a markdown-based blog system with clean architecture principles.

## Tech Stack

- **Backend:** PHP 8.4, Laravel 11
- **Frontend:** React, Vite, Tailwind CSS
- **Database:** MariaDB
- **Architecture:** SOLID Principles, Clean Architecture

## Features

### Portfolio Sections
- Hero section with professional introduction
- Projects showcase with detailed descriptions
- About section highlighting skills and experience
- Contact information and social networks
- Responsive design for all devices

### Blog System
- Markdown-based content storage
- Categories and tags support
- Draft and published post management
- SEO optimization (meta descriptions, keywords)
- Reading time estimation
- Slug-based URLs for better SEO

## Database Schema

### Posts Table
Stores blog posts with markdown content:
- Title, slug, excerpt
- Markdown content (longText)
- Category relationship
- Status (draft/published/archived)
- SEO fields (meta_description, meta_keywords)
- Reading time calculation
- Featured images support

### Categories & Tags
- Categories: Hierarchical organization of posts
- Tags: Flexible many-to-many tagging system
- Slug-based URLs for both

## Installation

### Requirements
- PHP 8.4+
- Composer
- Node.js & npm
- MariaDB

### Setup

1. Clone the repository
```bash
git clone https://github.com/yourusername/elprofesor.git
cd elprofesor
```

2. Install dependencies
```bash
composer install
npm install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Update `.env` with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elprofesor
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations and seed database
```bash
php artisan migrate
php artisan db:seed --class=BlogSeeder
```

6. Build assets
```bash
npm run build
# or for development
npm run dev
```

7. Start development server
```bash
php artisan serve
```

Visit `http://localhost:8000`

## Project Structure

```
elprofesor/
├── app/
│   ├── Http/Controllers/     # Request handlers
│   ├── Models/              # Eloquent models (Post, Category, Tag)
│   └── View/Components/     # Blade components
├── database/
│   ├── migrations/          # Database schema
│   └── seeders/            # Sample data
├── resources/
│   ├── css/                # Tailwind styles
│   ├── js/                 # React components
│   └── views/              # Blade templates
└── routes/
    └── web.php             # Application routes
```

## Models & Relationships

### Post Model
```php
// Relationships
belongsTo(Category::class)
belongsToMany(Tag::class)

// Query Scopes
Post::published()  // Only published posts
Post::draft()      // Only draft posts
```

### Category Model
```php
hasMany(Post::class)
```

### Tag Model
```php
belongsToMany(Post::class)
```

## Development Guides

The blog includes development guides and tutorials:
- [Ubuntu Apache PHP Setup Guide](resources/views/guides/ubuntu-apache-php.blade.php)

## Code Quality

This project follows:
- **SOLID Principles** for maintainable code
- **Clean Architecture** for separation of concerns
- **Laravel Best Practices** for consistent coding standards
- **Component-based UI** with reusable Blade components

## Testing

```bash
php artisan test
```

## Deployment

This application can be deployed on any platform supporting PHP and MariaDB:
- Traditional LAMP/LEMP stack
- Platform.sh
- Laravel Forge
- AWS, DigitalOcean, etc.

## Contributing

This is a personal portfolio project, but suggestions and feedback are welcome through issues.

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

**Built with ❤️ using Laravel**
