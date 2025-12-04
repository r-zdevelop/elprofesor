<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $phpCategory = Category::create([
            'name' => 'PHP',
            'slug' => 'php',
            'description' => 'PHP development articles and tutorials',
        ]);

        $laravelCategory = Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => 'Laravel framework guides and best practices',
        ]);

        $tutorialTag = Tag::create([
            'name' => 'Tutorial',
            'slug' => 'tutorial',
        ]);

        $beginnerTag = Tag::create([
            'name' => 'Beginner',
            'slug' => 'beginner',
        ]);

        $advancedTag = Tag::create([
            'name' => 'Advanced',
            'slug' => 'advanced',
        ]);

        $post1 = Post::create([
            'title' => 'Getting Started with PHP 8.4',
            'slug' => 'getting-started-with-php-8-4',
            'excerpt' => 'Learn the new features and improvements in PHP 8.4',
            'content' => '# Getting Started with PHP 8.4

PHP 8.4 brings several exciting features and improvements that make the language more powerful and developer-friendly.

## New Features

### 1. Property Hooks
Property hooks allow you to define custom logic when getting or setting properties without writing explicit getter and setter methods.

```php
class User {
    public string $name {
        set => ucfirst($value);
    }
}
```

### 2. Asymmetric Visibility
You can now have different visibility for reading and writing properties.

```php
class User {
    public private(set) string $name;
}
```

## Conclusion
PHP 8.4 continues to evolve the language with features that improve code quality and developer experience.',
            'category_id' => $phpCategory->id,
            'status' => 'published',
            'published_at' => now(),
            'meta_description' => 'Discover the new features in PHP 8.4',
            'meta_keywords' => 'PHP, PHP 8.4, programming',
            'reading_time' => 5,
        ]);

        $post1->tags()->attach([$tutorialTag->id, $beginnerTag->id]);

        $post2 = Post::create([
            'title' => 'Building a RESTful API with Laravel',
            'slug' => 'building-restful-api-laravel',
            'excerpt' => 'A comprehensive guide to building RESTful APIs using Laravel',
            'content' => '# Building a RESTful API with Laravel

Laravel provides excellent tools for building RESTful APIs quickly and efficiently.

## Setting Up Routes

First, define your API routes in `routes/api.php`:

```php
Route::apiResource(\'posts\', PostController::class);
```

## Creating Controllers

Use the `--api` flag to generate API controllers:

```bash
php artisan make:controller PostController --api
```

## API Resources

Laravel API resources provide a transformation layer between your models and JSON responses:

```php
class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            \'id\' => $this->id,
            \'title\' => $this->title,
            \'content\' => $this->content,
        ];
    }
}
```

## Authentication

Use Laravel Sanctum for API authentication:

```bash
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

## Conclusion
Laravel makes API development straightforward with its powerful tools and conventions.',
            'category_id' => $laravelCategory->id,
            'status' => 'published',
            'published_at' => now()->subDays(1),
            'meta_description' => 'Learn how to build RESTful APIs with Laravel',
            'meta_keywords' => 'Laravel, API, REST, PHP',
            'reading_time' => 10,
        ]);

        $post2->tags()->attach([$tutorialTag->id, $advancedTag->id]);

        $post3 = Post::create([
            'title' => 'SOLID Principles in PHP',
            'slug' => 'solid-principles-php',
            'excerpt' => 'Understanding and applying SOLID principles in PHP development',
            'content' => '# SOLID Principles in PHP

SOLID is an acronym for five design principles that make software more maintainable and flexible.

## Single Responsibility Principle (SRP)
A class should have only one reason to change.

```php
// Bad
class User {
    public function save() { }
    public function sendEmail() { }
}

// Good
class User {
    public function save() { }
}

class EmailService {
    public function sendEmail(User $user) { }
}
```

## Open/Closed Principle (OCP)
Classes should be open for extension but closed for modification.

## Liskov Substitution Principle (LSP)
Derived classes must be substitutable for their base classes.

## Interface Segregation Principle (ISP)
Many specific interfaces are better than one general interface.

## Dependency Inversion Principle (DIP)
Depend on abstractions, not concretions.

## Conclusion
Applying SOLID principles leads to more maintainable and testable code.',
            'category_id' => $phpCategory->id,
            'status' => 'draft',
            'published_at' => null,
            'meta_description' => 'Master SOLID principles for better PHP code',
            'meta_keywords' => 'SOLID, PHP, design patterns, clean code',
            'reading_time' => 15,
        ]);

        $post3->tags()->attach([$advancedTag->id]);
    }
}
