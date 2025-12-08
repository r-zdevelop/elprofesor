@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4">
    <!-- Header -->
    <div class="mb-12">
        <a href="{{ route('guide.ubuntu-apache-php') }}" class="text-blue-600 hover:text-blue-800 inline-flex items-center mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Part 1
        </a>

        <h1 class="text-4xl font-bold text-gray-900 mb-4">Ubuntu 24.04 PHP Development: MySQL, Virtual Hosts & Xdebug</h1>
        <p class="text-xl text-gray-600 mb-4">Part 2: Professional development tools setup (December 2025)</p>
        <p class="text-gray-700">Complete your PHP development environment with MySQL/MariaDB, wildcard virtual hosts, Xdebug debugging, APCu caching, and YAML support.</p>
    </div>

    <!-- Prerequisites Box -->
    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8 rounded-r-lg">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-lg font-bold text-blue-900 mb-2">📋 Prerequisites</h3>
                <p class="text-blue-900 mb-2">Before starting this guide, you must have completed <strong>Part 1</strong> where you installed:</p>
                <ul class="list-disc ml-5 space-y-1 text-blue-900">
                    <li>Apache 2.4 with PHP-FPM support</li>
                    <li>Multiple PHP versions (7.0 - 8.4)</li>
                    <li>The <code class="bg-blue-100 px-2 py-1 rounded text-sm">sphp</code> version switcher script</li>
                    <li>Working <code class="bg-blue-100 px-2 py-1 rounded text-sm">~/Sites</code> directory</li>
                </ul>
                <p class="text-blue-900 mt-3">If you haven't done Part 1 yet, <a href="{{ route('guide.ubuntu-apache-php') }}" class="underline font-semibold">go back and complete it first</a>!</p>
            </div>
        </div>
    </div>

    <!-- What You'll Get Box -->
    <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8 rounded-r-lg">
        <h3 class="text-lg font-bold text-green-900 mb-3">What You'll Have After This Guide</h3>
        <ul class="space-y-2 text-green-900">
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                MariaDB (MySQL drop-in replacement) with phpMyAdmin or Adminer
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Easy <code class="bg-green-100 px-2 py-1 rounded text-sm">*.test</code> domains (myproject.test, blog.test) with simple addhost script
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Xdebug for all PHP versions with easy on/off toggle
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                APCu cache for 5X faster YAML processing
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Native YAML support for modern PHP frameworks
            </li>
        </ul>
    </div>

    <!-- Table of Contents -->
    <div class="bg-gray-50 rounded-lg p-6 mb-8">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Table of Contents</h3>
        <nav class="space-y-2">
            <a href="#mysql" class="block text-blue-600 hover:text-blue-800">1. MySQL/MariaDB Installation</a>
            <a href="#phpmyadmin" class="block text-blue-600 hover:text-blue-800">2. phpMyAdmin or Adminer Setup</a>
            <a href="#virtual-hosts" class="block text-blue-600 hover:text-blue-800">3. Apache Virtual Hosts</a>
            <a href="#dnsmasq" class="block text-blue-600 hover:text-blue-800">4. DNS Resolution (addhost script or Dnsmasq)</a>
            <a href="#xdebug" class="block text-blue-600 hover:text-blue-800">5. Xdebug Installation</a>
            <a href="#xdebug-config" class="block text-blue-600 hover:text-blue-800">6. Xdebug Configuration</a>
            <a href="#xdebug-switcher" class="block text-blue-600 hover:text-blue-800">7. Xdebug Switcher Script</a>
            <a href="#xdebug-cli" class="block text-blue-600 hover:text-blue-800">8. CLI Xdebug Setup</a>
            <a href="#apcu" class="block text-blue-600 hover:text-blue-800">9. APCu Cache Installation</a>
            <a href="#yaml" class="block text-blue-600 hover:text-blue-800">10. YAML Extension</a>
            <a href="#testing" class="block text-blue-600 hover:text-blue-800">11. Final Testing</a>
        </nav>
    </div>

    <!-- Steps -->
    <div class="space-y-12">
        <!-- MySQL/MariaDB -->
        <section id="mysql">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">1</span>
                MySQL/MariaDB Installation
            </h2>
            <p class="text-gray-700 mb-4">MariaDB is a drop-in replacement for MySQL that's faster, more open, and easier to manage. It's what most modern servers use today.</p>
            
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y mariadb-server mariadb-client
sudo systemctl enable mariadb
sudo systemctl start mariadb</code></pre>
            </div>
            
            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Secure Your Installation</h3>
            <p class="text-gray-700 mb-4">Run the security script to set a root password and remove test databases:</p>
            
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo mysql_secure_installation</code></pre>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mt-4">
                <p class="text-yellow-900 font-medium mb-2">Answer the prompts like this:</p>
                <ul class="list-disc ml-5 space-y-1 text-yellow-900">
                    <li><strong>Switch to unix_socket authentication?</strong> → No</li>
                    <li><strong>Change the root password?</strong> → Yes (set a strong password)</li>
                    <li><strong>Remove anonymous users?</strong> → Yes</li>
                    <li><strong>Disallow root login remotely?</strong> → Yes</li>
                    <li><strong>Remove test database?</strong> → Yes</li>
                    <li><strong>Reload privilege tables?</strong> → Yes</li>
                </ul>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Test the Connection</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo mysql -u root -p</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Enter your password. If you see <code class="bg-gray-200 px-2 py-1 rounded">MariaDB [(none)]></code> you're in! Type <code class="bg-gray-200 px-2 py-1 rounded">exit</code> to leave.</p>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Create a Development User (Recommended)</h3>
            <p class="text-gray-700 mb-4">Instead of using root for everything, create a dedicated development user:</p>
            
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo mysql -u root -p</code></pre>
            </div>

            <p class="text-gray-700 mb-2 mt-4">Then run these SQL commands:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>CREATE USER 'devuser'@'localhost' IDENTIFIED BY 'YourSecurePassword123!';
GRANT ALL PRIVILEGES ON *.* TO 'devuser'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EXIT;</code></pre>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">CREATE USER</code> – Creates a new MySQL user (like creating a new system user)</li>
                    <li><code class="bg-gray-100 px-1 rounded">GRANT ALL PRIVILEGES</code> – Gives the user full access to all databases</li>
                    <li><code class="bg-gray-100 px-1 rounded">FLUSH PRIVILEGES</code> – Reloads the permission tables (makes changes take effect)</li>
                </ul>
            </div>
        </section>

        <!-- phpMyAdmin/Adminer -->
        <section id="phpmyadmin">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">2</span>
                Database Management: phpMyAdmin or Adminer
            </h2>
            <p class="text-gray-700 mb-4">Choose one of these tools to manage your databases visually:</p>

            <h3 class="text-xl font-bold text-gray-900 mb-3">Option A: Adminer (Recommended - Lightweight)</h3>
            <p class="text-gray-700 mb-4">Adminer is a single PHP file that's faster and simpler than phpMyAdmin:</p>

            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo mkdir -p ~/Sites/adminer
cd ~/Sites/adminer
sudo wget -O index.php https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php
chmod 644 index.php</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Access at: <a href="http://localhost/adminer" class="text-blue-600 hover:text-blue-800 underline">http://localhost/adminer</a></p>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Option B: phpMyAdmin (Full-Featured)</h3>
            <p class="text-gray-700 mb-4">If you need more features, install phpMyAdmin:</p>

            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y phpmyadmin php-mbstring php-zip php-gd php-json php-curl

# Create symbolic link to ~/Sites
sudo ln -s /usr/share/phpmyadmin ~/Sites/phpmyadmin</code></pre>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-4">
                <p class="text-blue-900 mb-2"><strong>During installation:</strong></p>
                <ul class="list-disc ml-5 space-y-1 text-blue-900">
                    <li><strong>Web server:</strong> Select <code class="bg-blue-100 px-1 rounded">apache2</code> (use spacebar to select)</li>
                    <li><strong>Configure database:</strong> Yes</li>
                    <li><strong>Password:</strong> Set a password for the phpMyAdmin application</li>
                </ul>
            </div>

            <p class="text-gray-600 text-sm mt-4">Access at: <a href="http://localhost/phpmyadmin" class="text-blue-600 hover:text-blue-800 underline">http://localhost/phpmyadmin</a></p>
            <p class="text-gray-600 text-sm">Login with user <code class="bg-gray-200 px-2 py-1 rounded">devuser</code> or <code class="bg-gray-200 px-2 py-1 rounded">root</code> and your password.</p>
        </section>

        <!-- Virtual Hosts -->
        <section id="virtual-hosts">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">3</span>
                Apache Virtual Hosts Configuration
            </h2>
            <p class="text-gray-700 mb-4">Virtual hosts let you use custom domain names like <code class="bg-gray-200 px-2 py-1 rounded">myproject.test</code> instead of <code class="bg-gray-200 px-2 py-1 rounded">localhost/myproject</code>.</p>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                <p class="text-blue-900 mb-2"><strong>Two Approaches:</strong></p>
                <ul class="list-disc ml-5 space-y-1 text-blue-900 text-sm">
                    <li><strong>Individual VHost Files (Recommended)</strong> - One file per project, more flexible and professional</li>
                    <li><strong>Wildcard VHost</strong> - Single file for all projects, simpler but less configurable</li>
                </ul>
            </div>

            <!-- Option A: Individual VHost Files -->
            <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                <h3 class="text-xl font-bold text-green-900 mb-3">✅ Option A: Individual Virtual Host Files (Recommended)</h3>
                <p class="text-green-900 mb-4">Create a separate virtual host file for each project. This gives you full control over each project's configuration.</p>

                <h4 class="font-bold text-green-900 mb-2">Step 1: Keep localhost working</h4>
                <p class="text-green-900 mb-2 text-sm">First, ensure localhost still works for your ~/Sites directory:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo nano /etc/apache2/sites-available/000-default.conf</code></pre>
                </div>

                <p class="text-green-900 mb-2 mt-3 text-sm">Update DocumentRoot to point to your Sites directory:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>DocumentRoot /home/YOUR_USERNAME/Sites

&lt;Directory /home/YOUR_USERNAME/Sites>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
&lt;/Directory></code></pre>
                </div>

                <h4 class="font-bold text-green-900 mt-4 mb-2">Step 2: Create a VHost file for each project</h4>
                <p class="text-green-900 mb-2 text-sm">For each project, create a new virtual host file. Here's an example for "myproject":</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo nano /etc/apache2/sites-available/myproject.test.conf</code></pre>
                </div>

                <p class="text-green-900 mb-2 mt-3 text-sm">Paste this configuration:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>&lt;VirtualHost *:80>
    ServerName myproject.test
    ServerAlias www.myproject.test
    DocumentRoot /home/YOUR_USERNAME/Sites/myproject

    &lt;Directory /home/YOUR_USERNAME/Sites/myproject>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    &lt;/Directory>

    ErrorLog ${APACHE_LOG_DIR}/myproject-error.log
    CustomLog ${APACHE_LOG_DIR}/myproject-access.log combined
&lt;/VirtualHost></code></pre>
                </div>

                <div class="bg-orange-100 border-l-4 border-orange-400 p-3 mt-3 mb-3">
                    <p class="text-orange-900 text-sm"><strong>Remember:</strong> Replace <code class="bg-orange-200 px-1 rounded">YOUR_USERNAME</code> with your actual Ubuntu username!</p>
                </div>

                <h4 class="font-bold text-green-900 mt-4 mb-2">Step 3: Enable the virtual host</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo a2ensite myproject.test.conf
sudo systemctl reload apache2</code></pre>
                </div>

                <h4 class="font-bold text-green-900 mt-4 mb-2">Step 4: Add the domain to hosts</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo addhost myproject</code></pre>
                </div>

                <h4 class="font-bold text-green-900 mt-4 mb-2">Quick Script to Create New VHosts</h4>
                <p class="text-green-900 mb-2 text-sm">Create a helper script to make this easier:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo nano /usr/local/bin/vhost</code></pre>
                </div>

                <p class="text-green-900 mb-2 mt-3 text-sm">Paste this script:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
<pre class="text-gray-100 text-sm"><code>#!/usr/bin/env bash
# vhost - Create Apache virtual hosts quickly
# Auto-detects Laravel/Symfony projects and sets correct DocumentRoot
# Usage: sudo vhost myproject [docroot]
#   sudo vhost myproject           - Auto-detect (public/ for Laravel/Symfony)
#   sudo vhost myproject public    - Force public/ subdirectory
#   sudo vhost myproject web       - Use web/ subdirectory
#   sudo vhost myproject .         - Use project root

if [ -z "$1" ]; then
    echo "Usage: sudo vhost projectname [docroot]"
    echo ""
    echo "Examples:"
    echo "  sudo vhost myproject         # Auto-detect Laravel/Symfony"
    echo "  sudo vhost myproject public  # Force public/ directory"
    echo "  sudo vhost myproject .       # Use project root"
    exit 1
fi

PROJECT="$1"
DOMAIN="${PROJECT}.test"
USERNAME=$(logname)
VHOST_FILE="/etc/apache2/sites-available/${DOMAIN}.conf"
PROJECT_DIR="/home/${USERNAME}/Sites/${PROJECT}"
DOCROOT_SUBDIR="${2:-auto}"

# Create project directory if it doesn't exist
if [ ! -d "$PROJECT_DIR" ]; then
    mkdir -p "$PROJECT_DIR"
    chown ${USERNAME}:${USERNAME} "$PROJECT_DIR"
    echo "✓ Created directory: $PROJECT_DIR"
fi

# Auto-detect DocumentRoot
if [ "$DOCROOT_SUBDIR" == "auto" ]; then
    # Check if it's a Laravel/Symfony project
    if [ -f "$PROJECT_DIR/artisan" ] || [ -f "$PROJECT_DIR/composer.json" ]; then
        if [ -d "$PROJECT_DIR/public" ]; then
            DOCROOT_SUBDIR="public"
            echo "ℹ️  Detected Laravel/Symfony project - using public/ directory"
        fi
    elif [ -d "$PROJECT_DIR/web" ]; then
        DOCROOT_SUBDIR="web"
        echo "ℹ️  Detected web/ directory"
    else
        DOCROOT_SUBDIR="."
    fi
fi

# Set DocumentRoot
if [ "$DOCROOT_SUBDIR" == "." ]; then
    DOCUMENT_ROOT="$PROJECT_DIR"
else
    DOCUMENT_ROOT="${PROJECT_DIR}/${DOCROOT_SUBDIR}"
    # Create subdirectory if it doesn't exist
    if [ ! -d "$DOCUMENT_ROOT" ]; then
        mkdir -p "$DOCUMENT_ROOT"
        chown ${USERNAME}:${USERNAME} "$DOCUMENT_ROOT"
        echo "✓ Created DocumentRoot: $DOCUMENT_ROOT"
    fi
fi

# Create virtual host file
cat > "$VHOST_FILE" <<EOF
<VirtualHost *:80>
    ServerName ${DOMAIN}
    ServerAlias www.${DOMAIN}
    DocumentRoot ${DOCUMENT_ROOT}

    <Directory ${DOCUMENT_ROOT}>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    # Additional security for Laravel/Symfony
    <Directory ${PROJECT_DIR}>
        Options FollowSymLinks
        AllowOverride None
        Require all denied
    </Directory>

    <Directory ${DOCUMENT_ROOT}>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog \${APACHE_LOG_DIR}/${PROJECT}-error.log
    CustomLog \${APACHE_LOG_DIR}/${PROJECT}-access.log combined
</VirtualHost>
EOF

echo "✓ Created virtual host: $VHOST_FILE"
echo "  DocumentRoot: $DOCUMENT_ROOT"

# Enable site
a2ensite "${DOMAIN}.conf" > /dev/null 2>&1
echo "✓ Enabled virtual host: ${DOMAIN}"

# Add to hosts file using addhost
if command -v addhost > /dev/null; then
    addhost "$PROJECT"
else
    echo "127.0.0.1 ${DOMAIN}" >> /etc/hosts
    echo "✓ Added ${DOMAIN} to /etc/hosts"
fi

# Reload Apache
systemctl reload apache2
echo "✓ Apache reloaded"
echo ""
echo "🎉 All done! Visit http://${DOMAIN}"</code></pre>
                </div>

                <p class="text-green-900 mt-3 mb-2 text-sm">Make it executable:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo chmod +x /usr/local/bin/vhost</code></pre>
                </div>

                <h4 class="font-bold text-green-900 mt-4 mb-2">Usage Examples:</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code># Auto-detect Laravel/Symfony projects
sudo vhost mylaravel    # Automatically uses public/ if Laravel detected

# Create a simple PHP project
sudo vhost myproject    # Uses project root

# Force specific document root
sudo vhost myapp public # Always use public/ directory
sudo vhost legacyapp .  # Use project root directory

# Real-world Laravel example
cd ~/Sites
composer create-project laravel/laravel myblog
sudo vhost myblog       # Auto-detects and uses myblog/public/</code></pre>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-3 mt-3">
                    <p class="text-blue-900 text-sm font-semibold mb-1">🎯 Smart Detection:</p>
                    <ul class="list-disc ml-5 text-blue-900 text-sm space-y-1">
                        <li>Automatically detects Laravel/Symfony by looking for <code class="bg-blue-100 px-1 rounded">artisan</code> or <code class="bg-blue-100 px-1 rounded">composer.json</code></li>
                        <li>If <code class="bg-blue-100 px-1 rounded">public/</code> directory exists → uses it as DocumentRoot</li>
                        <li>Adds security rules to prevent access to parent directories</li>
                        <li>Works with existing projects or creates new ones</li>
                    </ul>
                </div>

                <div class="mt-3 text-sm text-green-900">
                    <p class="font-semibold mb-1">Pros:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>Full control over each project's configuration</li>
                        <li>Can set different PHP versions per project</li>
                        <li>Separate error logs for each project</li>
                        <li>Can add custom settings per project</li>
                        <li>More professional and maintainable</li>
                    </ul>
                    <p class="font-semibold mb-1 mt-2">Cons:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>Need to create a file for each project</li>
                        <li>Slightly more initial setup (but vhost script makes it easy!)</li>
                    </ul>
                </div>
            </div>

            <!-- Option B: Wildcard VHost -->
            <div class="bg-gray-50 border-l-4 border-gray-400 p-4 mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Option B: Wildcard Virtual Host (Simple)</h3>
                <p class="text-gray-700 mb-4">One configuration file that automatically handles all <code class="bg-gray-200 px-2 py-1 rounded">*.test</code> domains. Simpler but less flexible.</p>

                <h4 class="font-bold text-gray-900 mb-2">Enable Required Modules</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo a2enmod vhost_alias
sudo systemctl restart apache2</code></pre>
                </div>

                <h4 class="font-bold text-gray-900 mt-4 mb-2">Create Virtual Host Configuration</h4>
                <p class="text-gray-700 mb-2 text-sm">Create a new configuration file:</p>

                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo nano /etc/apache2/sites-available/dev-vhosts.conf</code></pre>
                </div>

                <p class="text-gray-700 mb-2 mt-3 text-sm">Paste this configuration:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code># Default localhost - keeps working as-is
&lt;VirtualHost *:80>
    ServerName localhost
    DocumentRoot /home/YOUR_USERNAME/Sites

    &lt;Directory /home/YOUR_USERNAME/Sites>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    &lt;/Directory>

    ErrorLog ${APACHE_LOG_DIR}/localhost-error.log
    CustomLog ${APACHE_LOG_DIR}/localhost-access.log combined
&lt;/VirtualHost>

# Wildcard *.test domains
&lt;VirtualHost *:80>
    ServerAlias *.test
    VirtualDocumentRoot /home/YOUR_USERNAME/Sites/%1

    &lt;Directory /home/YOUR_USERNAME/Sites>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    &lt;/Directory>

    ErrorLog ${APACHE_LOG_DIR}/vhosts-error.log
    CustomLog ${APACHE_LOG_DIR}/vhosts-access.log combined
&lt;/VirtualHost></code></pre>
                </div>

                <div class="bg-orange-100 border-l-4 border-orange-400 p-3 mt-3 mb-3">
                    <p class="text-orange-900 text-sm"><strong>Remember:</strong> Replace <code class="bg-orange-200 px-1 rounded">YOUR_USERNAME</code> with your actual Ubuntu username!</p>
                </div>

                <h4 class="font-bold text-gray-900 mt-4 mb-2">Enable the Configuration</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo a2ensite dev-vhosts.conf
sudo systemctl reload apache2</code></pre>
                </div>

                <div class="mt-3 text-sm text-gray-700">
                    <p class="font-semibold mb-1">How it works:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li><code class="bg-gray-100 px-1 rounded">ServerAlias *.test</code> – Matches any domain ending in <code class="bg-gray-100 px-1 rounded">.test</code></li>
                        <li><code class="bg-gray-100 px-1 rounded">VirtualDocumentRoot</code> – Maps <code class="bg-gray-100 px-1 rounded">myproject.test</code> → <code class="bg-gray-100 px-1 rounded">~/Sites/myproject</code></li>
                        <li><code class="bg-gray-100 px-1 rounded">%1</code> – Captures the first part of the domain name</li>
                    </ul>
                    <p class="font-semibold mb-1 mt-2">Pros:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>One-time setup - no need to create individual files</li>
                        <li>Automatically works for any new project</li>
                    </ul>
                    <p class="font-semibold mb-1 mt-2">Cons:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>All projects share the same configuration</li>
                        <li>Can't customize settings per project</li>
                        <li>All projects share one error log</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- DNS Resolution -->
        <section id="dnsmasq">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">4</span>
                DNS Resolution for *.test Domains
            </h2>
            <p class="text-gray-700 mb-4">You need a way to resolve <code class="bg-gray-200 px-2 py-1 rounded">*.test</code> domains to localhost. Choose one of these methods:</p>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                <p class="text-blue-900"><strong>Why .test?</strong> We use <code class="bg-blue-100 px-2 py-1 rounded">.test</code> instead of <code class="bg-blue-100 px-2 py-1 rounded">.dev</code> because Chrome now forces all <code class="bg-blue-100 px-2 py-1 rounded">.dev</code> domains to use HTTPS.</p>
            </div>

            <!-- Option A: addhost script -->
            <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                <h3 class="text-xl font-bold text-green-900 mb-3">✅ Option A: addhost Script (Recommended - Simpler)</h3>
                <p class="text-green-900 mb-3">If you have trouble with dnsmasq or prefer a simpler solution, use this script to manage <code class="bg-green-100 px-2 py-1 rounded">/etc/hosts</code> entries:</p>

                <h4 class="font-bold text-green-900 mb-2">Create the Script</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo nano /usr/local/bin/addhost</code></pre>
                </div>

                <p class="text-green-900 mt-3 mb-2">Paste this script:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>#!/usr/bin/env bash
# addhost - Manage .test domains in /etc/hosts

if [ "$1" == "list" ]; then
    echo "Current .test domains:"
    grep "\.test" /etc/hosts | grep -v "^#"
    exit 0
fi

if [ -z "$1" ]; then
    echo "Usage:"
    echo "  sudo addhost myproject        # Adds myproject.test"
    echo "  sudo addhost list             # List all .test domains"
    echo "  sudo addhost remove myproject # Remove myproject.test"
    exit 1
fi

if [ "$1" == "remove" ]; then
    DOMAIN="${2}.test"
    sudo sed -i "/$DOMAIN/d" /etc/hosts
    echo "✓ Removed $DOMAIN"
    exit 0
fi

DOMAIN="${1}.test"

# Check if already exists
if grep -q "127.0.0.1.*$DOMAIN" /etc/hosts; then
    echo "⚠️  $DOMAIN already exists"
    exit 0
fi

# Add to hosts
echo "127.0.0.1 $DOMAIN" | sudo tee -a /etc/hosts > /dev/null
echo "✓ Added $DOMAIN → http://$DOMAIN"</code></pre>
                </div>

                <p class="text-green-900 mt-3 mb-2">Make it executable:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo chmod +x /usr/local/bin/addhost</code></pre>
                </div>

                <h4 class="font-bold text-green-900 mt-4 mb-2">Usage Examples</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo addhost myproject        # Creates myproject.test
sudo addhost blog             # Creates blog.test
sudo addhost list             # Shows all .test domains
sudo addhost remove myproject # Removes myproject.test</code></pre>
                </div>

                <div class="mt-3 text-sm text-green-900">
                    <p class="font-semibold mb-1">Pros:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>Simple and straightforward</li>
                        <li>No service configuration needed</li>
                        <li>Works on all Linux distributions</li>
                        <li>Easy to add/remove domains</li>
                    </ul>
                    <p class="font-semibold mb-1 mt-2">Cons:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>Need to manually add each domain</li>
                        <li>No true wildcard support</li>
                    </ul>
                </div>
            </div>

            <!-- Option B: Dnsmasq -->
            <div class="bg-gray-50 border-l-4 border-gray-400 p-4 mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Option B: Dnsmasq (Advanced - True Wildcards)</h3>
                <p class="text-gray-700 mb-3">Dnsmasq automatically resolves ALL <code class="bg-gray-200 px-2 py-1 rounded">*.test</code> domains without manual entries. Use this if you want true wildcard support.</p>

                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-3 mb-4">
                    <p class="text-yellow-900 text-sm"><strong>Note:</strong> Dnsmasq can conflict with other DNS services. If you experience issues, use Option A instead.</p>
                </div>

                <h4 class="font-bold text-gray-900 mb-2">Install Dnsmasq</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo apt install -y dnsmasq</code></pre>
                </div>

                <h4 class="font-bold text-gray-900 mt-4 mb-2">Configure *.test Resolution</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>echo 'address=/.test/127.0.0.1' | sudo tee -a /etc/dnsmasq.conf</code></pre>
                </div>

                <h4 class="font-bold text-gray-900 mt-4 mb-2">Configure NetworkManager</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo nano /etc/NetworkManager/NetworkManager.conf</code></pre>
                </div>

                <p class="text-gray-700 mb-2 mt-3">Add this line under the <code class="bg-gray-200 px-2 py-1 rounded">[main]</code> section:</p>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>[main]
plugins=ifupdown,keyfile
dns=dnsmasq</code></pre>
                </div>

                <h4 class="font-bold text-gray-900 mt-4 mb-2">Restart Services</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>sudo systemctl restart dnsmasq
sudo systemctl restart NetworkManager</code></pre>
                </div>

                <h4 class="font-bold text-gray-900 mt-4 mb-2">Test It</h4>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                    <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        Copy
                    </button>
                    <pre class="text-gray-100 text-sm"><code>ping -c 3 anything.test</code></pre>
                </div>
                <p class="text-gray-600 text-sm mt-2">If you see <code class="bg-gray-200 px-2 py-1 rounded">64 bytes from 127.0.0.1</code> — success! 🎉</p>

                <div class="mt-3 text-sm text-gray-700">
                    <p class="font-semibold mb-1">Pros:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>True wildcard support - ALL <code class="bg-gray-100 px-1 rounded">*.test</code> domains work automatically</li>
                        <li>No need to manually add each domain</li>
                    </ul>
                    <p class="font-semibold mb-1 mt-2">Cons:</p>
                    <ul class="list-disc ml-5 space-y-1">
                        <li>Can conflict with other DNS services</li>
                        <li>More complex to configure</li>
                        <li>May cause issues with NetworkManager on some systems</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Xdebug Installation -->
        <section id="xdebug">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">5</span>
                Xdebug Installation for All PHP Versions
            </h2>
            <p class="text-gray-700 mb-4">Xdebug is essential for debugging PHP. It lets you set breakpoints, inspect variables, and step through code.</p>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-4">
                <p class="text-yellow-900"><strong>Version Compatibility:</strong></p>
                <ul class="list-disc ml-5 space-y-1 text-yellow-900 text-sm">
                    <li>PHP 7.0-7.1: Xdebug 2.x (legacy)</li>
                    <li>PHP 7.2-8.4: Xdebug 3.x (modern)</li>
                </ul>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mb-3">Install Xdebug for All Versions</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code># Install Xdebug for all PHP versions
sudo apt install -y php7.0-xdebug php7.1-xdebug php7.2-xdebug php7.3-xdebug php7.4-xdebug
sudo apt install -y php8.0-xdebug php8.1-xdebug php8.2-xdebug php8.3-xdebug php8.4-xdebug</code></pre>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li>Installs the Xdebug extension for each PHP version</li>
                    <li>Ubuntu's package manager handles version compatibility automatically</li>
                    <li>Extensions are disabled by default — you'll enable them per-version next</li>
                </ul>
            </div>
        </section>

        <!-- Xdebug Configuration -->
        <section id="xdebug-config">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">6</span>
                Xdebug Configuration (Modern & Legacy)
            </h2>

            <h3 class="text-xl font-bold text-gray-900 mb-3">For PHP 8.0+ (Xdebug 3.x - Modern Syntax)</h3>
            <p class="text-gray-700 mb-4">Create configuration for modern PHP versions:</p>

            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>for v in 8.0 8.1 8.2 8.3 8.4; do
    sudo tee /etc/php/${v}/mods-available/xdebug.ini > /dev/null &lt;&lt;EOF
zend_extension=xdebug.so
xdebug.mode=debug
xdebug.client_host=127.0.0.1
xdebug.client_port=9003
xdebug.start_with_request=trigger
xdebug.log=/tmp/xdebug.log
EOF
done</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">For PHP 7.2-7.4 (Xdebug 3.x - Modern Syntax)</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>for v in 7.2 7.3 7.4; do
    sudo tee /etc/php/${v}/mods-available/xdebug.ini > /dev/null &lt;&lt;EOF
zend_extension=xdebug.so
xdebug.mode=debug
xdebug.client_host=127.0.0.1
xdebug.client_port=9003
xdebug.start_with_request=trigger
xdebug.log=/tmp/xdebug.log
EOF
done</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">For PHP 7.0-7.1 (Xdebug 2.x - Legacy Syntax)</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>for v in 7.0 7.1; do
    sudo tee /etc/php/${v}/mods-available/xdebug.ini > /dev/null &lt;&lt;EOF
zend_extension=xdebug.so
xdebug.remote_enable=1
xdebug.remote_host=127.0.0.1
xdebug.remote_port=9000
xdebug.remote_handler=dbgp
EOF
done</code></pre>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-4">
                <p class="text-blue-900 font-medium mb-2">Key Configuration Differences:</p>
                <ul class="list-disc ml-5 space-y-1 text-blue-900 text-sm">
                    <li><strong>Xdebug 3.x (PHP 7.2+):</strong> Uses <code class="bg-blue-100 px-1 rounded">xdebug.mode=debug</code> and port <code class="bg-blue-100 px-1 rounded">9003</code></li>
                    <li><strong>Xdebug 2.x (PHP 7.0-7.1):</strong> Uses <code class="bg-blue-100 px-1 rounded">xdebug.remote_enable=1</code> and port <code class="bg-blue-100 px-1 rounded">9000</code></li>
                    <li><strong>start_with_request=trigger:</strong> Xdebug only activates when you trigger it (better performance)</li>
                </ul>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">for v in ...</code> – Loop through each PHP version</li>
                    <li><code class="bg-gray-100 px-1 rounded">tee ... > /dev/null</code> – Write config file silently</li>
                    <li><code class="bg-gray-100 px-1 rounded">&lt;&lt;EOF...EOF</code> – Multi-line text block (heredoc)</li>
                </ul>
            </div>
        </section>

        <!-- Xdebug Switcher -->
        <section id="xdebug-switcher">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">7</span>
                Xdebug Switcher Script (Easy On/Off)
            </h2>
            <p class="text-gray-700 mb-4">Xdebug slows down PHP. Use this script to enable it only when debugging:</p>

            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo nano /usr/local/bin/xdebug</code></pre>
            </div>

            <p class="text-gray-700 mb-2 mt-4">Paste this script:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>#!/usr/bin/env bash
# xdebug — Ubuntu Xdebug on/off switcher
# Usage: xdebug on   xdebug off   xdebug (check status)

PHP_VERSION=$(php -v | head -n 1 | cut -d ' ' -f 2 | cut -d '.' -f 1,2)

if [ "$1" == "on" ]; then
    sudo phpenmod xdebug
    echo "✓ Xdebug ENABLED for PHP ${PHP_VERSION}"
elif [ "$1" == "off" ]; then
    sudo phpdismod xdebug
    echo "✓ Xdebug DISABLED for PHP ${PHP_VERSION}"
else
    # Check current status
    if php -m | grep -q xdebug; then
        echo "Xdebug is currently: ON (PHP ${PHP_VERSION})"
    else
        echo "Xdebug is currently: OFF (PHP ${PHP_VERSION})"
    fi
    echo ""
    echo "Usage: xdebug [on|off]"
fi

sudo systemctl restart apache2
echo "Apache restarted."</code></pre>
            </div>

            <p class="text-gray-700 mb-2 mt-4">Make it executable:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo chmod +x /usr/local/bin/xdebug</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Usage Examples</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>xdebug          # Check if Xdebug is on or off
xdebug on       # Enable Xdebug for current PHP version
xdebug off      # Disable Xdebug (faster performance)</code></pre>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 mt-4">
                <p class="text-green-900 font-medium">💡 Pro Tip:</p>
                <p class="text-green-900 text-sm">Always run <code class="bg-green-100 px-1 rounded">xdebug off</code> when not debugging. Xdebug can slow PHP down by 2-3x!</p>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">phpenmod</code> – Enables a PHP module (creates symlink)</li>
                    <li><code class="bg-gray-100 px-1 rounded">phpdismod</code> – Disables a PHP module (removes symlink)</li>
                    <li><code class="bg-gray-100 px-1 rounded">php -m | grep</code> – Checks if xdebug is in the loaded modules list</li>
                </ul>
            </div>
        </section>

        <!-- CLI Xdebug -->
        <section id="xdebug-cli">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">8</span>
                CLI Xdebug Setup (for Command Line Debugging)
            </h2>
            <p class="text-gray-700 mb-4">Sometimes you need to debug CLI scripts (Composer, Artisan, etc.). Create a helper script:</p>

            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>mkdir -p ~/bin
nano ~/bin/xdebug-cli.sh</code></pre>
            </div>

            <p class="text-gray-700 mb-2 mt-4">Paste this content:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>#!/usr/bin/env bash
# xdebug-cli.sh — Enable Xdebug for CLI commands
# Usage: source ~/bin/xdebug-cli.sh

export XDEBUG_MODE=debug
export PHP_IDE_CONFIG="serverName=localhost"
export XDEBUG_SESSION=PHPSTORM
export XDEBUG_CONFIG="client_host=127.0.0.1 client_port=9003"

echo "✓ Xdebug CLI environment activated"
echo "Run your PHP command now (e.g., php artisan, composer, etc.)"</code></pre>
            </div>

            <p class="text-gray-700 mb-2 mt-4">Make it executable:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>chmod +x ~/bin/xdebug-cli.sh</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Usage Example</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code># Activate Xdebug for CLI
source ~/bin/xdebug-cli.sh

# Now debug any PHP command
php artisan migrate
composer install
php my-script.php</code></pre>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">export</code> – Sets environment variables for the current terminal session</li>
                    <li><code class="bg-gray-100 px-1 rounded">source</code> – Runs the script in the current shell (so exports persist)</li>
                    <li><code class="bg-gray-100 px-1 rounded">XDEBUG_MODE=debug</code> – Tells Xdebug to activate debugging mode</li>
                </ul>
            </div>
        </section>

        <!-- APCu -->
        <section id="apcu">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">9</span>
                APCu Cache Installation (3X Performance Boost)
            </h2>
            <p class="text-gray-700 mb-4">APCu is an in-memory cache that dramatically speeds up PHP applications (especially frameworks like Laravel, Symfony).</p>

            <h3 class="text-xl font-bold text-gray-900 mb-3">Install APCu for All Versions</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y php7.0-apcu php7.1-apcu php7.2-apcu php7.3-apcu php7.4-apcu
sudo apt install -y php8.0-apcu php8.1-apcu php8.2-apcu php8.3-apcu php8.4-apcu</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Configure APCu (Optional but Recommended)</h3>
            <p class="text-gray-700 mb-4">Create optimized configuration for better performance:</p>

            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>for v in 7.0 7.1 7.2 7.3 7.4 8.0 8.1 8.2 8.3 8.4; do
    sudo tee /etc/php/${v}/mods-available/apcu.ini > /dev/null &lt;&lt;EOF
extension=apcu.so
apc.enabled=1
apc.shm_size=64M
apc.ttl=7200
apc.enable_cli=1
EOF
done</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Restart Services</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo systemctl restart php*-fpm
sudo systemctl restart apache2</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Verify Installation</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>php -m | grep apcu</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Should output: <code class="bg-gray-200 px-2 py-1 rounded">apcu</code></p>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 mt-4">
                <p class="text-green-900 font-medium mb-2">Configuration Explained:</p>
                <ul class="list-disc ml-5 space-y-1 text-green-900 text-sm">
                    <li><code class="bg-green-100 px-1 rounded">apc.shm_size=64M</code> – Cache size (64MB is good for development)</li>
                    <li><code class="bg-green-100 px-1 rounded">apc.ttl=7200</code> – Cache lifetime (2 hours = 7200 seconds)</li>
                    <li><code class="bg-green-100 px-1 rounded">apc.enable_cli=1</code> – Enable APCu for CLI scripts</li>
                </ul>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li>APCu stores data in shared memory (RAM) for ultra-fast access</li>
                    <li>Frameworks like Laravel use it for config/route caching</li>
                    <li>Can result in 2-3X performance improvement</li>
                </ul>
            </div>
        </section>

        <!-- YAML -->
        <section id="yaml">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">10</span>
                YAML Extension (5X Faster YAML Processing)
            </h2>
            <p class="text-gray-700 mb-4">The native YAML extension uses the C library for 5X faster YAML parsing than PHP libraries.</p>

            <h3 class="text-xl font-bold text-gray-900 mb-3">Install libyaml First</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y libyaml-dev</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Install PHP Development Tools</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y php-pear php8.3-dev</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Install YAML via PECL</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo pecl install yaml</code></pre>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mt-4 mb-4">
                <p class="text-yellow-900 font-medium mb-2">When prompted for libyaml installation prefix:</p>
                <p class="text-yellow-900 text-sm">Just press <strong>Enter</strong> to accept the default <code class="bg-yellow-100 px-1 rounded">[autodetect]</code></p>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Create Configuration File</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>for v in 8.0 8.1 8.2 8.3 8.4; do
    echo "extension=yaml.so" | sudo tee /etc/php/${v}/mods-available/yaml.ini
    sudo phpenmod yaml
done</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Restart Services</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo systemctl restart php*-fpm
sudo systemctl restart apache2</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Verify Installation</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>php -m | grep yaml</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Should output: <code class="bg-gray-200 px-2 py-1 rounded">yaml</code></p>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-4">
                <p class="text-blue-900 font-medium mb-2">For PHP 7.x versions:</p>
                <p class="text-blue-900 text-sm">Install php7.x-dev first, then follow the same PECL install process. For PHP 7.0-7.1, you may need to install an older YAML version:</p>
                <pre class="text-blue-900 text-sm bg-blue-100 p-2 rounded mt-2"><code>sudo pecl install yaml-2.0.4</code></pre>
            </div>

            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">PECL</code> – PHP Extension Community Library (package manager for PHP extensions)</li>
                    <li><code class="bg-gray-100 px-1 rounded">libyaml</code> – C library that does the heavy lifting</li>
                    <li>Results in 5X faster YAML parsing compared to PHP libraries</li>
                </ul>
            </div>
        </section>

        <!-- Final Testing -->
        <section id="testing">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-green-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">11</span>
                Final Testing - Put It All Together
            </h2>
            <p class="text-gray-700 mb-4">Let's test everything we just set up!</p>

            <h3 class="text-xl font-bold text-gray-900 mb-3">Test 1: Virtual Hosts</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>mkdir -p ~/Sites/testproject
echo "&lt;?php phpinfo(); ?>" > ~/Sites/testproject/index.php
sudo addhost testproject  # Add testproject.test to hosts (if using addhost script)</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Visit: <a href="http://testproject.test" class="text-blue-600 hover:text-blue-800 underline">http://testproject.test</a> — should show PHP info!</p>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Test 2: PHP Version Switching</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo sphp 8.3   # Check version at http://testproject.test
sudo sphp 7.4   # Refresh - version changes!
sudo sphp 8.2   # Works instantly</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Test 3: Xdebug Toggle</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>xdebug          # Check status
xdebug on       # Enable debugging
xdebug off      # Disable for performance</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Test 4: Database Connection</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo mysql -u root -p
# Or visit http://localhost/adminer or http://localhost/phpmyadmin</code></pre>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Test 5: Extensions</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>php -m | grep -E 'apcu|yaml|xdebug|opcache'</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Should list all installed extensions.</p>

            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Test 6: Real-World Laravel Project</h3>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>cd ~/Sites
composer create-project laravel/laravel mylaravel
cd mylaravel
cp .env.example .env
php artisan key:generate

# Create virtual host (auto-detects Laravel and uses public/)
sudo vhost mylaravel</code></pre>
            </div>
            <p class="text-gray-600 text-sm mt-2">Visit: <a href="http://mylaravel.test" class="text-blue-600 hover:text-blue-800 underline">http://mylaravel.test</a> (no /public needed!)</p>

            <div class="bg-green-50 border-l-4 border-green-500 p-3 mt-3">
                <p class="text-green-900 text-sm font-semibold mb-1">✨ Notice the difference:</p>
                <ul class="list-disc ml-5 text-green-900 text-sm space-y-1">
                    <li><strong>Old way:</strong> <code class="bg-green-100 px-1 rounded">http://mylaravel.test/public</code> (ugly!)</li>
                    <li><strong>New way with vhost script:</strong> <code class="bg-green-100 px-1 rounded">http://mylaravel.test</code> (clean!)</li>
                    <li>The script automatically detected Laravel and configured the DocumentRoot correctly</li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Conclusion -->
    <div class="bg-green-50 border-l-4 border-green-500 p-6 mt-12 rounded-r-lg">
        <h3 class="text-xl font-bold text-green-900 mb-2">🎉 Congratulations!</h3>
        <p class="text-green-900 mb-2">You now have a complete, professional PHP development environment:</p>
        <ul class="list-disc ml-5 space-y-1 text-green-900">
            <li>✅ MySQL/MariaDB with phpMyAdmin or Adminer</li>
            <li>✅ Easy <code class="bg-green-100 px-1 rounded">*.test</code> domains (addhost script or dnsmasq)</li>
            <li>✅ Apache virtual hosts with automatic routing</li>
            <li>✅ Xdebug with easy toggle</li>
            <li>✅ APCu cache for performance</li>
            <li>✅ Native YAML support</li>
            <li>✅ Multiple PHP versions with instant switching</li>
        </ul>
        <p class="text-green-900 mt-3 font-semibold">Start building amazing PHP projects! 🚀</p>
    </div>

    <!-- Quick Reference -->
    <div class="bg-gray-50 rounded-lg p-6 mt-8">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Quick Reference Commands</h3>
        <div class="space-y-2 text-sm">
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">sudo sphp 8.3</code>
                <span class="text-gray-600">Switch to PHP 8.3</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">sudo vhost myproject</code>
                <span class="text-gray-600">Create full vhost setup for myproject.test</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">sudo addhost myproject</code>
                <span class="text-gray-600">Just add myproject.test to hosts</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">xdebug on</code>
                <span class="text-gray-600">Enable Xdebug</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">xdebug off</code>
                <span class="text-gray-600">Disable Xdebug</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">sudo systemctl restart apache2</code>
                <span class="text-gray-600">Restart Apache</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <code class="text-gray-900">sudo mysql -u root -p</code>
                <span class="text-gray-600">Access MySQL</span>
            </div>
            <div class="flex justify-between">
                <code class="text-gray-900">php -m</code>
                <span class="text-gray-600">List loaded PHP modules</span>
            </div>
        </div>
    </div>

    <!-- Troubleshooting -->
    <div class="bg-orange-50 rounded-lg p-6 mt-8">
        <h3 class="text-lg font-bold text-orange-900 mb-4">🔧 Common Issues & Solutions</h3>
        <div class="space-y-4">
            <div>
                <h4 class="font-bold text-orange-900 mb-1">Virtual host not working?</h4>
                <p class="text-orange-900 text-sm">Check: <code class="bg-orange-100 px-1 rounded">ping myproject.test</code> — should respond with 127.0.0.1</p>
                <p class="text-orange-900 text-sm mt-1">If using addhost: <code class="bg-orange-100 px-1 rounded">sudo addhost myproject</code></p>
                <p class="text-orange-900 text-sm mt-1">If using dnsmasq: <code class="bg-orange-100 px-1 rounded">sudo systemctl restart dnsmasq NetworkManager</code></p>
            </div>
            <div>
                <h4 class="font-bold text-orange-900 mb-1">Xdebug not working?</h4>
                <p class="text-orange-900 text-sm">Check: <code class="bg-orange-100 px-1 rounded">php -m | grep xdebug</code> — should show xdebug</p>
                <p class="text-orange-900 text-sm mt-1">If not: <code class="bg-orange-100 px-1 rounded">xdebug on && sudo systemctl restart apache2</code></p>
            </div>
            <div>
                <h4 class="font-bold text-orange-900 mb-1">Can't connect to MySQL?</h4>
                <p class="text-orange-900 text-sm">Check: <code class="bg-orange-100 px-1 rounded">sudo systemctl status mariadb</code> — should be active</p>
                <p class="text-orange-900 text-sm mt-1">If not: <code class="bg-orange-100 px-1 rounded">sudo systemctl start mariadb</code></p>
            </div>
        </div>
    </div>

    <!-- Next Steps -->
    <div class="bg-blue-50 rounded-lg p-6 mt-8">
        <h3 class="text-lg font-bold text-blue-900 mb-4">🚀 Next Steps</h3>
        <ul class="space-y-2 text-blue-900">
            <li class="flex items-start">
                <span class="mr-2">1.</span>
                <span>Check out <strong>Part 3</strong> for SSL/HTTPS setup (coming soon)</span>
            </li>
            <li class="flex items-start">
                <span class="mr-2">2.</span>
                <span>Install <strong>Composer</strong> globally: <code class="bg-blue-100 px-1 rounded">curl -sS https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer</code></span>
            </li>
            <li class="flex items-start">
                <span class="mr-2">3.</span>
                <span>Install <strong>Node.js</strong>: <code class="bg-blue-100 px-1 rounded">curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash - && sudo apt install -y nodejs</code></span>
            </li>
            <li class="flex items-start">
                <span class="mr-2">4.</span>
                <span>Set up your IDE (VS Code, PHPStorm) with Xdebug configuration</span>
            </li>
        </ul>
    </div>

    <!-- Back to top -->
    <div class="text-center mt-12">
        <a href="#" class="text-blue-600 hover:text-blue-800 inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
            Back to Top
        </a>
    </div>
</div>

<script>
function copyCode(button) {
    const codeBlock = button.nextElementSibling.querySelector('code');
    const text = codeBlock.textContent;

    navigator.clipboard.writeText(text).then(() => {
        const originalText = button.textContent;
        button.textContent = 'Copied!';
        button.classList.add('bg-green-600');
        button.classList.remove('bg-gray-700');

        setTimeout(() => {
            button.textContent = originalText;
            button.classList.remove('bg-green-600');
            button.classList.add('bg-gray-700');
        }, 2000);
    });
}
</script>
@endsection